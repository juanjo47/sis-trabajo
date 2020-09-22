<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="UTF-8">
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
                                Cargado de Documentos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                                Apartado de Documentos
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
                                <h3 class="card-title">Subir Trabajos de Grado</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                        
                            <div class="card-body">
                                <form action="../subir.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row" style="text-align:center">
                                        <label for="input" class="col-sm-4 col-form-label">Adjunto</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="archivo">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="text-align:center">
                                        <label for="inputautor" class="col-sm-4 col-form-label">Autor</label>
                                         <div class="col-sm-6">
                                            <input name="nombre" type="Name" class="form-control" placeholder="Nombres y Apellidos"  style="width: 60%">
                                        </div>
                                    </div>
                                    <div style="text-align:center">
                                        <button type="submit" value="ENVIAR"> Subir archivo </button>
                                    </div>
                                    
                                </form>
                            </div>
                        <div class="form-group row">
                            <div class="card-body col-sm-6" style="text-align: center;">
                                <h3>Estudiante</h3>
                                <h4 style="text-align: justify">
                                    Debe considerar subir su documento con el formato presentado a continuacion: APELLIDO-P-MT-MP conidere que la diferentes siglas corresponden a las aetpas del desarrollo de Trabajos de Grado
                                </h4>
                            </div>
                            <div class="card-body col-sm-6" style="text-align: center;">
                                <h3>Docente</h3>
                                <h4 style="text-align: justify">
                                    Debe considerar el nombre del documento el cual descargo y unicamente añadirle una c al final del nombre del documento que contenga sus correcciones ejemplo QUIROGA-Pc
                                </h4>
                            </div>
                        </div>
                       
                        </div>


                    </div>
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">


                        <!--Dar de baja Administradores-->

                        <div class="card card-info">
                            <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Modificar Datos del Administrador</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                               
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="7%">#</th>
                                            <th width="70%">Nombre del Archivo</th>
                                            <th width="13%">Descargar</th>
                                            <th width="10%">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $archivos = scandir("../archivos");
                                        $num=0;
                                        for ($i=2; $i<count($archivos); $i++)
                                        {$num++;
                                        ?>
                                        <p>  
                                        </p>
         
                                        <tr>
                                            <th scope="row"><?php echo $num;?></th>
                                            <td><?php echo $archivos[$i]; ?></td>
                                            <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
                                            <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
                                        </tr>
                                        <?php }?> 

                                    </tbody>
                                    
                                </table>
                                
                                
                                
                            </div>
                            <!-- /.card-footer -->
                        </div>

                    </div>

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
