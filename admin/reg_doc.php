<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>administracion</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Inicio</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-navy sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <span class="brand-text text-yellow " style="margin-left: 5px;">Escuela Militar de Ingenieria</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Nombre del admi</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">

                                <p>
                                    Gestion de Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="reg_est.php" class="nav-link">

                                        <p>Registro Estudiantes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="reg_doc.php" class="nav-link">

                                        <p>Registro Docentes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="reg_adm.php" class="nav-link active">

                                        <p>Registro Administradores</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">

                                <p>
                                    Gestion de Tribunal
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="asig_tut.php" class="nav-link">

                                        <p>Asignacion de Tutor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="asig_rev.php" class="nav-link">

                                        <p>Asignacion de Revisores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="asig_evi.php" class="nav-link">

                                        <p>Evidencia de asignaciones</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">

                                <p>
                                    Seguimiento de TG
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="seg_trab.php" class="nav-link">

                                        <p>Trabajos de Grado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="seg_evi.php" class="nav-link">

                                        <p>Evidencia de TG</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">

                                <p>
                                    Generacion de Reportes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="rev_trab.php" class="nav-link">

                                        <p>Revision de TG</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="rev_doc.php" class="nav-link">

                                        <p>Documentos de Revision</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>


                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <!-- /.content-header -->

                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">
                                            Registro del Docente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                                            Modificar Datos del Docente</a>
                                    </li>
                                </ul>
                            </div>


                        </div>

            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                                    <!-- Registro de Administradores-->

                                    <!-- Main content -->
                        <div class="card card-info">
                          <div class="card-header bg-navy color-palette">
                            <h3 class="card-title">Registro de Docentes</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form method="post" action="../procesos/regDoc.php">
                            <div class="card-body">
                              <div class="form-group row">
                                <label for="inputnameAd" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input name="nombre-registro-doc" type="Name" class="form-control" placeholder="Nombres y Apellidos">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputemail" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                  <input name="correo-registro-doc" type="email" class="form-control" placeholder="Correo">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                  <input name="contrasena-registro-doc" type="password" class="form-control" placeholder="Contraseña">
                                </div>
                              </div>
                             <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Codigo Saga</label>
                                <div class="col-sm-10">
                                  <input name="codigo-registro-doc" type="texto" class="form-control" placeholder="Codigo Saga">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Cedula</label>
                                <div class="col-sm-10">
                                  <input name="cedula-registro-doc" type="texto" class="form-control" placeholder="Cedula de Identificacion">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Años en educacion</label>
                                <div class="col-sm-10">
                                  <input name="especialidad1-registro-doc" type="texto" class="form-control" placeholder="Primer Area Especialidad y Principal Enfoque">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Profesion</label>
                                <div class="col-sm-10">
                                  <input name="especialidad1-registro-doc" type="texto" class="form-control" placeholder="Primer Area Especialidad y Principal Enfoque">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Estudio Superior</label>
                                <div class="col-sm-10">
                                  <input name="especialidad2-registro-doc" type="texto" class="form-control" placeholder="Segunda Area de Especialidad">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Estudio Superior</label>
                                <div class="col-sm-10">
                                  <input name="especialidad3-registro-doc" type="texto" class="form-control" placeholder="Tercer Area de Especialidad">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Especialidad</label>
                                <div class="col-sm-10">
                                  <input name="especialidad4-registro-doc" type="texto" class="form-control" placeholder="Cuarta Area de Especialidad">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Experiencia Laboral</label>
                                <div class="col-sm-10">
                                  <input name="especialidad5-registro-doc" type="Codigo" class="form-control" placeholder="Quinta Area de  Especialidad">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Experiencia Laboral</label>
                                <div class="col-sm-10">
                                  <input name="especialidad5-registro-doc" type="Codigo" class="form-control" placeholder="Quinta Area de  Especialidad">
                                </div>
                              </div>
                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Experiencia Laboral</label>
                                <div class="col-sm-10">
                                  <input name="especialidad5-registro-doc" type="Codigo" class="form-control" placeholder="Quinta Area de  Especialidad">
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn bg-navy">Registrar</button>
                              <button type="clear" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                          </form>
                        </div>
                        

                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">


                        <!--Dar de baja Administradores-->

                        <div class="card card-info">
                            <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Modificar Datos del Estudiante</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            
                                        </thead>
                                        <tbody>
                                            <?php 
                                        $docentes =  ejecutarSQL::consultar("select * from docente");
                                        $upr=1;
                                        while($doc=mysqli_fetch_array($docentes)){ 
                                                
                                            echo '
                                                <div>
                                                  <form method="post" action="../procesos/updDocente.php" '.$upr.'">
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th style="width: 100px">Nombre Completo</th>
                                                <th style="width: 100px">Correo</th>
                                                <th style="width: 100px">CI</th>
                                                <th style="width: 100px">Codigo Saga</th>
                                                <th style="width: 100px">especialidad_1</th>
                                            </tr>
                                                <tr>
                                                    <td>
                                                        <input type="hidden" name="doc-id" required="" value="'.$doc['ID_docente'].'"> 
                                                        '.$doc['ID_docente'].'
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-nombres" required="" value="'.$doc['nombres'].'">
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-correo" required="" value="'.$doc['correo'].'">
                                                    </td >
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-carnet" required="" value="'.$doc['carnet'].'">
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-codigo" required="" value="'.$doc['codigo_saga'].'">
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input  style="width: 100%" type="text" name="doc-esp1" required="" value="'.$doc['especialidad_1'].'">
                                                    </td>
                                                </tr>
                                                <tr>
                                                <th></th>
                                                <th style="width: 100px">especialidad_2</th>
                                                <th style="width: 100px">especialidad_3</th>
                                                <th style="width: 100px">especialidad_4</th>
                                                <th style="width: 100px">especialidad_5</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-esp2" required="" value="'.$doc['especialidad_2'].'">
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-esp3" required="" value="'.$doc['especialidad_3'].'">
                                                    </td>
                                                    <td style="width: 180px">
                                                        <input style="width: 100%" type="text" name="doc-esp4" required="" value="'.$doc['especialidad_4'].'">
                                                    </td>
                                                    <td style="width: 200px">
                                                        <input style="width: 100%" type="text" name="doc-esp5" required="" value="'.$doc['especialidad_5'].'">
                                                    </td>
                                                    
                                                    <td style="width: 200px" class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                    </td>
                                                </tr>
                                            </form>
                                        </div>';
                                            $upr=$upr+1;
                                        }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-footer -->
                        </div>

                    </div>

                </div>
            </div> 

        </div>
                        <!-- /.col-md-6 -->
    </div>
                    <!-- /.row -->
          
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>
