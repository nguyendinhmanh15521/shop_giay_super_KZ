<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super_KZ</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="css/slider.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    include("admincp/config/config.php")
    ?>
    <!-- HEADER -->
    <div class="header">
        <div class="container">
            <?php
            session_start();
            include("pages/head.php");
            ?>
            <!-- <div class="row">
                <div class="col-2">
                    <h1>Mang tới cho bạn <br> Một phong cách mới!</h1>
                    <p>Thành công không phải lúc nào cũng là về sự vĩ đại. Đó là về tính nhất quán.<br>Làm việc chăm chỉ bền bỉ sẽ đạt được thành công. Sự vĩ đại sẽ đến.</p>
                    <a href="products.php" class="btn">Khám phá ngay &#10132;</a>
                </div>
                <div class="col-2">
                    <img class="slide" src="images/1.jpeg" stt="0" style="display: none; max-height:450px;">
                    <img class="slide" src="images/2.jpeg" stt="1" style="display: none; max-height:450px;">
                    <img class="slide" src="images/3.jpeg" stt="2" style="display: none; max-height:450px;">
                    <img class="slide" src="images/4.jpeg" stt="3" style="display: none; max-height:450px;">
                    <img class="slide" src="images/5.jpeg" stt="4" style="display: none; max-height:450px;">
                    <a href="#" id="prev"><img src="images/prev.png" ></a>
                    <a href="#" id="next"><img src="images/next.png" ></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slideshow_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow_2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slideshow_1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- FEATURED CATEGORIES -->
    <!-- <div class="categories">
        <div class="small-container">
        <?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE soluong>=5 ORDER BY id_sanpham ASC LIMIT 3";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        ?>
            <div class="row">
            <?php
            while ($row_pro = mysqli_fetch_array($query_pro)) {
            ?>
                <div class="col-3">
                    <a href="products-detail.php?id=<?php echo $row_pro['id_sanpham'] ?>">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" >
                    </a>
                </div>
                <?php
            }
                ?>
            </div>
        </div>
        
    </div> -->

    <!-- FEATURED PRODUCTS -->
    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <?php
        $sql_pro = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC LIMIT 3";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        ?>
        <div class="row">
            <?php
            while ($row_pro = mysqli_fetch_array($query_pro)) {
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
                        <p><?php echo number_format($row_pro['giasp'], 0, ',', '.') . ' vnđ' ?></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- LASTEST PRODUCT -->
        <h2 class="title">Sản phẩm mới nhất</h2>
        <?php
        $sql_pro = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC LIMIT 9";
        $query_pro = mysqli_query($mysqli, $sql_pro);
        ?>
        <div class="row">
            <?php
            while ($row_pro = mysqli_fetch_array($query_pro)) {
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
                        <p><?php echo number_format($row_pro['giasp'], 0, ',', '.') . ' vnđ' ?></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- OFFER -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <?php
                $sql_pro = "SELECT * FROM tbl_sanpham WHERE id_sanpham='26' LIMIT 1";
                $query_pro = mysqli_query($mysqli, $sql_pro);
                ?>
                <?php
                while ($row_pro = mysqli_fetch_array($query_pro)) {
                ?>
                    <div class="col-2">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" class="offer-img">
                    </div>

                    <div class="col-2">
                        <p>Có sẵn độc quyền trên RedStore</p>
                        <h1><?php echo $row_pro['tensanpham'] ?></h1>
                        <small>Mi Smart Ban 4 có màn hình cảm ứng màu AMOLED lớn hơn 39,9% (so với Mi Band 3) với độ sáng có thể điều chỉnh, vì vậy mọi thứ đều rõ ràng nhất có thể.</small> <br>
                        <a href="products-detail.php?id=<?php echo $row_pro['id_sanpham'] ?>" class="btn">Mua ngay &#8594;</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- TESTIMONIAL -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user_1.png">
                    <h3>Ronaldo</h3>
                </div>

                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user_3.png">
                    <h3>Bale</h3>
                </div>

                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user_2.png">
                    <h3>Messi</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- BRANDS -->
    <div class="brands">
        <div class="smaill-container">
            <div class="row">
                <div class="col-5" style="flex: 0 0 auto; width: 15%;">
                    <img src="images/lg_1.png">
                </div>
                <div class="col-5" style="flex: 0 0 auto; width: 15%;">
                    <img src="images/lg_2.png">
                </div>
                <div class="col-5" style="flex: 0 0 auto; width: 15%;">
                    <img src="images/lg_3.png">
                </div>
                <div class="col-5" style="flex: 0 0 auto; width: 15%;">
                    <img src="images/lg_4.png">
                </div>
                <div class="col-5" style="flex: 0 0 auto; width: 15%;">
                    <img src="images/lg_5.png">
                </div>
            </div>
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
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>