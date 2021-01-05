<?php
session_start();

if(isset($_SESSION['admin'])){
    echo 'bienvenido';
    echo '<br><a href="cerrar.php">Cerrar sesion</a>';
}else{
    header('location:registro.php');
}