<?php
session_start();
include_once '../conexion/conexion.php';

$usuario_login=$_POST['nombre'];
$contrasena_login=$_POST['contrasena'];

//echo '<br>';
//var_dump ($usuario_login);
//echo '<br>';
//var_dump ($contrasena_login);
//echo '<br>';
$sql_login='SELECT * FROM usuario WHERE nombre = ?';
$sentencia_login=$pdo->prepare($sql_login);

$sentencia_login -> execute(array($usuario_login));
$resultado_login=$sentencia_login->fetch();

//var_dump($resultado_login);


if( ! $resultado_login){
   echo '<br>no existe este usuario.';
    die ();
}

echo '<br>usuario verificado';


if(password_verify($contrasena_login,$resultado_login['contrasena'])){

$_SESSION['admin']=$usuario_login;
header('location:restringido.php');

}else{
    echo 'contraseña erronea';
    die();
}

?>