<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="conteiner ml-3">
    <h3>REGISTRO</h3>
    <form action="agregar_usuarios.php" method="post">

    <input type="text" name="nombre_usuario">
    <input type="text " name="contrasena">
    <input type="text" name="contrasena2">
    <button type="submit" class="btn btn-info">guardar</button>
    
    </form>
    <h3 class="mt-5">LOGIN</h3>
    <form action="login.php" method="post">

    <input type="text" name="nombre">
    <input type="text " name="contrasena">
    
    <button type="submit" class="btn btn-info">acceder</button>
    
    </form>
    
    </div>
</body>
</html>