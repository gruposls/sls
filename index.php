<!DOCTYPE html>
<html>
<?php include('./sources/header.html');?>

<body class="page-header-fixed">

    <main class="page-content content-wrap">

        <div class="page-inner">
            <div class="page-title">
                <h3>Form Elements</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Form Elements</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" action="registro.php" method="POST">
                                    <input type="hidden" name="fu" value="nuevo">
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
                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="ms" value="1" checked="">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="fm" value="0">
                                                    Femenino
                                                </label>
                                            </div>                                                                    
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Fecha Nacimiento</label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input id="fecha_nac" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="fecha_nac">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telefono</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="telefono" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Direccion</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="direccion" name="direccion">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Correo Electronico</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Curso</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="idcurso" name="idcurso">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="reset" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-info pull-right">Registrar</button>
                                    </div>

                                </form>

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

</body>
</html>