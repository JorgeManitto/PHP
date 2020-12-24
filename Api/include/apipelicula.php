<?php

include_once 'pelicula.php';

    class ApiPelicula {
        private $imagen = "img02";
        private $error;

        function getAll(){
            $pelicula = new Pelicula();
            $peliculas = array();
            $peliculas["items"] = array();

            $res = $pelicula -> obtenerPelicula();

            if($res -> rowCount()){
                while($row = $res -> fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'id'     => $row['id'],
                        'nombre' => $row['nombre'],
                        'imagen' => $row['imagen']
                    );
                    array_push($peliculas['items'], $item);
                }
                // echo json_encode($peliculas);
                $this -> printJson($peliculas);
            }else{
                // echo json_encode(array("mensaje" =>"No hay peliculas para mostrar"));
                error("No hay elementos para mostrar");
            }
        }   
        function getById($id){
            $pelicula = new Pelicula();
            $peliculas = array();
            $peliculas["items"] = array();

            $res = $pelicula -> obtenerPeliculaID($id);

            if($res -> rowCount() ){

                    $row = $res -> fetch();
                    $item = array(
                        'id'     => $row['id'],
                        'nombre' => $row['nombre'],
                        'imagen' => $row['imagen']
                    );
                    array_push($peliculas['items'], $item);
                
                // echo json_encode($peliculas);
                $this -> printJson($peliculas);
            }else{
                // echo json_encode(array("mensaje" =>"No hay peliculas para mostrar"));
              $this  ->  error("No hay elementos para mostrar");
            }
        }  

        function add($item){
            $pelicula = new Pelicula();

            $res = $pelicula -> nuevaPelicula($item);
            $this -> exito("Nueva Pelicula registrada");

        }

        function printJson($array){
            echo  '<code>'. json_encode($array).'</code>';
        }

        function error($mensaje){
            echo  json_encode(array('mensaje' => $mensaje));
        }
        function exito($mensaje){
            echo  json_encode(array('mensaje' => $mensaje));
        }

        function subirImagen($file){
            $directorio = "./images/";
                $this -> imagen . basename($file['name']);
                $archivo = $directorio . basename($file['name']);

                $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));

                $validacionimg = getimagesize($file['tmp_name']);


                if($validacionimg != false){
                    $size = $file['size'];

                    if ($size > 500000) {
                        $this -> error = "El archivo tiene que ser menor a 500kb";
                        return false;
                    }else{
                        if(move_uploaded_file($file['tmp_name'],$archivo)){
                            // echo 'Se envio correctamente';
                            return true;
                        }else{
                            $this -> error = 'No logro enviarse';
                            return false;
                        }
                    }
                }else{
                    $this -> error = "El documento no es una imagen";
                    return false;
                }

                 }
        
        function getImagen(){

            return $this -> imagen;
            
        }   
        
        function getError(){
            return $this -> error;
        }  

                }

?>