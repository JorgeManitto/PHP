<?php

    $directorio = "uploads/";

    $archivo = $directorio . basename($_FILES['file']['name']);

    $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));

    $validacionimg = getimagesize($_FILES['file']['tmp_name']);


    if($validacionimg != false){
        $size = $_FILES['file']['size'];

        if ($size > 500000) {
            echo "El archivo tiene que ser menor a 500kb";
        }else{
            if(move_uploaded_file($_FILES['file']['tmp_name'],$archivo)){
                echo 'Se envio correctamente';
            }else{
                echo 'No logro enviarse';
            }

        }


    }else{
        echo "El documento no es una imagen";
    }

?>