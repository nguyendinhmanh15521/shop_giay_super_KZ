<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <?php
            session_start();
            include("admincp/config/config.php");
            include("pages/head.php");
            ?>
        </div>

        <!-- CART ITEMS DETAILS -->
        <div class="small-container cart-page">
            <?php
            if(isset($_SESSION['cart'])){

            }
            ?>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                </tr>
                <?php
                if(isset($_SESSION['cart'])){
                    $tongtien = 0;
                    foreach($_SESSION['cart'] as $cart_item){
                        $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                        $tongtien+=$thanhtien;
                        $tong=$tongtien-10000;
                ?>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>">
                            <div>
                                <p><?php echo $cart_item['tensanpham']; ?></p>
                                <small><?php echo number_format($cart_item['giasp'],0,',','.').' vnđ'; ?></small>
                                <br>
                                <a href="pages/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa bỏ</a>
                            </div>
                        </div>
                    </td>
                    <!-- <td><input type="number" value="1" min="1" size="8px"></td> -->
                    <td>
                    <a href="pages/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
    	            <?php echo $cart_item['soluong']; ?>
    	            <a href="pages/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                    </td>
                    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
                </tr>
                <?php
                    }
                
                ?>

            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Thành Tiền</td>
                        <td><?php echo number_format($tongtien,0,',','.').' vnđ' ?></td>
                    </tr>
                    <tr>
                        <td>Thuế</td>
                        <td>10000d</td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td><?php echo number_format($tong,0,',','.').'vnđ' ?></td>
                    </tr>
                </table>
                <br>
                <div class="btu">
                <button class="btntt" style="left: 0;" type="button" onclick="javascript:window.location = 'http://localhost/SHOP_GIAY_SUPER_KZ/products.php'"><p>&#9668; Tiếp tục mua hàng</p></button>    
                <a href="http://localhost/shop_giay_super_KZ/vnpay_php/"><button class="btntt" style="right: 0;"><p>Thanh Toán</p></button></a></div>
                
            </div>
            <?php
            }else{
                ?>
                <tr>
                    <td colspan="3" style="text-align: center; "><p style="margin: 200px; font-size: 30px;">Chưa chọn sản phẩm</p></td>
                </tr>
                <tr></tr>
                </table>
                <?php
                }
                ?>
        </div>
       
</body>
</html>