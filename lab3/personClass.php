<?php
    class Person{
        private $name;
        private $nationalID;

        public function __construct($name, $nationalID){
            $this->name = strtolower($name);
            $this->nationalID = $nationalID;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = strtoupper($name);
        }

        public function getNationalID(){
            return $this->nationalID;
        }
    }


?>