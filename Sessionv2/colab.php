<?php
 session_start();

 if(!isset($_SESSION['rol'])){
     
   header('location:login.php');
     
 }else{
     if($_SESSION['rol'] != 2){
         header('location:login.php');
     }else{
         
     }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaborador</title>
</head>
<body>
    <h2>colaborador</h2>
    <a href="login.php?cerrar_session=1">Cerrar Session</a>
</body>
</html>