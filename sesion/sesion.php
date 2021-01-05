<?php
session_start();

$login = 'jorge';


$_SESSION['admin']=$login;


if(isset($_SESSION['admin']) ){
    header ('Location:index.php');
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     
 </body>
 </html>