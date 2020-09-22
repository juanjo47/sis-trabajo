<?php
include '../conexion/consulSQL.php';
include '../conexion/configServer.php';


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
//            consultasSQL::UpdJoinSQL("estudiante", "trabajo", "trabajo.titulo='$titulo'", "est.trabajo = trab.ID_trabajo", "estudiante.ID_estudiante='$idestt'")   
//            mysqli_connect(SERVER,USER,PASS);
//            mysql_query(BD, "UPDATE estudiante JOIN trabajo ON trabajo.titulo='".$titulo."' SET estudiante.trabajo = trabajo.ID_trabajo WHERE estudiante.ID_estudiante='".$idestt."'")
            $recup =  ejecutarSQL::consultar("select ID_trabajo from trabajo where titulo='".$titulo."'");
            $recuperar = mysqli_fetch_row($recup);
            if(consultasSQL::UpdateSQL("estudiante","trabajo='$recuperar[0]'", "ID_estudiante='$idestt'")){
                echo '
                <script>
                  var r = confirm("Se asigno con exito");
                  if (r == true) {
                    location.href="../admin/seg_trab.php";
                  } else {
                    location.href="../admin/seg_trab.php";
                  }
                
                </script>
                ';
            }
        }
        else{
            echo '
                <script>  
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/seg_trab.php";
                  } else {
                    location.href="../admin/seg_trab.php";
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
