<?php

$carreras = array(
  ['id_carrera'=>1, 'nombre_carrera'=> 'Ingenieria en Sistemas de Informacion'],
  ['id_carrera'=>2, 'nombre_carrera'=>'Ingenieria Mecanica'],
  ['id_carrera'=>3, 'nombre_carrera'=>'Ingenieria Civil'],
  ['id_carrera'=>4, 'nombre_carrera'=>'Ingenieria Electronica']);

    $objCarreras = json_encode($carreras);

    echo  $objCarreras
 ?>
