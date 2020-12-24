<?php session_start();

    $emaillogin = $_POST['emaillogin'];
    $passlogin = $_POST['passlogin'];

    // echo $emaillogin,$passlogin;
    
    include_once 'conexion.php';
    $selectlogin = "SELECT * FROM usuarios WHERE email = ?";

    $sentencialogin = $mbd -> prepare($selectlogin);

    $sentencialogin -> execute (array($emaillogin));

    $resultlogin = $sentencialogin ->fetch();
      
    if(!$resultlogin){
        echo 'el usuario no existe';
        die();
    }

    if(password_verify($passlogin,$resultlogin['password'])){

            
        if($resultlogin['address'] === '1'){
            
            $_SESSION['admin'] = $emaillogin;
            
        }

        if($resultlogin['address'] === '5'){

            $_SESSION['invitado'] = $emaillogin;
            
        }

        if($resultlogin['address'] === '7'){
            $_SESSION['empleado']=$emaillogin;
            
        }
     
        header('location:sessionactive.php');

    }else{

        echo 'Contraseña incorrecta';
        
    }


?>