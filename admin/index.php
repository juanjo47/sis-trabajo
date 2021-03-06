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
            <a href="../index.html" class="brand-link">
                <span class="brand-text text-yellow" style="margin-left: 5px;">Escuela Militar de Ingenieria</span>
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
                            <a href="index.php" class="nav-link active">
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-close">
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <h2 class="m-0-sm-8">Bienvenido al sistema para el seguimiento y control de Trabajos de Grado HADES
                        </h2>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 bg-gray disabled color-palette" align="center">
                            <img src="../images/logo.png">

                            
                            </div><!-- /.card -->

                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



    
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
