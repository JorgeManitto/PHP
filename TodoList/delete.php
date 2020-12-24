<?php   require_once 'connect.php';

$id_delete = $_GET['delete'];

$sql_eliminar = "DELETE FROM todotable WHERE id = $id_delete";

if($connect -> query($sql_eliminar)){
    header ('location:index.php');
}else{
    echo 'error'. $connect -> connect_error;
}

