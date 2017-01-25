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
            fecha_final = $("#fecha_final").val(),
            estado = $("input[name=estado]:checked").val();
        console.log(fecha_inicio+" to "+fecha_final + " e: " + estado);

        if( fecha_inicio == "" && fecha_final == "" ){
            alert("Llenar los campos de las fechas");
        }else{
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
                {"data":"estado"}
                ]
            });
        }
    });

    
    
}

