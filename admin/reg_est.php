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
                                    <a href="reg_est.php" class="nav-link active">

                                        <p>Registro Estudiantes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="reg_doc.php" class="nav-link">

                                        <p>Registro Docentes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="reg_adm.php" class="nav-link">

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
                                    <a href="asig_trib.php" class="nav-link">

                                        <p>Asignacion de Tribunal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="asig_trab.php" class="nav-link">

                                        <p>Asignacion de Trabajo</p>
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
                                    <a href="#" class="nav-link">

                                        <p>Revision de documentos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">

                                        <p>fechas de entrega</p>
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
                                Registro de Estudiante</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                                Modificar Datos del Estudiante
                            </a>
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
                                <h3 class="card-title">Registro de Estudiantes</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            
                            <form method="post" action="../procesos/regEst.php">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputnameAd" class="col-sm-2 col-form-label">Nombre Completo</label>
                                        <div class="col-sm-10">
                                            <input name="nombre-registro-est" type="Name" class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputemail" class="col-sm-2 col-form-label">Correo</label>
                                        <div class="col-sm-10">
                                            <input name="correo-registro-est" type="email" class="form-control" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                                        <div class="col-sm-10">
                                            <input name="contrasena-registro-est" type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Codigo Saga</label>
                                        <div class="col-sm-10">
                                            <input name="codigo-registro-est" type="text" class="form-control" placeholder="Codigo Saga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Cedula</label>
                                        <div class="col-sm-10">
                                            <input name="cedula-registro-est" type="text" class="form-control" placeholder="Cedula de Identificacion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Semestre</label>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <select name="semestre-registro-est" class="form-control">
                                                    <option>--Seleccione--</option>
                                                    <option>Noveno</option>
                                                    <option>Decimo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn bg-navy">Registrar</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
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
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Nombre Completo</th>
                                                <th>Correo</th>
                                                <th>CI</th>
                                                <th>Codigo Saga</th>
                                                <th>Semestre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        $estudiantes =  ejecutarSQL::consultar("select * from estudiante");
                                        $upr=1;
                                        while($est=mysqli_fetch_array($estudiantes)){ 
                                            
                                                echo '
                                                <div>
                                                  <form method="post" action="../procesos/updEstudiante.php" '.$upr.'">
                                                <tr>
                                                    <td>
                                                        <input type="hidden" name="est-id" required="" value="'.$est['ID_estudiante'].'"> 
                                                        '.$est['ID_estudiante'].'
                                                    </td>
                                                    <td>
                                                        <input type="text" name="est-nombre" required="" value="'.$est['nombres'].'">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="est-correo" required="" value="'.$est['correo'].'">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="est-carnet" required="" value="'.$est['carnet'].'">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="est-saga" required="" value="'.$est['codigo_saga'].'">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="est-semestre">';

                                                        $estCon=  ejecutarSQL::consultar("select * from estudiante");
                                                        while($EstS=mysqli_fetch_array($estCon)){
                                                            echo '<option name="est-semestre" value="'.$EstS['semestre'].'">'.$EstS['semestre'].'</option>';
                                                        }
                                                        echo '
                                                        <option>Noveno</option>
                                                        <option>Decimo</option>
                                                        </select>
                                                    </td>
                                                    
                                                    <td class="text-center">
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
