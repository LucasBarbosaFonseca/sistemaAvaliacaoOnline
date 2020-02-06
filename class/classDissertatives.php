<?php

    require_once 'classQuestions.php';
    require_once 'classConnection.php';

    class Dissertatives extends Questions {

        private $con;
        private $dissertation;

        //construct method
        private function __construct() {
            $this->con = new Connection();
        }

        //Setters and Getters methods
        public function getDissertation() {
            return $this->dissertation;
        }

        public function setDissertation($d) {
            $this->dissertation = $d;
        }

    }

?>