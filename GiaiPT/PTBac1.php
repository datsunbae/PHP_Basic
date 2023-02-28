<?php
    class  PTBac1{
        private $a;
        private $b;

        public function __construct( $a, $b ){
            $this->a = $a;
            $this->b = $b;
        }

        function setA( $a ){
            $this->a = $a;
        }

        function getA(){
            return $this->a;
        }

        function setB( $b ){
            $this->b = $b;
        }

        function getB(){
            return $this->b;
        }

        function solve(){
            if($this->a == 0){
                return "Phuong trih vo nghiem";
            }
            else{
                return -($this->b) / $this->a;
            }
        }
    }


?>