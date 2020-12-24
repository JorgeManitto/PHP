<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        
      header('location:login.php');
        
    }else{
        if($_SESSION['rol'] != 1){
            echo'hola';
            header('location:login.php');
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Admin</h2>
    <?php include 'views/admin.php'; 
    
    echo $_SESSION['rol'];
    
    ?>
    <a href="login.php?cerrar_session=1">Cerrar Session</a>

</body>
</html>