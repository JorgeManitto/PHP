<?php

include_once 'include/database.php';

session_start();

if(isset($_GET['cerrar_session'])){
    session_unset();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    header('location:login.php');
}

if(isset($_SESSION['rol'])){

    switch ($_SESSION['rol']) {
        case 1:
                header('location:admin.php');
            break;
        
        case 2:
            
            header('location:colab.php');

            break;

        default:
            # code...
            break;
    }
}   

    if(isset($_POST['username']) &&  isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = new DB();

        $query= $db -> connect() ->prepare('SELECT * FROM blog.usuarios WHERE username = :username AND password=:password');
        $query -> execute (['username'=>$username, 'password' => $password]);

        $row = $query -> fetch(PDO::FETCH_NUM);

        if($row){
            $rol = $row[3];

            $_SESSION['rol'] = $rol;

            switch ($_SESSION['rol']) {
                case 1:
                    header('location:admin.php');
                    break;
                
                case 2:
                    
                    header('location:colab.php');
        
                    break;
        
                default:
                    # code...
                    break;
            }

        }else{
            echo 'el ususario o contraseña son incorrectos';
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="#" method="post">
        <h2>Login</h2>

        <label for="username">Nombre de Usuario:</label>
        <input type="text" name="username">
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password">

        <input type="submit" value = "Iniciar Sesion">
    
    </form>


</body>
</html>