<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form id="nuevo-pendiente-conteiner" action="" method="post">
    <h2>Tetestenado AJAX</h2>
    <label for="todo">que hacer?</label>
    <input type="text" name="todo" id="todo">
    <br>

    <input type="submit" placeholder="enviar" id="bEnviar">



</form>

<div id="mostrar-todo-container">


    </div>
    <script src="main.js"></script>
    <script>cargarTodos();</script>
</body>
</html>

