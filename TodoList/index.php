
<?php
require_once 'connect.php';
$sql_select = "SELECT * FROM todotable";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
</head>
<body>
    <h2>Ingrese datos</h2>
    <form action="insert.php" method="post">
        <input type="text" name="texto">
        <input type="submit">

    </form>
    <div class="select">
        <?php 
        

        if($result_select = $connect -> query($sql_select)){

            while($fila = $result_select -> fetch_assoc()){
                ?>
                    <form action="upload.php" method="get">
                    <tr>
                        <td>
                        <?php echo $fila['texto'] ?>    
                      <span>----</span> <?php echo $fila['completado'] ?  'Completado' :  'Pendiente';?>
                        <input type="hidden" name="completar" value="<?php echo $fila['id']?>">
                        <input type="submit" value="Completo">
                        <a href="delete.php?delete=<?php echo $fila['id']?>">Eliminar</a>
                        </td>
                    
                    </tr>
                  
                </form>
                <?php
                
            }
        
        }
        
        ?>
    
    </div>

</body>
</html>