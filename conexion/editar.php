<?php

$id= $_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$celular=$_GET['celular'];


include_once 'conexion.php';




$sql_editar = 'UPDATE usuarios SET nombre=?,apellido=?,email=?,celular=? WHERE id=?';

$sentencia_editar= $pdo -> prepare($sql_editar);
$sentencia_editar -> execute(array($nombre,$apellido,$email,$celular,$id));



header ('location:index.php');
?>

