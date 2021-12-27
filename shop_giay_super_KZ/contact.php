<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hỗ Trợ</title>
        <link rel="stylesheet" href="./css/contact.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    </head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="container">
        <?php
            session_start();
            include("pages/head.php");
            include("admincp/config/config.php");
            ?>
        </div>
    </div>

    <!-- CONTACT PAGE -->
    <div class="wrapper">
        <header>Hỗ Trợ</header>
        <form method="POST" action="pages/mess.php">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="names" placeholder="Nhập tên">
                    <i class='fas fa-user'></i>
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Nhập email">
                    <i class='fas fa-envelope'></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Nhập số điện thoại">
                    <i class='fas fa-phone-alt'></i>
                </div>
                <div class="field">
                    <input type="text" name="address" placeholder="Nhập địa chỉ ">
                    <i class='fas fa-address-book'></i>
                </div>
            </div>
            <div class="message">
                <textarea placeholder="Nhập nội dung" name="message"></textarea>
                <i class="fal fa-comment-alt-lines"></i>
            </div>
            <div class="button-area">
                <button type="submit" name="sent">Gửi</button>
                <span></span>
            </div>
        </form>
    </div>
    
    <script src="./js/contact.js"></script>

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