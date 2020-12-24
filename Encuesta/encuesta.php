<?php
    include_once 'includes/survey.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Practica3</title>
</head>
<body>
    
    <form action="#" method="post">
        <?php
            $survey = new Survey();
            $showresoult = false;
            if(isset($_POST['lengaje'])){
                $showresoult = true;
                $survey -> setOptionSelected($_POST['lengaje']);
                $survey -> vote();
            }
            
        ?>
        <h2>Encuesta</h2>
        <?php

            if($showresoult){
                $datosResoults = $survey -> showResoults();

                echo '<h2>'. $survey -> getTotalVotes(). 'votos totales</h2>';
                foreach ($datosResoults as $dato){
                    $porcentaje = $survey -> getPercentageVotes($dato['valor']);
                    include 'vistas/vista-resoult.php';
                  
                }
                echo '<a href="index.php">Volver</a>';
            }else{
                include 'vistas/vista-default.php';
            }
        
        ?>
      
    </form>
    <?php
    
        $db = new DB ();
        $db -> connect();
    ?>
</body>
</html>