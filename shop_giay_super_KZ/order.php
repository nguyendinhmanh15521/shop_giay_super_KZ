<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="css/order.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <?php
            include("pages/head.php");
            ?>
        </div>
<!--  -->
    
    <div class="detail_order">
        <h1>Thông Tin Đặt Hàng</h1>
            <table  class="info-customer" width="100%" border="0" cellpadding="5">
            <tr>
                <td width="140" class="td-left"> Họ tên<font color="#FF0000"> (*)</font>: </td>
                <td><input type="text" class="input_text" size="30"/></td>
            </tr>
            <tr>
                <td class="td-left">Số điện thọai: <font color="#FF0000"> (*)</font></td>
                <td><input type="text" class="input_text" size="30"/></td>
            </tr>
            <tr>
                <td class="td-left">Địa Chỉ<font color="#FF0000"> (*)</font>: </td>
                <td><input type="text" class="input_text" size="30" /></td>
            </tr>
            
            <tr>
                <td class="td-left"> Email : </td>
                <td><input type="text" class="input_text" size="30"/></td>
            </tr>
            
            <tr>
                <td class="td-left">Chú thích đơn hàng : </td>
                <td>
                    <textarea></textarea>
                </td>
            </tr>
            <tr>
                <td class="td-left"><span>&nbsp;</span></td>
                <td>
                    Những chỗ có dấu (<font color="#FF0000"> * </font>) là bắt buộc phải nhập
                </td>
            </tr>
            </table>
            <div class="btnending">
                <button class="continue" type="button" onclick="javascript:window.location = 'http://localhost/RedStore3/products.php'">&#9668; Tiếp tục mua hàng</button>
                <button class="complete" href="" title=""> Gửi đơn hàng &#9658; </button>
            </div>
    </div>
    <!-- FOOTER -->
        <?php
        include("pages/footer.php");
        ?>

        <!-- JS FOR TOGGLE MENU -->
        <?php
        include("pages/responsive.php");
        ?>
</body>
</html>
