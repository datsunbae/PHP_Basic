<?php
session_start();
require_once("C:/xampp/htdocs/kiemtra/entities/employee.class.php");

function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if (!empty($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $result = Employee::login($username, $password);

    if ($result) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $result[0]['role'];
        header("Location:employee.php");
    } else {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
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
            <input type="submit" value="Login" name="login" class="btn btn-primary">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </form>
    </div>
</body>

</html>