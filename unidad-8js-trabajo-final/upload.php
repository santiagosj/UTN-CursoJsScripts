<?php

$nombre_archivo =  $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
$uploads_dir = 'imagenes';

if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
    echo "La extensi&oacute;n o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg</li><li>se permiten archivos de 100 Kb m&aacute;ximo.</li></td></tr></table>";
}else{
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$uploads_dir/$nombre_archivo")){
       echo "<li><img src='imagenes/".$_FILES['userfile']['name']."'/></li>";
    }else{
       echo "Ocurri&oacute; alg&uacute;n error al subir el fichero. No pudo guardarse.";
    }
}
?>
