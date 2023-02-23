<?php
    require_once("helpers.php");

    class User{
        private $username;
        private $email;
        private $userID;
        private $status;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
            $this->status = 1;
            $this->userID = GetNextUserID();
        }

        public function __destruct()
        {
            $this->username = NULL;
            $this->email = NULL;
            $this->status = NULL;
            $this->userID = NULL;
        }

        public function getUserName(){
            return $this->username;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getUserId(){
            return $this->userID;
        }

        public function setStatus($status){
            if($status < 0 || $status > 1){
                return false;
            }
            $this->status = $status;
            return true;
        }
    }


?>