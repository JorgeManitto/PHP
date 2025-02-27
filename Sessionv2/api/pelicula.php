<?php

include_once 'include/database.php';

class Pelicula extends DB{
    
    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM blog.pelicula');
        return $query;
    }

    function obtenerPelicula($id){
        $query = $this->connect()->prepare('SELECT * FROM pelicula WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

}

?>