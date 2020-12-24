<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $db = 'todoList';

    $connect = new mysqli ( $servidor, $usuario, $contrasena,$db);

    if($connect -> connect_error){
        die('error en la conexion:'. $connect -> connect_error); 
    }

    // echo 'conexion exitosa';

    // $sql = 'CREATE DATABASE todoList';

    // if($connect -> query($sql) === true){
    //     echo 'Creada database correnctamente';
    // }else{
    //     die('ds' .$connect -> connect_error);
    // }


    // $sql = 'CREATE TABLE todoTable(
    //     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //     texto VARCHAR(255) NOT NULL,
    //     completado BOOLEAN NOT NULL,
    //     timestamp   TIMESTAMP

    // )';
    // $connect->query($sql);

    

?>