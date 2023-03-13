<?php
    require_once("C:/xampp/htdocs/lab5/entities/product.class.php");

    if(isset($_POST['btnsubmit'])){
        $productName = $_POST['txtName'];
        $cateID = $_POST['txtCateID'];
        $price = $_POST['txtPrice'];
        $quantity = $_POST['txtQuantity'];
        $picture = $_POST['txtPicture'];
        $description = $_POST['txtdesc'];

        $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);

        $result = $newProduct->save();

        if(!$result){
            header("Location: add_product.php?failure");
        }
        else{
            header("Location: add_product.php?inserted");
        }


    }
?>

<?php include_once("header.php")  ?>

<?php 
    if(isset($_GET['inserted'])){
        echo "<h2>Thêm sản phẩm thành công</h2>";
    }
?>

<form method="post">
    <div class="row">
        <div class="lbltitle">
            <label for="">Tên sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtName" id="" value="<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="">Mô tả sản phẩm</label>
        </div>
        <div class="lblinput">
            <textarea  name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST['txtdesc']) ? $_POST['txtdesc'] : "" ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="">Số lượng sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtQuantity" id="" value="<?php echo isset($_POST['txtQuantity']) ? $_POST['txtQuantity'] : "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="">Giá sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtPrice" id="" value="<?php echo isset($_POST['txtPrice']) ? $_POST['txtPrice'] : "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="">Loại sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtCateID" id="" value="<?php echo isset($_POST['txtCateID']) ? $_POST['txtCateID'] : "" ?>">
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label for="">Hình ảnh sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtPicture" id="" value="<?php echo isset($_POST['txtPicture']) ? $_POST['txtPicture'] : "" ?>">
        </div>
    </div>
    <div class="row">
       <div class="submit">
        <input type="submit" name="btnsubmit" value="Thêm sản phẩm">
       </div>
    </div>
</form>

<?php include_once("footer.php") ?>