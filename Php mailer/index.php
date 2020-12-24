<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envar mail</title>
</head>
<body>
   
    <h2>Envia un comentario</h2>

    <form action="email.php" method="post">
        <label for="nombre">Indica tu nombre :</label>
        <input type="text" name="nombre">
        <br>
        <label for="emailForm">Indica tu correo electronico</label>
        <input type="text" name="emailForm">
        <br>
        <textarea name="commentForm"  cols="15" rows="5">
        </textarea>
        <br>
        <input type="submit" placeholder="Enviar correo" name="enviar">
       


    
    </form>
</body>
</html>