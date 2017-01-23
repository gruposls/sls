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
                                <form id="frmRegistrarAlumno" class="form-horizontal" method="POST">
                                    <input type="hidden" name="opcion" value="registrar">
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-2">
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Apellido Paterno</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="app" name="app">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Apellido Materno</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="apm" name="apm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">DNI</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="dni" name="dni">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Sexo</label>
                                        <div class="col-sm-6" id="rates">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="ms" name="sexo" value="1" checked="">
                                                   Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="fm" name="sexo" value="0">
                                                    Femenino
                                                </label>
                                            </div>                                                                    
                                        </div>
                                    </div>   

                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Fecha Nacimiento</label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input id="fecha_nac" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="fecha_nac">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Telefono</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="telefono" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Direccion</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="direccion" name="direccion">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Correo Electronico</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Curso</label>
                                        <div class="col-sm-2" id="combocurso">                                
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="reset" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-info pull-right">Registrar</button>
                                    </form>
                                    
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
    <script type="text/javascript" src="./public/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="./public/js/datatables.js"></script>
    <script type="text/javascript" src="./public/js/alumno.js"></script>
    <script type="text/javascript" src="./public/js/curso.js"></script>
    <script type="text/javascript">
        $(function(){
            alumno_registrar();
            curso_combo();
        });       
    </script>
</body>
</html>