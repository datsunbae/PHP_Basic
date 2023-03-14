<?php
require_once("C:/xampp/htdocs/kiemtra/entities/employee.class.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php $list_employee = Employee::list_employees(); ?>
    <div class="container">
        <h1>Xin chào <?php echo $_SESSION['username'] ?></h1>
        <h1 class="text-center my-5">Quản lý nhân sự</h1>
        <?php
           echo  (($_SESSION['role'] === 'ADMIN') ? "<button class='btn btn-success'>THÊM NHÂN SỰ</button>
           " : "")        
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Tên nhân viên</th>
                    <th scope="col">Phái</th>
                    <th scope="col">Nơi sinh</th>
                    <th scope="col">Mã phòng</th>
                    <th scope="col">Lương</th>
                    <?php
                    echo (($_SESSION['role'] === 'ADMIN') ? "<th scope='col'>Xử lý</th>" : "")
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_employee as $item) {
                    echo "<tr>
                        <td>" . $item['Ma_NV'] . "</td>
                        <td>" . $item['Ten_NV'] . "</td>
                        <td><img  width='40px' height='40px'  src='" . (($item['Phai'] === 'NAM') ? "http://cdn.onlinewebfonts.com/svg/img_504768.png" : "https://icon-library.com/images/woman-icon-png/woman-icon-png-10.jpg") . "' /></td>
                        <td>" . $item['Noi_Sinh'] . "</td>
                        <td>" . $item['Ma_Phong'] . "</td>
                        <td>" . $item['Luong'] . "</td>
                        " .
                        (($_SESSION['role'] === 'ADMIN') ? "<td>
                            <a href=./edit_employee.php?manv=".$item['Ma_NV']." class='btn btn-primary'>SỬA</a>
                            <a href=./delete_employee.php?manv=".$item['Ma_NV']." class='btn btn-danger'>XÓA</a>
                        </td>" : "")
                        . "
                    </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>