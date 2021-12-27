<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="./css/about.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php
        include("pages/head.php");
        ?>
    </div>

    <!-- ABOUT PAGE -->

    <div class="section">
        <div class="container-about">
            <div class="content-section">
                <div class="title">
                    <h2>HỆ THỐNG CỬA HÀNG SHOP GIAY SUPER KZ</h2>
                </div>
                <div class="content">
                    <p>Với mong muốn mang đến cho khách hàng sự trải nghiệm tốt nhất khi mua sắm các sản phẩm thời trang,
                        trong thời gian qua SHOP GIAY SUPER KZ không ngừng mở rộng các cửa hàng khắp Hà Nội</br>
                        Năm 2021, mục tiêu của SHOP GIAY SUPER KZ sẽ tiếp tục mở thêm nhiều hệ thống cửa hàng nữa
                        để đem đến cho khách hàng những sản phẩm thời trang phù hợp với nhu cầu, giá cả tốt nhất và dịch vụ hoàn hảo</br>

                    </p>
                    <p>Mời bạn ghé qua một số cửa hàng của SHOP GIAY SUPER KZ.</p>
                    <div>
                        <ul>
                            <li>- 57 Quan Hoa, Cầu Giấy, Hà Nội<br></li>
                            <li>- 61 Trần Phú, Hà Đông<br></li>
                            <li>- 29 Trần Đại Nghĩa, Hai Bà Trưng<br></li>
                            <li>* Thời gian làm việc : 9:00 AM - 22.00 PM , Thứ 2 - Chủ Nhật<br></li>
                            <li>* Liên Hệ : Phone: 097 567 1080 , Email: contact@giayxshop.vn<br></li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="images/g15.jpeg">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
    include("pages/footer.php");
    ?>

    <!-- JS FOR TOGGLE MENU -->
    <<?php
        include("pages/responsive.php");
        ?> </body>

</html>