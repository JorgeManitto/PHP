<?php 


    // session_start();

    // if(!isset($_SESSION['rol'])){
        
    //   header('location:login.php');
        
    // }else{
    //     if($_SESSION['rol'] != 1){
    //         echo'hola';
    //         header('location:login.php');
    //     }
        
    // }


// include 'views/admin.php';

include_once 'api/apipelicula.php';

$api = new ApiPeliculas();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(is_numeric($id)){
        $api->getById($id);
    }else{
        $api->error('El id es incorrecto');
    }
}else{
    $api->getAll();
}

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = $api->newfile();

fwrite($myfile, $txt);

fclose($myfile);

include 'index.html';
?>
<a href="encuesta.php">Encuesta</a>