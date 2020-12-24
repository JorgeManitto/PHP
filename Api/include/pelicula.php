<?php 
    include_once 'db.php';

    class Pelicula extends DB {

        function obtenerPelicula (){
            $query = $this -> connect() -> query('SELECT * FROM pelicula');

            return $query;
        }

        function obtenerPeliculaID($id){
            $query = $this -> connect() -> prepare("SELECT * FROM pelicula WHERE id = :id");
            $query -> execute(['id'=>$id]);
            
            return $query;
        }

        function  nuevaPelicula($pelicula){
            $query = $this -> connect() -> prepare("INSERT INTO pelicula WHERE nombre =:nombre, imagen =:imagen");
            $query -> execute(['nombre' => $pelicula["nombre"], 'imagen' => $pelicula['imagen'] ]);
         
            return $query;
        }
    }



?>