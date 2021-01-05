<?php
 session_start();

 if(isset($_SESSION['admin'])){
    echo 'bienvenido!'.$_SESSION['admin'];
    echo '<br><a href="cerrar.php">Cerrar sesion</a>';
 }
 
 else{
     header('location:index.php');
 }
 ?>

 