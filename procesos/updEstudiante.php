<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$idEstUP = $_POST['est-id'];
$nombreEstUp = $_POST['est-nombre'];
$correoEstUp = $_POST['est-correo'];
$carnetEstUp = $_POST['est-carnet'];
$sagaEstUp = $_POST['est-saga'];
$semestreEstUp = $_POST['est-semestre'];


if(consultasSQL::UpdateSQL("estudiante","nombres='$nombreEstUp',correo='$correoEstUp',carnet='$carnetEstUp',codigo_saga='$sagaEstUp',semestre='$semestreEstUp'", "ID_estudiante='$idEstUP'")){
    echo '
                <script>  
                  var r = confirm("Administrador actualizado con exito!");
                  if (r == true) {
                    location.href="../admin/reg_est.php";
                  } else {
                    location.href="../admin/reg_est.php";
                  }
                
                </script>
            ';
}else{
    echo '
                <script>  
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/reg_est.php";
                  } else {
                    location.href="../admin/reg_est.php";
                  }
                
                </script>
            ';
}

