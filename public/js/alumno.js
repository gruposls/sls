 var alumno_registrar = function(){
    $("#frmRegistrarAlumno").on("submit", function(e){
        e.preventDefault();
        var frm = $(this).serialize();
        console.log( frm );

        $.ajax({
        	method:"POST",
        	url: "../../alumno/AlumnoController.php",
        	data: frm
        }).done(function( info ){
        	console.log( info );
        });
    });
}

var alumno_listar = function(){
    $("#alumno_click").on("click", function(){
        var fecha_inicio = $("#fecha_inicio").val(),
            fecha_final = $("#fecha_final").val();
            //estado = $("input[name=estado]:checked").val();
        console.log(fecha_inicio+" to "+fecha_final);

        if( fecha_inicio == "" && fecha_final == "" ){
            alert("Llenar los campos de las fechas");
        }else{
            var table = listar(fecha_inicio, fecha_final);
            obtener_data_alumno("#tabla_alumno tbody", table);
        }
    });

    function listar(fecha_inicio, fecha_final){
        estado = $("input[name=estado]:checked").val();
        var table = $("#tabla_alumno").DataTable({
                "destroy": true,
                "ajax":{
                    "method":"POST",
                    "url": "../../alumno/AlumnoController.php",
                    "data":{opcion:"listarPorFechasYEstado", fecha_inicio: fecha_inicio, fecha_final: fecha_final, estado: estado}
                },
                "columns":[
                {"data":"nombre"},
                {"data":"app"},
                {"data":"apm"},
                {"data":"curso"},
                {"data":"estado"},
                {"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>"}
                ]
            });
        return table;
    }

    var obtener_data_alumno = function(tbody, table){
        $(tbody).on("click", "button.editar", function(){
            var data = table.row( $(this).parents("tr") ).data();
            console.log( data );
            var estado = data.estado == 0 ? 1 : 0;
            console.log("estado a cambiar: " + estado );
            $.ajax({
                method:"POST",
                url: "../../alumno/AlumnoController.php",
                data: {opcion:"modificarEstadoPago", idpersona: data.idpersona, estado : estado } 
            }).done( function( info ){
                $(".mensaje").fadeIn(500).html("Se han realizado los cambios correctamente.").css({"background":"#88D8B0"});
                $(".mensaje").fadeOut(3000);
                //Asignación de fecha actual.
                listar( fecha_actual(), fecha_actual() );
            });
        });
    }

    function fecha_actual(){
        var d = new Date(),
            dia = d.getDate(),
            mes = d.getMonth()+1,
            anio = d.getFullYear();
        var fecha = anio+"-"+mes+"-"+dia;
        return fecha;
    }
    
}

