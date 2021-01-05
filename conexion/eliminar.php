<?php


include_once 'conexion.php';

$id=$_GET['id'];


$sql_eliminar='DELETE FROM usuarios WHERE id=?';
$gsent_eliminar= $pdo->prepare($sql_eliminar);
$gsent_eliminar ->execute(array($id));


header ('location:index.php');