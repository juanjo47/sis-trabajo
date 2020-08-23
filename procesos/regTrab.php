<?php
include '../conexion/configServer.php';
include '../conexion/consulSQL.php';

sleep(2);



$titulo= $_POST['titulo-registro-trab'];
$descripcion= $_POST['descripcion-registro-trab'];
$area= $_POST['area-registro-trab'];
$tipo= $_POST['tipo-registro-trab'];
$idestt= $_POST['id-estt-trab'];


if(!$titulo=="" && !$descripcion=="" && !$area=="" && !$tipo=="" && !$idestt==""){
    $verificar=  ejecutarSQL::consultar("select * from trabajo where titulo='".$titulo."'");
    $verificaltotal = mysqli_num_rows($verificar);
    
    if($verificaltotal<=0){
        // en vez de usuario pones estudiante
        if(consultasSQL::InsertSQL("trabajo", "titulo, descripcion, area_desempeno, tipo", "'$titulo','$descripcion','$area','$tipo'")){
            
            echo '
                <script>  
                  var r = confirm("Se registro con exito");
                  if (r == true) {
                    location.href="../admin/asig_trab.php";
                  } else {
                    location.href="../admin/asig_trab.php";
                  }
                
                </script>
            ';
            $recuperar=  ejecutarSQL::consultar("select ID_trabajo from trabajo where titulo='".$titulo."'");
            if(consultasSQL::UpdateSQL("estudiante","especialidad_5='$recuperar'", "ID_estudiante='$idestt'")){
            echo '
                <script>  
                  var r = confirm("Se asigno con exito");
                  if (r == true) {
                    location.href="../admin/asig_trab.php";
                  } else {
                    location.href="../admin/asig_trab.php";
                  }
                
                </script>
            ';
            }
        }else{
            echo '
                <script>  
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/asig_trab.php";
                  } else {
                    location.href="../admin/asig_trab.php";
                  }
                
                </script>
            ';
        }
    }else{
        echo '<br>El Trabajo que ha ingresado ya esta registrado.<br>Por favor ingrese otro Trabajo';
    }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}

