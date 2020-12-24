<?php require_once 'connect.php';

$texto = $_POST['texto'];

$sql_insert = "INSERT INTO todotable (texto, completado) VALUES ( '$texto' ,false)";

if($connect->query($sql_insert) === true){
   header ('location:index.php');
}else{
    die('error' . $connect -> connect_error);
}


