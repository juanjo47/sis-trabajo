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
                                    <a href="http://127.0.0.1:5000/" class="nav-link">

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
                                Asignacion Tutor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                                Modificacion de Tutor
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
            <!-- Main content -->

            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                        <!-- Registro de Trabajo de grado-->

                        <!-- Main content -->
                        <div class="card card-info">
                            <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Asignacion Tutor</h3>
                            </div>
                            <!-- /.card-header -->
                            <div style="width: 80%" class="card-body">
                                <form action="asig_tut.php" method="post">
                                    <div class="input-group input-group-sm" style="margin-top:30px; margin-left:0px;">
                                        <input class="form-control" type="search" placeholder="Verificar estudiante mediante Codigo saga" name="search1">
                                        <div class="input-group-append">
                                            <button class="btn btn-default" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <form method="post" action="../procesos/asig_tut.php">
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre estudiante</th>
                                                <th>Codigo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if(isset($_POST['search1'])){
                                                    $searchq1 = $_POST['search1'];
                                                    $bestudiante =  ejecutarSQL::consultar("select * from estudiante where codigo_saga LIKE '$searchq1'");
                                                    while($best=mysqli_fetch_array($bestudiante)){    
                                                        echo '            
                                                        <tr style=width: 100%>
                                                            <td>'.$best['ID_estudiante'].'  </td>
                                                            <td>'.$best['nombres'].'        </td>
                                                            <td>'.$best['codigo_saga'].'    </td>
                                                        </tr>';
                                                    }   
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>



                            <div style="width: 80%" class="card-body">
                                <form  method="post" action="asig_tut.php">
                                    <div class="input-group input-group-sm" style="margin-top:30px; margin-left:0px;">
                                        <input class="form-control" type="search" placeholder="Buscar Docente por Nombre o Apellido" name="search2">
                                        <div class="input-group-append">
                                            <button class="btn btn-default" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <form method="post" action="../procesos/asig_tut.php">
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre docente</th>
                                                <th>Codigo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if(isset($_POST['search2'])){
                                                    $searchq2 = $_POST['search2'];
                                                    $bdocente =  ejecutarSQL::consultar("select * from docente where nombres LIKE '%$searchq2%'");
                                                    while($bdoc=mysqli_fetch_array($bdocente)){
                                                        echo '            
                                                            <tr style=width: 100%>
                                                                <td>'.$bdoc['ID_docente'].'</td>
                                                                <td>'.$bdoc['nombres'].'</td>
                                                                <td>'.$bdoc['codigo_saga'].'</td>        
                                                            </tr>';

                                                    }   
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            <br>
                                <!-- /.card-body -->
                                <form method="post" action="../procesos/asigTutor.php">
                                <div class="form-group row card-body" style="width: 90%">
                                    <div class="form-group row col-6">
                                        <label for="inputnameAd" class="col-sm-4 col-form-label">Codigo Est.</label>
                                        <div class="col-sm-8">
                                            <input name="est-cod" type="Name" class="form-control"  placeholder="Codigo del estudiante">
                                        </div>
                                    </div>
                                    <div class="form-group row col-6">
                                        <label for="inputnameAd" class="col-sm-4 col-form-label">Codigo Doc.</label>
                                        <div class="col-sm-8">
                                            <input name="doc-cod" type="Name" class="form-control"  placeholder="Codigo del docente">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <button type="submit" class="btn bg-navy">Registrar</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        

                    </div>
                    
                    
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">


                        <!--Asignar docente Tutor-->

                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                            <!-- Registro de Trabajo de grado-->
                            <div class="card card-info">
                            <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Modificar Tutor</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 30px">ID_Est</th>
                                                <th>Nombre Estudiante</th>
                                                <th style="width: 30px">ID_Doc</th>
                                                <th>Nombre Docente</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $estudiantes =  ejecutarSQL::consultar("Select est.ID_estudiante, est.nombres as nombre_est, est.tutor, doc.ID_docente, doc.nombres as nombre_doc FROM estudiante est LEFT JOIN docente doc on est.tutor = doc.ID_docente");
                                        $upr=1;
                                        while($est=mysqli_fetch_array($estudiantes)){
                                            echo'
                                            <div>
                                                <form method="post" action="../procesos/updEstudiante.php" '.$upr.'">
                                                    <tr>
                                                        <td>
                                                            <input style="width:30px" type="hidden" name="est-id" required="" value="'.$est['ID_estudiante'].'"> 
                                                            '.$est['ID_estudiante'].'
                                                        </td>
                                                        <td >
                                                            '.$est['nombre_est'].'
                                                        </td>
                                                        <td>
                                                            <input style="width: 30px" type="text" name="tutor" required="" value="'.$est['tutor'].'">
                                                        </td>
                                                        <td>
                                                            '.$est['nombre_doc'].'
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                </form>
                                            </div>';
                                            $upr=$upr+1;
                                        };
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-footer -->
                        </div>

                            <!-- Main content -->
                            


                        </div>
                    </div>


                    <!-- /.col-md-6 -->
                </div>
            </div>
        </div>
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
