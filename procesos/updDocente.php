<?php
    include '../conexion/configServer.php';
    include '../conexion/consulSQL.php';


sleep(1);

$idDocUP = $_POST['doc-id'];
$nombreDocUp = $_POST['doc-nombres'];
$correoDocUp = $_POST['doc-correo'];
$carnetDocUp = $_POST['doc-carnet'];
$codigoDocUp = $_POST['doc-codigo'];
$esp1DocUp = $_POST['doc-esp1'];
$esp2DocUp = $_POST['doc-esp2'];
$esp3DocUp = $_POST['doc-esp3'];
$esp4DocUp = $_POST['doc-esp4'];
$esp5DocUp = $_POST['doc-esp5'];

if(consultasSQL::UpdateSQL("docente","nombres='$nombreDocUp',correo='$correoDocUp',carnet='$carnetDocUp',codigo_saga='$codigoDocUp',especialidad_1='$esp1DocUp',especialidad_2='$esp2DocUp',especialidad_3='$esp3DocUp',especialidad_4='$esp4DocUp',especialidad_5='$esp5DocUp'", "ID_Docente='$idDocUP'")){
    echo '
                <script>  
                  var r = confirm("Docente actualizado con exito!");
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
                  var r = confirm("Ups algo Fallo");
                  if (r == true) {
                    location.href="../admin/reg_doc.php";
                  } else {
                    location.href="../admin/reg_doc.php";
                  }
                
                </script>
            ';
}

