<?php 
    include_once 'database.php';
   
    class Survey extends DB{
        private $totalVotes;
        private $optionSelected;

        public function setOptionSelected($option){
            $this->optionSelected = $option;
        }
        public function getOptionSelected() {
            return $this -> OptionSelected;
        }
        public function vote(){
            $query = $this->connect()->prepare('UPDATE blog.encuestatabla SET valor = valor + 1 WHERE opcion = :opcion');
            $query -> execute(['opcion' => $this->optionSelected]);
        }
        public function showResoults(){
            return $this -> connect() -> query('SELECT * FROM blog.encuestatabla');
        }
        public function getTotalVotes(){
            $query = $this -> connect() ->query('SELECT SUM(valor) AS votos_totales FROM blog.encuestatabla');
            $this -> totalVotes = $query -> fetch(PDO::FETCH_OBJ)-> votos_totales;
            return $this -> totalVotes;
        }
        public function getPercentageVotes($votes){
            return round(($votes/$this -> totalVotes) * 100, 0);
        }
    }

?>