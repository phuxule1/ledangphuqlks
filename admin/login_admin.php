<?php
    session_start();
    if(isset($_SESSION['qlksAdmin'])) header("location:index.php");
	include_once '../include/db.php';
?>
<!DOCTYPE html><!-- Begin Header -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản Lý Khách Sạn Admin</title>
	<link rel="icon" href="./favicon.ico">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 1px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
    background-color: #f1f1f1;
    padding: 10px 0;
    margin-bottom: 0;
    box-shadow: 0px 0px 2px 1px #ccc;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
</style>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
	            <h1 class="text-center login-title">Đăng Nhập Quản Lý Khách Sạn Admin</h1>
	            <div class="account-wall">
	                <img class="profile-img" src="images/admin_img.png" alt="">
	                <form class="form-signin" action="handle/login_handle.php" method="post">
		                <input type="text" class="form-control" placeholder="Nhập Tài Khoản hoặc Email" name="username" id="username" required autofocus>
		                <input type="password" class="form-control" placeholder="Nhập Mật Khẩu" name="password" id="password" required>
		                <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html><!-- End footer -->

<script>
	$('.container').css('margin-top', ($(window).height() - $('.container').height())/2);
	$(window).scroll(function(event) {
		$('.container').css('margin-top', ($(window).height() - $('.container').height())/2);
	});
</script>