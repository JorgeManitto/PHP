<?php
   
    include 'includes/survey.php';
    include 'includes/session.php';

    $userSession = new UserSession();
    $user        = new Survey();

    if(isset($_SESSION['user'])){
        
        $user -> setUser($userSession->getCurrentUser);
        include_once 'vistas/home.php';
    }else if(isset($_POST['email']) && isset($_POST['password'])){

        $userForm = $_POST['email'];
        $passForm = $_POST['password'];

        if($user ->comparar($userForm,$passForm)){
            $userSession -> setCurrentUser($userForm);
            $user        -> setUser($userForm);
            
            include_once 'vistas/home.php';
        }else{
            $errorlogin = "Usuario y/o contraseña erroneo";
            include_once 'vistas/login.php';
        }


    }else{
        include_once 'vistas/login.php';
    }


?>

