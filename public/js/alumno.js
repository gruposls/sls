 var alumno_registrar = function(){
            $("#frmRegistrarAlumno").on("submit", function(e){
                e.preventDefault();
                var frm = $(this).serialize();
                console.log( frm );
            });
        }