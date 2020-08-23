<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(2);



$nombre= $_POST['nombre-registro-adm'];
$correo= $_POST['correo-registro-adm'];
$contrasena= $_POST['contrasena-registro-adm'];
$codigo= $_POST['codigo-registro-adm'];
$cedula= $_POST['cedula-registro-adm'];
$nivel= $_POST['nivel-registro-adm'];

$estado = 1;

if(!$nombre=="" && !$correo=="" && !$contrasena=="" && !$codigo=="" && !$cedula=="" && !$nivel==""){
    $verificar=  ejecutarSQL::consultar("select * from administrador where correo='".$correo."'");
    $verificaltotal = mysqli_num_rows($verificar);
    
    if($verificaltotal<=0){
        // en vez de usuario pones estudiante
        if(consultasSQL::InsertSQL("administrador", "nombres, correo, contraseña, codigo_saga, carnet, nivel, estado", "'$nombre','$correo','$contrasena','$codigo','$cedula','$niivel','$estado'")){
            echo '
                <script>  
                  var r = confirm("Se registro con exito");
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
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/reg_adm.php";
                  } else {
                    location.href="../admin/reg_adm.php";
                  }
                
                </script>
            ';
        }
    }else{
        echo '<br>El correo que ha ingresado ya esta registrado.<br>Por favor ingrese otro correo';
    }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}

