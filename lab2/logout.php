<?php 
    session_start();
    
    if(!empty($_POST['logout'])){
        unset($_SESSION['username']);
    }

    header("Location:login.php");
?>