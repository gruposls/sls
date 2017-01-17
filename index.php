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
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="input-Default" name="Nom">
=======
                                        <input type="text" class="form-control" id="nombre" name="nombre">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Apellido Paterno</label>
                                        <div class="col-sm-2">
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="input-Default" name="Ap">
=======
                                            <input type="text" class="form-control" id="app" name="app">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Apellido Materno</label>
                                        <div class="col-sm-2">
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="input-Default" name="Am">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">DNI</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="input-Default" name="dni">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Genero</label>
                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="sexo" value="1" checked="">
=======
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
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
<<<<<<< HEAD
                                                    <input type="radio" name="sexo" value="0">
=======
                                                    <input type="radio" name="fm" value="0">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
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
<<<<<<< HEAD
                                                <input id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="fecha_nac">
=======
                                                <input id="fecha_nac" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="fecha_nac">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Telefono</label>
<<<<<<< HEAD
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="inputError" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Direccion</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="inputError" name="direccion">
=======
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="telefono" name="telefono">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Direccion</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="direccion" name="direccion">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Correo Electronico</label>
                                        <div class="col-sm-6">
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="inputError" name="email">
=======
                                            <input type="text" class="form-control" id="email" name="email">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-2 control-label">Curso</label>
                                        <div class="col-sm-2">
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="input-Default" name="dni">
=======
                                            <input type="text" class="form-control" id="idcurso" name="idcurso">
>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="reset" class="btn btn-default">Cancelar</button>
                                        <button type="submit" class="btn btn-info pull-right">Registrar</button>
                                    </div>
<<<<<<< HEAD
                                    
                                </form>
                                <?php
                                
                                if(isset($_POST["btnRegistrarVideo"])){
                                    $Nom = $_POST["Nom"];   
                                            //$CodVideo = $_POST["CodVideo"];   
                                    $Ap = $_POST["Ap"];
                                    $Am = $_POST["Am"];
                                    $dni = $_POST["dni"];
                                    $fechar = date("Y-m-d H:i:s");
                                    
                                    $sql_prd1 = "INSERT INTO alumno(id,Nom,Ap,Am,dni,fechar,estado) VALUES ('','$Nom','$Ap','$Am','$dni','$fechar',1)";   
                                    $result_prd1 = mysqli_query($connect,$sql_prd1) or die("ERROR");
                                    
                                }  
                                ?>
=======

                                </form>

>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
<<<<<<< HEAD
            
=======

>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
            <div class="page-footer">
                <p class="no-s">2016 &copy; Bilbox by dougborton.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
<<<<<<< HEAD

    <!-- Javascripts -->
    
=======

    <!-- Javascripts -->

>>>>>>> afd55198e0f6c62e8b3a708ed6eec3273efe7f1f
</body>
</html>