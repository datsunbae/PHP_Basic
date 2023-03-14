<?php 
     require_once("C:/xampp/htdocs/kiemtra/config/db.class.php");

     class Employee{
        public $maNV;
        public $tenNV;
        public $phai;
        public $noiSinh;
        public $maPhong;
        public $luong;

        public function __construct($maNV, $tenNV, $phai, $noiSinh, $maPhong, $luong){
            $this->maNV = $maNV;
            $this->tenNV = $tenNV;
            $this->phai = $phai;
            $this->noiSinh = $noiSinh;
            $this->maPhong = $maPhong;
            $this->luong = $luong;
        }


        public static function list_employees(){
            $db = new Db();
            $sql = "SELECT * FROM nhanvien";
            $result = $db->select_to_array($sql);
            return $result;
        }

        public static function login($username, $password){
            $db = new Db();
            $sql = "SELECT * FROM taikhoan WHERE username='$username' AND password='$password'";
            $result = $db->select_to_array($sql);
            return $result;
        }

        public static function getEmployee($maNV){
            $db = new Db();
            $sql = "SELECT * FROM nhanvien WHERE Ma_NV='$maNV'";
            $result = $db->select_to_array($sql);
            return $result;
        }

        public function save(){
            $db = new DB();
            $sql = "INSERT INTO nhanvien(Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong) VALUES('$this->maNV','$this->tenNV', '$this->phai', '$this->noiSinh', '$this->maPhong', '$this->luong')";

            $result = $db->query_execute($sql);
            return $result;
        }


        public function update(){
            $db = new DB();
            $sql = "UPDATE nhanvien SET Ten_NV='$this->tenNV', Phai='$this->phai',Noi_Sinh='$this->noiSinh',Ma_Phong='$this->maPhong',Luong='$this->luong' WHERE Ma_NV='$this->maNV'";

            $result = $db->query_execute($sql);
            return $result;
        }

        public static function delete($maNV){
            $db = new DB();
            $sql = "DELETE FROM nhanvien WHERE Ma_NV='$maNV'";

            $result = $db->query_execute($sql);
            return $result;
        }
     }

?>