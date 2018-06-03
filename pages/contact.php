<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../include/head.php'; ?>
<link rel="stylesheet" type="text/css" href="../styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/contact_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<?php include '../include/navbar.php'; ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">LIÊN HỆ</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Điền thông tin</div>
						<form action="../include/contact_handle.php" id="contact_form" class="contact_form text-center" method="POST">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Tên" required="required" data-error="Name is required." name="contact_form_name">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required." name="contact_form_email">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Vấn đề" required="required" data-error="Subject is required." name="contact_form_subject">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Tin nhắn" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Gửi tin nhắn<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</br>
	<h1 style="text-align:center">BẢN ĐỒ</h1>
	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>
</br>
	<!-- Footer -->

	<?php include '../include/footer.php'; ?>


</div>


<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/contact_custom.js"></script>

</body>

</html>
