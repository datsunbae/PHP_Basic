<?php 
require_once("C:/xampp/htdocs/kiemtra/entities/employee.class.php");

if(isset($_GET['manv']) && !empty($_GET['manv'])){
    $pram_mamv = trim($_GET['manv']);
    $result = Employee::delete($pram_mamv);

    if($result){
        header("Location: employee.php");
    }
}
?>