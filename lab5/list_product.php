<?php 
    require_once("C:/xampp/htdocs/lab5/entities/product.class.php");
     ?>
<?php 
    include_once("header.php");
    $prods = Product::list_products();

    foreach($prods as $item){
        echo "<p>Tên sản phẩm: ".$item['ProductName'] ."</p>";
    }

    include_once("footer.php");
?>
