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
			<div class="home_title">XÁC NHẬN</div>
		</div>
	</div>
	<!-- Footer -->
</br>
  			<h1 style="text-align:center"><span>XÁC NHẬN ĐƠN ĐẶT</span></h1></br>
  					<div class="span12" style="width: 100%">
  						<form action="../include/register_handle.php" method="post" class="form-stacked" style="text-align:center">
  							<fieldset>
  								<div class="control-group">
  									<label class="control-label" style="font-size: 22px">Tour đã đặt</label>
  									<div class="controls">
  										<input type="text" placeholder="" class="input-xlarge" style="padding:1%">
  									</div>
  								</div>
                  <div class="control-group">
                    <label class="control-label" style="font-size: 20px">Số lượng người</label>
                    <div class="controls">
                      <input type="text" placeholder="" class="input-xlarge" style="padding:1%">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" style="font-size: 22px">Ngày xuất phát</label>
                    <div class="controls">
                      <input type="date" placeholder="" class="input-xlarge" style="padding:1%">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" style="font-size: 20px">Ngày kết thúc</label>
                    <div class="controls">
                      <input type="date" placeholder="" class="input-xlarge" style="padding:1%">
                    </div>
                  </div>
  								<div class="control-group">
  									<label class="control-label" style="font-size: 20px">Tên khách hàng</label>
  									<div class="controls">
  										<input type="text" placeholder="" class="input-xlarge" style="padding:1%">
  									</div>
  								</div>
  								<div class="control-group">
  									<label class="control-label" style="font-size: 20px">Điện thoại di dộng</label>
  									<div class="controls">
  										<input type="password" placeholder="" class="input-xlarge" style="padding:1%">
  									</div>
  								</div>
  								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Đặt tour"></div>
  							</fieldset>
  						</form>
  					</div>
  				</div>

	<?php include '../include/footer.php'; ?>

</div>

<script src="../themes/js/superfish.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/blog_custom.js"></script>

</body>

</html>
