<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$idAdUP = $_POST['adm-id'];
$nombreAdUp = $_POST['adm-nombre'];
$correoAdUp = $_POST['adm-correo'];
$codigoAdUp = $_POST['adm-codigo'];

if(consultasSQL::UpdateSQL("administrador","nombre='$nombreAdUp',correo='$correoAdUp'", "ID_admin='$idAdUP'")){
    echo '
                <script>  
                  var r = confirm("Administrador actualizado con exito!");
                  if (r == true) {
                    location.href="../admin/administradores.php";
                  } else {
                    location.href="../admin/administradores.php";
                  }
                
                </script>
            ';
}else{
    echo '
                <script>  
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/administradores.php";
                  } else {
                    location.href="../admin/administradores.php";
                  }
                
                </script>
            ';
}

