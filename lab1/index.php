<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf - 8">
    <meta name="author" content="nguyendinhanh"/>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <div id="wrapper">
        <h2> Xep Loai Ket Qua Tuyen Sinh</h2>
        <form action="#" method="post">
            <!-- Toan-->
            <div class="row">
                <div class="lbltitle">
                    <label>
                        Diem Mon Toan
                    </label>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"])? $_POST["Toan"]:"";?>" />  
                </div>    
                </div>
            </div>
            <!-- Ly-->
            <div class="row">
                <div class="lbltitle">
                    <label>
                        Diem Mon Ly
                    </label>
                <div class="lblinput">
                    <input type="number" name="Ly" value="<?php echo isset($_POST["Ly"])? $_POST["Ly"]:"";?>" />  
                </div>    
                </div>
            </div>
              <!-- Hoa-->
              <div class="row">
                <div class="lbltitle">
                    <label>
                        Diem Mon Hoa
                    </label>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"])? $_POST["Hoa"]:"";?>" />  
                <div class="row">
                    <div    class="lbltitle">
                        <label>Chon Khu Vuc</label>
                    </div>
                    <div class="lblinput">
                        <select name = "KhuVuc">
                            <option value = "" selected>--Chon Khu Vuc--</option>
                            <option value="1">KHU VUC 1</option> 
                            <option value="2">KHU VUC 2</option>
                            <option value="3">KHU VUC 3</option>
                            <option value="4">KHU VUC 4</option>
                            <option value="5">KHU VUC 5</option>
                        </select>

                    </div>
                </div>
                </div>    
                </div>
            </div>
            <!--Gui From -->
            <div class="row" >
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xep Loai"/>

                </div>

            </div>
        </form>
        <div id="result">
            <h2>Ket Qua Xep Loai</h2>
            <div class = "row">
                <div class = "lbltitle">
                    <label>Tong Diem</label>
                </div>
                <div class="lbloutput">
                    <?php

                    if(isset($_POST["btnsubmit"])){
                       
                        $KhuVucValue =empty($_POST["KhuVuc"]) ? 0 :$_POST["KhuVuc"];
                        $GLOBALS['TongDiem'] = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                        $GLOBALS['DiemUuTien'] = 0;

                        if($KhuVucValue == 1 || $KhuVucValue == 2){
                            $DiemUuTien = 5;
                            $TongDiem += 5;
                        }
                        
                        if($KhuVucValue == 3){
                            $DiemUuTien = 3;
                            $TongDiem += 3;
                        }
                        
                        echo $TongDiem;
                    }
                    ?>

                </div>
            </div>

            <div class = "row">
                <div class = "lbltitle">
                    <label>XEP LOAI</label>
                </div>
                <div class="lbloutput">
                    <?php
                    
                    if(isset($_POST["btnsubmit"])){
                        
                        if($TongDiem>=24)
                            echo "Gioi";
                        else if ($TongDiem>=21)
                            echo "Kha";
                        else if ($TongDiem>=15)
                            echo "Trung Binh";
                        else {
                            echo "Yeu";
                        }
                    }
                    ?>

                </div>
            </div>

            <div class = "row">
                <div class = "lbltitle">
                    <label>DIEM UU TIEN</label>
                </div>
                <div class="lbloutput">
                    <?php
                    
                    if(isset($_POST["btnsubmit"])){
                        echo $DiemUuTien;
                    }
                       
                    ?>

                </div>
            </div>
        </div>
    </div>
 
</body>
</html>