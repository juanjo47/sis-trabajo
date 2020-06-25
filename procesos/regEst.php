<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(2);



$nombre= $_POST['nombre-registro-est'];
$correo= $_POST['correo-registro-est'];
$contrasena= $_POST['contrasena-registro-est'];
$codigo= $_POST['codigo-registro-est'];
$cedula= $_POST['cedula-registro-est'];
$semestre= $_POST['semestre-registro-est'];

$estado = 1;

if(!$nombre=="" && !$correo=="" && !$contrasena=="" && !$codigo=="" && !$cedula=="" && !$semestre==""){
    $verificar=  ejecutarSQL::consultar("select * from estudiante where correo='".$correo."'");
    $verificaltotal = mysqli_num_rows($verificar);
    
    if($verificaltotal<=0){
        // en vez de usuario pones estudiante
        if(consultasSQL::InsertSQL("estudiante", "nombres, correo, contraseña, codigo_saga, carnet, semestre, estado", "'$nombre','$correo','$contrasena','$codigo','$cedula','$semestre','$estado'")){
            echo '
                <script>  
                  var r = confirm("Se registro con exito");
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
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/reg_est.php";
                  } else {
                    location.href="../admin/reg_est.php";
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

