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

            <!-- Main content -->
           <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">
                                Registro de Trabajo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">
                                Actualizar Trabajo
                            </a>
                        </li>
                    </ul>
                </div>


            </div>

            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                        <!-- Registro de Trabajo de grado-->

                        <!-- Main content -->
                         <div class="card card-info">
                              <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Registro de Trabajo</h3>
                              </div>
                              <!-- /.card-header -->
                         <div style="width: 80%"class="card-body">
                         <form action="seg_trab.php" method="post" >
                                  <div class="input-group input-group-sm" style="margin-top:30px; margin-left:0px;">
                                       <input class="form-control" type="search" placeholder="Buscar estudiante" name="search1">
                                        <div class="input-group-append">
                                              <button class="btn btn-default" type="submit">
                                                <i class="fas fa-search"></i>
                                             </button> 
                                         </div>
                                     </div>
                             </form>
                         </div>  

                                                 
                              <!-- form start -->
                              <form method="post" action="../procesos/asigtrab.php">   
                                        <div class="card-body p-0">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Estudiante</th>
                                                        <th>Codigo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        if(isset($_POST['search1'])){
                                                            $searchq = $_POST['search1'];

                                                        $bestudiante =  ejecutarSQL::consultar("select * from estudiante where codigo_saga LIKE '$searchq'");
                                                        while($best=mysqli_fetch_array($bestudiante)){
                                                        
                                                                echo '            
                                                                    <tr style=width: 100%>
                                                                        <td>
                                                                            <input type="hidden" name="id-estt-trab" required="" value="'.$best['ID_estudiante'].'"> 
                                                                            '.$best['ID_estudiante'].'
                                                                        </td>
                                                                        <td>'.$best['nombres'].'</td>
                                                                        <td>'.$best['codigo_saga'].'</td>
                                                                       
                                                                    </tr>'
                                                                    
                                                                    ;

                                                            }   
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
<!--
                                  </form>
                             
                             
                            <form method="post" action="../procesos/regTrab.php">    
-->
                                <div class="card-body">
                                  <div class="form-group row">
                                    <label for="inputnameAd" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-10">
                                      <input name="titulo-registro-trab" type="Name" class="form-control"  placeholder="Nombre" value = "">
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                    <label for="inputemail" class="col-sm-2 col-form-label">Descripcion</label>
                                    <div class="col-sm-10">
                                      <input name="descripcion-registro-trab" type="text" class="form-control" placeholder="En esta casilla debe poner una descripcion corta del Trabajo">
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Area</label>
                                    <div class="col-sm-10">
                                      <div class="form-group">
                                        <select name="area-registro-trab" class="form-control">
                                          <option>--Area de Desempeño--</option>
                                          <option>Inteligencia Artificial</option>
                                          <option>Base de Datos</option>
                                            <option>Seguridad de Sistemas</option>
                                            <option>Microporcesadores</option>
                                            <option>Simulacion de Sistemas</option>
                                        </select>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo</label>
                                    <div class="col-sm-10">
                                      <div class="form-group">
                                        <select name="tipo-registro-trab" class="form-control">
                                          <option>--Tipo de trabajo de grado--</option>
                                          <option>Tesis de Grado</option>
                                          <option>Proyecto de Grado</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
<!--
                                    <div class="form-group row">
                                    <label for="inputnameAd" class="col-sm-2 col-form-label">Codigo</label>
                                    <div class="col-sm-10">
                                      <input name="id-estt-trab" type="Name" class="form-control"  placeholder="Codigo del estudiante" value = "">
                                    </div>
                                  </div>
-->
                                    <!-- SEARCH FORM -->     
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


                        <!--Asignar docente Tutor-->

                        <div class="card card-info">
                            <div class="card-header bg-navy color-palette">
                                <h3 class="card-title">Actualizar Trabajo</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Titulo</th>
                                                <th>Descripcion</th>
                                                <th>Area de desmpeño</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        $estudiantes =  ejecutarSQL::consultar("select * from trabajo");
                                        $upr=1;
                                        while($est=mysqli_fetch_array($estudiantes)){ 
                                            
                                                echo '
                                                <div>
                                                  <form method="post" action="../procesos/regTrab.php" '.$upr.'">
                                                <tr>
                                                    <td>
                                                        <input type="hidden" name="trab-id" required="" value="'.$est['ID_trabajo'].'"> 
                                                        '.$est['ID_trabajo'].'
                                                    </td>
                                                    <td>
                                                        <input type="text" name="trab-titulo" required="" value="'.$est['titulo'].'">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="trab-descripcion" required="" value="'.$est['descripcion'].'">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="trab-area" required="" value="'.$est['area_desempeno'].'">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="trab-tipo">';

                                                        $estCon=  ejecutarSQL::consultar("select * from trabajo");
                                                        while($EstS=mysqli_fetch_array($estCon)){
                                                            echo '<option name="trab-tipo" value="'.$EstS['tipo'].'">'.$EstS['tipo'].'</option>';
                                                        }
                                                        echo '
                                                        <option>Trabajo de grado</option>
                                                        <option>Proyecto de grado</option>
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
