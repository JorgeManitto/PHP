 <?php 
    include_once 'conexion.php';

   $sql_leer= ('SELECT * FROM usuarios');
    
   $gsent= $pdo -> prepare ($sql_leer);
   
   $gsent -> execute();
    
   $resultado= $gsent -> fetchALL();
    
    //var_dump($resultado);
         if($_POST){
        $nombre = $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $email=$_POST['email'];
        $celular=$_POST['celular'];

        $sql_agregar= 'INSERT INTO usuarios(nombre,apellido,email,celular) VALUES (?,?,?,?)';
        $sentencia_agregar = $pdo -> prepare($sql_agregar);
        $sentencia_agregar->execute(array($nombre,$apellido,$email,$celular));
    
        header ('location:index.php');

}       if($_GET){

        $id=$_GET['id'];
        $sql_leer_unico= 'SELECT * FROM usuarios WHERE id=?';
        $sql_sentencia_unica = $pdo -> prepare($sql_leer_unico);
        $sql_sentencia_unica -> execute(array($id));

        $resultado_unico= $sql_sentencia_unica -> fetch();

        //var_dump($resultado_unico);

}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9825e3c7d7.js" crossorigin="anonymous"></script>   
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="conteiner m-5">
    <div class="row">
    <div class="col-md-6">


                  <?php foreach ($resultado as $dato): ?>

            <div class="alert alert-primary text-uppercase" role="alert">
               
                <?php echo $dato['id']    ?>
                        - 
                <?php echo $dato['nombre']    ?>
                        -
                <?php echo $dato['apellido']    ?>
                        -
                <?php echo $dato['email']    ?>

                <a href="eliminar.php?id=<?php echo $dato['id']    ?>"
                 class="float-right ml-3">
                <i class="fas fa-trash"></i></a>

                <a href="index.php?id=<?php echo $dato['id']    ?>"
                 class="float-right">
                 <i class="fas fa-edit"></i></a>

             </div>   
    
                 <?php endforeach  ?>
    
    
    
   
   </div>
      <div class="col-md-6">
        <?php if(!$_GET):    ?>
        
         <h3>Agregar Planilla</h3>
                <form method="POST">
                        
                <input type="text" class="form-control mb-2" name="nombre" placeholder="nombre">
                <input type="text" class="form-control mb-2" name="apellido" placeholder="apellido">
                <input type="text" class="form-control mb-2" name="email" placeholder="email">   
                <input type="text" class="form-control "     name="celular" placeholder="num cel" > 
                <button class="btn btn-info mt-3">Agregar</button>
      </form>
      <?php endif ?>       
      <?php if($_GET):    ?>
        
        <h3>Editar Planilla</h3>
               <form method="GET" action="editar.php">
                       
               <input type="text" class="form-control mb-2" name="nombre" 
               value="<?php echo $resultado_unico ['nombre']  ?>">
               <input type="text" class="form-control mb-2" name="apellido"
               value="<?php echo $resultado_unico ['apellido']  ?>"
                >
               <input type="text" class="form-control mb-2" name="email"
               value="<?php echo $resultado_unico ['email']  ?>" >   
               <input type="text" class="form-control "  name="celular"
               value="<?php echo $resultado_unico ['celular']  ?>"  > 
               <input type="hidden" name="id"
               value="<?php echo $resultado_unico ['id']  ?>">
               <button class="btn btn-info mt-3">Editar</button>
               <button class="btn btn-info ml-3 mt-3" >Volver <a href="index.php"></a></button>
     </form>
     <?php endif ?>       
      </div>                  


    </div>
    
    
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9825e3c7d7.js" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>