<?php
#conectamos
 include_once '../conexion/conexion.php';
//echo password_hash("jorge",PASSWORD_DEFAULT);



#capturamos los names
$usuario_nuevo=$_POST['nombre_usuario'];
$contrasena=$_POST['contrasena'];
$contrasena2=$_POST['contrasena2'];


#comparamos con la base
$sql_compara ='SELECT * FROM usuario WHERE nombre = ?';
$sentencia_compara = $pdo -> prepare($sql_compara); 
$sentencia_compara -> execute(array($usuario_nuevo));
$resultado_compara = $sentencia_compara->fetch();



if($resultado_compara){
    echo 'existe este usuario<br>';
    echo '<a href="registro.php">volver</a>';
    die();
}

#hash de password
$contrasena=password_hash($contrasena,PASSWORD_DEFAULT);

//var_dump($usuario_nuevo);
//echo '<br>';
//var_dump($contrasena);
//echo '<br>';
//var_dump($contrasena2);
//echo '<br>';


#insetamos el usuario en la base si las password son iguales, de no ser asi tiramos error y volver

if(password_verify($contrasena2,$contrasena)){
    //echo 'son iguales <br>';
   
    
    $sql_agregar= 'INSERT INTO usuario (nombre,contrasena) VALUES (?,?)';
    $sentencia_agregar= $pdo->prepare($sql_agregar);

    if($sentencia_agregar ->execute(array($usuario_nuevo,$contrasena)) ){
        echo 'agregado';
    }else{

        echo 'error';
    }

    $pdo=NULL;

}else{
    echo 'no son iguales';
    echo '<a href="registro.php"><br>Volver</a>';
}