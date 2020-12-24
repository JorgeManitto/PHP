<?php 
    include_once 'include/funciones.php';

    $todos = new Todos();

    if(isset($_POST['todo'])){
        $todos -> nuevoTodo($_POST['todo']);
    }

    
    ?>