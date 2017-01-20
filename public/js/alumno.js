 var alumno_registrar = function(){
    $("#frmRegistrarAlumno").on("submit", function(e){
        e.preventDefault();
        var frm = $(this).serialize();
        console.log( frm );

        $.ajax({
        	method:"POST",
        	url: "alumno/AlumnoController.php",
        	data: frm
        }).done(function( info ){
        	console.log( info );
        });

    });
}