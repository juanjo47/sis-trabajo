<?php
    include '../conexion/consulSQL.php';   
    include '../conexion/configServer.php';


sleep(2);

$docente= $_POST['doc-cod1'];
$estudiante= $_POST['est-cod1'];


if(!$docente=="" && !$estudiante==""){
    $recup =  ejecutarSQL::consultar("select ID_docente from docente where codigo_saga='".$docente."'");
    $recuperar = mysqli_fetch_row($recup);
    if(consultasSQL::UpdateSQL("estudiante","revisor_1='$recuperar[0]'", "codigo_saga='$estudiante'")){
        echo '
        <script>
            var r = confirm("Se asigno con exito");
            if (r == true) {
                location.href="../admin/asig_rev.php";
            } else {
                location.href="../admin/asig_rev.php";
            }
                
                </script>
                ';
            }
        else{
            echo '
                <script>  
                  var r = confirm("Ha ocurrido un error.<br>Por favor intente nuevamente");
                  if (r == true) {
                    location.href="../admin/asig_rev.php";
                  } else {
                    location.href="../admin/asig_rev.php";
                  }
                
                </script>
            ';
        }
}else {
    echo '<br>Error los campos no deben de estar vacíos';
}
