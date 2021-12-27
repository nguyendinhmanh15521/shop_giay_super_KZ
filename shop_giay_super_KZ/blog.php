<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/blog.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <?php
        session_start();
        include("pages/head.php");
        include("admincp/config/config.php");
        ?>
    </div>

    <div><img src="images/slideshow_1.jpg" alt=""></div>
    <!-- ACCOUNT PAGE -->
    <div class="account-page">
        <div class="container">
            <!-- <img src="images/g15.jpeg" width="100%"> -->

             <?php
            $sql_pro = "SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 4";
            $query_pro = mysqli_query($mysqli, $sql_pro);
            ?>
                <?php
                while ($row_pro = mysqli_fetch_array($query_pro)) {
                ?>
                <article class="blog-loop">
                <div class="blog-post row">  
                  <div class="col-md-4 col-xs-12 col-sm-12">
                    <img src="admincp/modules/quanlyblog/uploads/<?php echo $row_pro['anh_blog'] ?>">
                    </a>
                  </div>
                  <div class="col-md-8 col-xs-12 col-sm-12">
                    <h3 class="blog-post-title">
                      <a href="detailblog.html" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">Adidas Falcon nổi bật mùa Hè với phối màu color block</a>
                    </h3>
                    <div class="blog-post-meta">   
                      <span class="author vcard"><?php echo $row_pro['tieude'] ?></span>
                      <span class="date">                
                        <time pubdate="" datetime="2019-06-11"><?php echo $row_pro['tacgia'] ?></time>
                      </span>
                    </div>
                    <p class="entry-content"><?php echo $row_pro['noidung'] ?></p>
                  </div>
                </div>						
              </article>
                   
                <?php
                }
                ?>

<!-- <article class="blog-loop">
                <div class="blog-post row">  
                  <div class="col-md-4 col-xs-12 col-sm-12">
                    <img src="admincp/modules/quanlyblog/uploads/<?php echo $row_pro['anh_blog'] ?>">
                    </a>
                  </div>
                  <div class="col-md-8 col-xs-12 col-sm-12">
                    <h3 class="blog-post-title">
                      <a href="detailblog.html" title="Adidas Falcon nổi bật mùa Hè với phối màu color block">Adidas Falcon nổi bật mùa Hè với phối màu color block</a>
                    </h3>
                    <div class="blog-post-meta">   
                      <span class="author vcard"><?php echo $row_pro['tieude'] ?></span>
                      <span class="date">                
                        <time pubdate="" datetime="2019-06-11"><?php echo $row_pro['tacgia'] ?></time>
                      </span>
                    </div>
                    <p class="entry-content"><?php echo $row_pro['noidung'] ?></p>
                  </div>
                </div>						
              </article> -->

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

    <!-- JS FOR TOGGLE FORM -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegisterForm = document.getElementById("RegisterForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegisterForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegisterForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>

</body>

</html>