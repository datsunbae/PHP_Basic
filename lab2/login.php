<?php 
    session_start ();

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if(!empty($_POST['login'])){
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if($username == 'datsunbae' && $password == '123'){
            $_SESSION['username'] = $username;
            header("Location:student-list.php");
        }
        else{
            alert("Username or passwrord is not valid");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username">
        </div>
        <div>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" value="Login" name="login">
</form>
</body>
</html>