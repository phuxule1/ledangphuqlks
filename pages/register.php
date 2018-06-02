<?php
	session_start();
	if(isset($_SESSION['qlks_user'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../include/head.php'; ?>
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/blog_responsive.css">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
<!-- global styles -->
<link href="../themes/css/flexslider.css" rel="stylesheet"/>
<link href="../themes/css/main.css" rel="stylesheet"/>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<?php include '../include/navbar.php'; ?>

  <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/blog_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">ĐĂNG KÝ</div>
		</div>
	</div>
	<!-- Footer -->
</br>
  			<h1 style="text-align:center"><span>Đăng nhập - Đăng kí</span></h1>
  			<section class="main-content">
  				<div class="row">
            <div class="span2"></div>
  					<div class="span7">
  						<h4 class="title"><span class="text"><strong>Đăng nhập</span></h4>
  						<form action="../include/login_handle.php" method="post">
  							<input type="hidden" name="next" value="/">
  							<fieldset>
  								<div class="control-group">
  									<label class="control-label">Tên đăng nhập</label>
  									<div class="controls">
  										<input type="text" placeholder="Tên đăng nhập" id="username" name="username" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label">Mật khẩu</label>
  									<div class="controls">
  										<input type="password" placeholder="Mật khẩu" id="password" name="password" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Đăng nhập tài khoản">
  									<hr>
  									<p class="reset"><a tabindex="7" href="#" title="Quên mật khẩu?">Quên mật khẩu?</a></p>
  								</div>
  							</fieldset>
  						</form>
  					</div>
  					<div class="span3">
  						<h4 class="title"><span class="text"><strong>Đăng kí</strong></span></h4>
  						<form action="../include/register_handle.php" method="post" class="form-stacked">
  							<fieldset>
  								<div class="control-group">
  									<label class="control-label">Tên khách hàng</label>
  									<div class="controls">
  										<input type="text" placeholder="Tên khách hàng" name="regis_fullname" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label">Tên đăng nhập</label>
  									<div class="controls">
  										<input type="text" placeholder="Tên đăng nhập" name="regis_username" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label">Nhập mật khẩu</label>
  									<div class="controls">
  										<input type="password" placeholder="Nhập mật khẩu" name="regis_password" class="input-xlarge">
  									</div>
  								</div>
								<div class="control-group">
  									<label class="control-label">Giới tính</label>
  									<select name="regis_selSex" id="regis_selSex">
									  	<option value="1">Nam</option>
										<option value="0">Nữ</option>
									</select>
  								</div>
								<div class="control-group">
  									<label class="control-label">Địa chỉ khách hàng</label>
  									<div class="controls">
  										<input type="text" placeholder="Địa chỉ khách hàng" name="regis_userAddr" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label">Địa chỉ Email</label>
  									<div class="controls">
  										<input type="email" placeholder="Địa chỉ Email" name="regis_emailAddr" class="input-xlarge">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label">Điện thoại di dộng</label>
  									<div class="controls">
  										<input type="tel" placeholder="Điện thoại di động" name="regis_telephone" class="input-xlarge">
  									</div>
  								</div>
  								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Tạo tài khoản"></div>
  							</fieldset>
  						</form>
  					</div>
  				</div>
  			</section>

	<?php include '../include/footer.php'; ?>

</div>

<script src="../themes/js/superfish.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/blog_custom.js"></script>

</body>

</html>
