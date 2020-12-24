<?php

// $usuario = 'root'
// $pass ='root'

try {
    $mbd = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');
    // echo 'conectado';
    // $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>