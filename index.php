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
                                                <input type="text" class="form-control" id="input-Default" name="Nom">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Apellido Paterno</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="input-Default" name="Ap">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Apellido Materno</label>
                                            <div class="col-sm-2">
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
                                                                            Masculino
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="sexo" value="0">
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
                                                                        <input id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="fecha_nac">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Telefono</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputError" name="telefono">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Direccion</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputError" name="direccion">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Correo Electronico</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputError" name="email">
                                                                </div>
                                                            </div>
                                        <div class="col-sm-6">
                                                                <button type="reset" class="btn btn-default">Cancelar</button>
                                                                <button type="submit" class="btn btn-info pull-right">Registrar</button>
                                                            </div>
                                        
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
        <script src="./js/jquery-2.1.3.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/form-select2.js"></script>


    </body>
</html>