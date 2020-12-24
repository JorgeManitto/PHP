<?php
 include_once 'include/funciones.php';

 $todos = new Todos();


 $lista = $todos -> mostrarTodos();

 foreach ($lista as $todo) {
     echo '<input type="checkbox" name="check">'.'<label for="check">'.$todo['texto'].'</label>'.'<br><br>';
 }


?>