<?php
    require('./PTBac1.php');
    class PTBac2 extends PTBac1{
        private $c;

        public function __construct( $a, $b, $c ){
            parent::__construct( $a, $b);
            $this->c = $c;
        }

        function setC( $c ){
            $this->c = $c;
        }

        function getC(){
            return $this->c;
        }

        
        function solve(){
            if(parent::getA() == 0){
                parent::solve();
            }
            else{
                $delta = parent::getB()*parent::getB() - 4*parent::getA()*$this->c;
                if ($delta < 0) {
                  return "Phương trình vô nghiệm";
                } elseif ($delta == 0) {
                  return "Phương trình có nghiệm kép x = " . (-parent::getB()/(2*parent::getA()));
                } else {
                  return "Phương trình có hai nghiệm phân biệt x1 = " . ((-parent::getB() + sqrt($delta))/(2*parent::getA())) . " và x2 = " . ((-parent::getB() - sqrt($delta))/(2*parent::getA()));
                }
            }
        }
    }

?>