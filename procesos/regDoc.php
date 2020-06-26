<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(2);



$nombre= $_POST['nombre-registro-doc'];
$correo= $_POST['correo-registro-doc'];
$contrasena= md5($_POST['contrasena-registro-doc']);
$codigo= $_POST['codigo-registro-doc'];
$cedula= $_POST['cedula-registro-doc'];
$especialidad1= $_POST['especialidad1-registro-doc'];
$especialidad2= $_POST['especialidad2-registro-doc'];
$especialidad3= $_POST['especialidad3-registro-doc'];
$especialidad4= $_POST['especialidad4-registro-doc'];
$especialidad5= $_POST['especialidad5-registro-doc'];

$estado = 1;

if(!$nombre=="" && !$correo=="" && !$contrasena=="" && !$codigo=="" && !$cedula=="" && !$especialidad1=="" && !$especialidad2=="" && !$especialidad3=="" && !$especialidad4=="" && !$especialidad5==""){
    $verificar=  ejecutarSQL::consultar("select * from docente where correo='".$correo."'");
    $verificaltotal = mysqli_num_rows($verificar);
    
    if($verificaltotal<=0){
        // en vez de usuario pones estudiante
        if(consultasSQL::InsertSQL("docente", "nombres, correo, contraseña, codigo_saga, carnet, especialidad_1, especialidad_2, especialidad_3, especialidad_4, especialidad_5, estado", "'$nombre','$correo','$contrasena','$codigo','$cedula','$especialidad1','$especialidad2','$especialidad3','$especialidad4','$especialidad5','$estado'")){
            echo '
                <script>  
                  var r = confirm("Se registro con exito");
                  if (r == true) {
                    location.href="../admin/reg_doc.php";
                  } else {
                    location.href="../admin/reg_doc.php";
                  }
                
                </script>
            ';
        }else{
            echo '
                <script>  
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/reg_doc.php";
                  } else {
                    location.href="../admin/reg_doc.php";
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

