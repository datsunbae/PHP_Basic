<?php
require_once("C:/xampp/htdocs/kiemtra/entities/employee.class.php");

if (isset($_POST['btnsubmit'])) {
    $maNV = $_POST['txtMaNV'];
    $tenNV = $_POST['txtTenNV'];
    $phai = $_POST['txtPhai'];
    $noiSinh = $_POST['txtNoiSinh'];
    $maPhong = $_POST['txtMaPhong'];
    $luong = $_POST['txtLuong'];

    $newEmployee = new Employee($maNV, $tenNV, $phai, $noiSinh, $maPhong, $luong);

    $result = $newEmployee->save();

    if (!$result) {
        header("Location: add_employee.php?failure");
    } else {
        header("Location: add_employee.php?inserted");
    }
}
?>

<?php
if (isset($_GET['inserted'])) {
    echo "<h2>Thêm nhân sự thành công</h2>";
}
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
    <div class="container">
        <form method="post">
            <div class="row">
                <div class="lbltitle">
                    <label for="">Mã nhân viên</label>
                </div>
                <div class="lblinput">
                    <input type="text" name="txtMaNV" id="" value="<?php echo isset($_POST['txtMaNV']) ? $_POST['txtMaNV'] : "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label for="">Tên nhân viên</label>
                </div>
                <div class="lblinput">
                    <textarea name="txtTenNV" cols="21" rows="10" value="<?php echo isset($_POST['txtTenNV']) ? $_POST['txtTenNV'] : "" ?>"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label for="">Phái</label>
                </div>
                <div class="lblinput">
                    <input type="text" name="txtPhai" id="" value="<?php echo isset($_POST['txtPhai']) ? $_POST['txtPhai'] : "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label for="">Nơi sinh</label>
                </div>
                <div class="lblinput">
                    <input type="text" name="txtNoiSinh" id="" value="<?php echo isset($_POST['txtNoiSinh']) ? $_POST['txtNoiSinh'] : "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label for="">Mã phòng</label>
                </div>
                <div class="lblinput">
                    <input type="text" name="txtMaPhong" id="" value="<?php echo isset($_POST['txtMaPhong']) ? $_POST['txtMaPhong'] : "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label for="">Lương</label>
                </div>
                <div class="lblinput">
                    <input type="text" name="txtLuong" id="" value="<?php echo isset($_POST['txtLuong']) ? $_POST['txtLuong'] : "" ?>">
                </div>
            </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Thêm nhân sự">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>