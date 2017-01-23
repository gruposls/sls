<!DOCTYPE html>
<html>
<?php
include (dirname(__FILE__) . '/../../sources/header.html');
?>


<body class="page-header-fixed">

    <main class="page-content content-wrap">

        <div class="page-inner">
            <div class="page-title">
                <h3>Formulario de Registro</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <table id="tabla_alumno" class="table">
                                    <thead>
                                        <tr>                                            
                                            <th>Nombre</th>
                                            <th>A. Paterno</th>
                                            <th>A. Materno</th>
                                            <th>Curso</th>
                                            <th>Estado</th>                                            
                                        </tr>
                                    </thead>                                            
                                </table>
                            </div>                               
                        </div>

                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p class="no-s">2016 &copy; Bilbox by dougborton.</p>
        </div>
    </div><!-- Page Inner -->
</main><!-- Page Content -->
<!-- Javascripts -->
<script type="text/javascript" src="../../public/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="../../public/js/datatables.js"></script>
<script type="text/javascript" src="../../public/js/alumno.js"></script>
<script type="text/javascript">
        $(function(){
            alumno_listar();
        });       
    </script>
</body>
</html>