<?php

$materias = array(
['id_materia'=>1, 'nombre_materia'=>'Programacion I', 'id_carrera'=>1],
['id_materia'=>2, 'nombre_materia'=>'Programacion II', 'id_carrera'=>1],
['id_materia'=>3, 'nombre_materia'=>'Analisis de Sistemas', 'id_carrera'=>1],
['id_materia'=>4, 'nombre_materia'=>'Diseño de sistemas', 'id_carrera'=>1],
['id_materia'=>5, 'nombre_materia'=>'Fisica I', 'id_carrera'=>2],
['id_materia'=>6, 'nombre_materia'=>'Fisica II', 'id_carrera'=>2],
['id_materia'=>7, 'nombre_materia'=>'Algebra I', 'id_carrera'=>2],
['id_materia'=>8, 'nombre_materia'=>'Algebra II', 'id_carrera'=>2],
['id_materia'=>9, 'nombre_materia'=>'Construcciones I', 'id_carrera'=>3],
['id_materia'=>10, 'nombre_materia'=>'Construcciones II', 'id_carrera'=>3],
['id_materia'=>11, 'nombre_materia'=>'Circuitos I', 'id_carrera'=>4],
['id_materia'=>12, 'nombre_materia'=>'Circuitos II', 'id_carrera'=>4],
);

$objMaterias = json_encode($materias);

echo $objMaterias;

 ?>
