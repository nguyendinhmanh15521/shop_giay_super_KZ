<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm</title>
    <link rel="stylesheet" href="./css/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<body>
<!-- Gọi Header và Kết Nối Sqli -->
        <div class="container">
            <?php
            session_start();
            include("pages/head.php");
            include("admincp/config/config.php");
            ?>
        </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <form method="POST">
            <select name="mu">
                <option selected>Mặc định</option>
                <option value="DESC">Giá giảm dần</option>
                <option value="ASC">Giá tăng dần</option>
                <option value="3">Mới nhất</option>
                <option value="4">Cũ nhất</option>
            </select>
            </form>
        </div>
<!-- Phan trang -->
<?php
	if(isset($_GET['p'])){
		$page = $_GET['p'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*4)-4;
	}
	// $sql_pro = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC LIMIT $begin,4";
	// $query_pro = mysqli_query($mysqli,$sql_pro);
?>

<!-- Hiện Thị Sản Phẩm -->
        <?php
            $sql_pro = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC LIMIT $begin,8";
            $query_pro = mysqli_query($mysqli,$sql_pro);
            ?>
            <div class="row">
                <?php
                while($row_pro = mysqli_fetch_array($query_pro)){
                ?>
            <div class="col-4">
                <a href="products-detail.php?id=<?php echo $row_pro['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                <h4><?php echo $row_pro['tensanpham'] ?></h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p><?php echo number_format($row_pro['giasp'],0,',','.').' vnđ' ?></p>
                </a>
            </div>
            <?php
            }
            ?>
            </div>
<!-- Phân Trang -->
            <div class="page-btn">
            <?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count);
				?>				
				<ul class="list_trang">
					<?php					
					for($i=1;$i<$trang;$i++){ 
					?>
                    <a href="products.php?p=<?php echo $i ?>">
                        <li <?php if($i==$page)
                                {echo 'style="background: brown;"';}
                                else{ echo ''; }  ?>>
                            <?php echo $i ?>
                        </li>
                    </a>
					<?php
					} 
					?>
            </div>
    </div>

        <!-- FOOTER -->
            <?php
            include("pages/footer.php");
            ?>

        <!-- TOGGLE MENU -->
        <?php
        include("pages/responsive.php");
        ?>
</body>
</html>