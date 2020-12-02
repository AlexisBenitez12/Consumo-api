<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/Materia.php';
require_once 'modelo/Profesores.php';

$pro = new Profesores();
$pro->Nombre="Alexis Benitez";

$pro2 = new Profesores();
$pro2->Nombre="Alexis Benitez";

$pro3= new Profesores();
$pro3->Nombre="Alexis Benitez";

$pro4 = new Profesores();
$pro4->Nombre="Alexis Benitez";

$mat = new Materia();
$mat->Nombre ="matematicas";
$mat->Profesores = $pro;

$mat2= new Materia();
$mat2->Nombre ="lengua";
$mat2->Profesores = $pro2;

$mat3= new Materia();
$mat3->Nombre ="cs naturales";
$mat3->Profesores = $pro3;

$mat4= new Materia();
$mat4->Nombre ="cs sociales";
$mat4->Profesores = $pro4;

$array = array();
$array[]=$mat;
$array[]=$mat2;
$array[]=$mat3;
$array[]=$mat4;

echo json_encode($array);