 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
 </head>
 <body>

    <div class="nav">
        <a href="#">Logo</a>
        <a href="includes/logout.php">Cerrar Session</a>
    </div>

    <h3>Bienvenido <?php echo $user -> getNombre();?></h3>
    
 </body>
 </html>