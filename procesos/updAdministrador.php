<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$idAdUP = $_POST['adm-id'];
$nombreAdUp = $_POST['adm-nombre'];
$correoAdUp = $_POST['adm-correo'];
$carnetAdUp = $_POST['adm-carnet'];
$codigoAdUp = $_POST['adm-saga'];

if(consultasSQL::UpdateSQL("administrador","nombres='$nombreAdUp',correo='$correoAdUp',carnet='$carnetAdUp',codigo_saga='$codigoAdUp'", "ID_admin='$idAdUP'")){
    echo '
                <script>  
                  var r = confirm("Administrador actualizado con exito!");
                  if (r == true) {
                    location.href="../admin/reg_adm.php";
                  } else {
                    location.href="../admin/reg_adm.php";
                  }
                
                </script>
            ';
}else{
    echo '
                <script>  
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/reg_adm.php";
                  } else {
                    location.href="../admin/reg_adm.php";
                  }
                
                </script>
            ';
}

