<?php 
    include_once 'include/apipelicula.php';

    $api = new ApiPelicula();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if(is_numeric($id)){
            $api -> getById($id);
        }else{
            $api -> error("Los parametros no son correctos");
        }
       
    }else{
        $api -> getAll();
    }
    

?>