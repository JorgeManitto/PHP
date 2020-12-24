<?php
    include 'db.php';
    
    class Survey extends DB {
        private $nombre;
        private $username;


        public function comparar ($email,$password){
           $query = $this -> connect() -> prepare('SELECT * FROM login.usuarios WHERE email = :user AND password = :pass ');
           $query -> execute(['user'=> $email, 'pass' => $password]);

           if($query ->rowCount()){
               return true;
           }else {
               return false;
           }
        }

        public function setUser($user){
            $query = $this -> connect() -> prepare('SELECT * FROM login.usuarios WHERE email = :user');
            $query -> execute(['user'=>$user]); 

            foreach($query as $currentUser){
                $this -> nombre   = $currentUser['user'];
                $this -> username = $currentUser['email'];
            }

        }

        public function getNombre(){
            return $this -> nombre;
        }


    }