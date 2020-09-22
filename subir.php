<?php

$ftp_server="127.0.0.1";
$ftp_usuario="admin";
$ftp_pass="123456";

$con_id = ftp_connect($ftp_server) or die("no se pudo conectar a $ftp_server");
$lr = ftp_login($con_id, $ftp_usuario, $ftp_pass);    
if( (!$con_id) || (!$lr) ){
    echo 'no se pudo conectar';
    exit;
}
else{
    //echo 'conectado correctamente';
    $temp=explode(".", $_FILES['archivo']['name']);
    //var_dump($_FILES);
    $source_file=$_FILES['archivo']['tmp_name'];
    //$destino="archivos";
    $nombre=$_FILES["archivo"]["name"];
//  ftp_pass($con_id,true);
    $subio=ftp_put($con_id, '/'.$nombre, $source_file, FTP_BINARY);
    if($subio){
        echo '
            <script>  
                  var r = confirm("Archivo subido con exito");
                  if (r == true) {
                    location.href="./admin/rev_doc.php";
                  } else {
                    location.href="./admin/rev_doc.php";
                  }
                
            </script>
            ';
    }
    else{
        echo '
            <script>  
                  var r = confirm("Fallo la carga del archivo");
                  if (r == true) {
                    location.href="./admin/rev_doc.php";
                  } else {
                    location.href="./admin/rev_doc.php";
                  }
                
            </script>
            ';
    }
}

?>