<?php
    require_once("personClass.php");

    class Employee extends Person {
        private $employeeID;
        private $department;

        public function __construct($employeeName, $nationalID, $department){
            parent::__construct($employeeName, $nationalID);
            $this->department = $department;
            $this->employeeID = $this->GenerateEmployeeID();
        }

        public function getEmployeeID(){
            return $this->employeeID;
        }

        public function getDepartment(){
            return $this->department;
        }

        public function setDepartment($department){
            $this->department = $department;
        }

        final public function GenerateEmployeeID(){
            static $IDGen = 1;
            return $IDGen++;
        }
    }

?>