<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="css/style-h.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <?php
            include("admincp/config/config.php");
            include("pages/head.php");
            ?>
        </div>

        <!-- SINGLE PRODUCT DETAILS -->
        <?php
        $sql_chitiet = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
        $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
        while($row_chitiet = mysqli_fetch_array($query_chitiet)){
        ?>
        <div class=" single-product">
            <form method="POST" action="pages/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="row">
                <div class="col-img">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"  width="80%" id="ProductImg">
                </div>
                <div class="col-2">
                    <p>Home / T-Shirt</p>
                    <h1><?php echo $row_chitiet['tensanpham'] ?></h1>
                    <h4><?php echo number_format($row_chitiet['giasp'],0,',','.').' vnđ' ?></h4>
                    
                    <!-- <a href="" name="themgiohang" class="btn">Thêm vào giỏ hàng</a> -->
                    <p><input class="btn" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>

                    <h3>Chi tiết sản phẩm <i class="fas fa-indent"></i></h3>
                    <br>
                    <p><?php echo $row_chitiet['tomtat'] ?></p>
                </div>
            </div>
            </form>
        </div>
        <?php
        }
        ?>

        <!-- TITLE -->

  

        <!-- FOOTER -->
        <?php
        include("pages/footer.php");
        ?>

        <!-- JS FOR TOGGLE MENU -->
        <?php
        include("pages/responsive.php");
        ?>

        <!-- JS FOR PRODUCT GALLERY -->
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function(){
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function(){
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function(){
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function(){
                ProductImg.src = SmallImg[3].src;
            }

        </script>
</body>
</html>