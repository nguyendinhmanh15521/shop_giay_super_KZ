<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<style type="text/css"> 
	body{
        margin-top: 50px;
        background-image: /*linear-gradient(115deg, rgba(58, 58, 158, 0.8), rgba(136, 136, 206, 0.7) ),*/ 
        url(https://i.pinimg.com/originals/f7/4c/f6/f74cf67b65a6d2e898c71599727329f3.jpg);
    	}
    .main{
        margin-top: 50px;
        background-color: tomato;
        height: 500px;
        width: 500px;
        margin: 0 auto;
        box-shadow: 5px 5px 5px 0px #aaa;
        /* ghi chu quan trong can anh de len tren */
        position: relative; 
    }
    .thick-green-border {
    position: absolute;
    top: -40px;
    left: 25px;
    border-radius: 50%;
    width: 100px;
    height: 100px;
  }
  .super{
	position: absolute;
    top: -50px;
    left: 125px;
    font-size: 25px;
    color: orangered;
    font-weight: bold;
  }
  /* super */
.auth-form__head{
	align-items: center;
	justify-content: space-between;
}
.auth-form__heading{
    text-align: center;
	font-size: 2.2rem;
	font-weight: 300;
	cursor: default;
    padding-top: 20px;
}
.auth-form__switch-btn{
	font-size: 1.6rem;
	font-weight: 400;
	color: rgb(253, 2, 2);
	cursor: pointer;
	text-decoration: none;
}
.auth-form__input{
	width: 90%;
	height: 40px;
	margin: 15px;
	font-size: 1.4rem;
}
.auth-form__aside{
	margin-top: 18px;
}
.auth-form__policy-text{
	font-size: 1.2rem;
	line-height: 1.8rem;
	text-align: center;
}
.auth-form__text-link{
	color: red;
	text-decoration: none;
}

.auth-form__controls .btn:hover{
	cursor: pointer;
}
.auth-form__controls{
    text-align: center;
    padding: 30px;
}
.auth-form__controls .btn{
	width: 400px;
	height: 36px;
	font-size: 1.5rem;
}
.auth-form__quenmk{
    text-align: right;
    /* text-decoration: none; */
    padding: 0 25px;
}
.auth-form__quenmk :hover{
    cursor: pointer;
}
	</style>
</head>
<body>
<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
		<!-- <table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Đăng nhập Admin</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table> -->
	<div class="main">
        <a href="#"><img class="smaller-image thick-green-border" 
			src="../images/LogoMakr.png"
            alt="A cute orange cat lying on its back."></a>
            <p class="super">SHOP-kZ</p>
    <!-- super -->
    <div class="auth-form">
        <div class="auth-form__container">
        <div>
          <p class="auth-form__heading">Đăng Nhập</p>
      </div>
      <div class="auth-form__form">
          <div class="auth-form__group">
              <input type="text" class="auth-form__input" name="username" placeholder="Tải khoản của bạn">
          </div>
          <div class="auth-form__group">
            <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn">
        </div>
      </div>
    <div class="auth-form__controls"> 
    <button class="btn btn--primary" name="dangnhap">ĐĂNG NHẬP</button>
    </div>
        </div>
    </div>
    </div>
	</form>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
