<?php
require("./students.php");

if(empty($_SESSION['username'])){
    header("Location:login.php");
}

$students = getAllStudents();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <form action="logout.php" method="post">
        <h1>Xin chào <?php echo $_SESSION['username']; ?></h1>
        <input type="submit" value="Đăng xuất" name="logout">
    </form>
    <a href="student-add.php">THÊM</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Full name</td>
            <td>Birth date</td>
            <td>Action</td>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td> <?php echo $student['student_id']; ?> </td>
                <td><a href="student-add.php?id=<?php echo $student['student_id']; ?>">
                        <?php echo $student['student_name']; ?>
                    </a>
                </td>
                <td><?php echo $student['student_email'] ?></td>
                <td>
                    <form action="student-delete.php" method="post">
                        <input type="hidden" name="student_id" value="<?php echo $student['student_id'] ?>">
                        <input type="submit" value="Xóa" onclick="return confirm('Bạn có muốn xóa sinh viên này không ?')" name="delete">
                    </form>
                </td>

            </tr>

        <?php } ?>
    </table>
</body>

</html>