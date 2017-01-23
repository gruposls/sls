 var curso_combo = function(){
        $.ajax({
        	method:"POST",
        	url: "../../curso/CursoController.php",
        	data: {opcion:"combo"}
        }).done(function( info ){
            var json = JSON.parse( info );
            var combo="";
            combo+="<select id='curso'>";
            combo+="<option>Seleccionar Curso</option>"
            for (var i=0; i<json.length;i++) {                
            combo+="<option value='"+json[i].idcurso+"'>"+json[i].nombre+"</option>";
            }
            combo+="</select>";
            var combocurso=$("#combocurso").html(combo);
        });

}