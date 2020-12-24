<?php require_once 'connect.php';

$id_upload = $_GET['completar'];

$sql_upload = "UPDATE todotable SET completado = 1 WHERE id = $id_upload ";

$connect -> query($sql_upload);


if($connect -> connect_error){
    die('error en el update');
}else{
    header('location:index.php');
}


