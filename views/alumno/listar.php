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
                    <div class="input-daterange input-group" id="datepicker">
                        <input type="text" id="fi" class="input-sm form-control" name="from" placeholder="From date"/>
                        <span class="input-group-addon">to</span>
                        <input type="text" id="ff" class="ff input-sm form-control" name="to" placeholder="To date"/>
                    </div>
                </div>
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
<script type="text/javascript" src="../../public/js/bootstrap.js"></script>   
<script type="text/javascript" src="../../public/js/datatables.js"></script>
<script type="text/javascript" src="../../public/js/datepicker.js"></script>
<script type="text/javascript" src="../../public/js/alumno.js"></script>
<script type='text/javascript'>
$(function(){
    alumno_listar();

$("#fi").datepicker({
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        maxDate: '+0d'         
    }).datepicker("setDate", new Date());
$("#ff").datepicker({
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        maxDate: '+0d'
    }).datepicker("setDate", new Date());
});

</script>
</body>
</html>