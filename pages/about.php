<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../include/head.php'; ?>
<link rel="stylesheet" type="text/css" href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/about_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- navbar -->
	<?php include '../include/navbar.php'; ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images//about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Giới thiệu</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="intro_image"><img src="../images//intro.png" alt=""></div>
				</div>
				<div class="col-lg-5">
					<div class="intro_content">
						<h4 style="text-align:center;color: blueviolet">SỞ THÍCH ĐI DU LỊCH</h4>
							<p class="write1">
								Du lịch là một thành phần cốt lõi của cuộc sống từ khi tôi còn rất trẻ. Đối với một số người, nó là một sự lãng phí thời gian và tiền bạc. Họ tranh luận việc sử dụng các cách thay thế như đọc một cuốn sách hay xem một bộ phim về các địa danh thay vì đi du lịch. Họ quên rằng việc chạm tay vào thực tế đem lại một loại cảm xúc và sự hài lòng khác biệt.
								Không nghi ngờ gì khi một người được trải nghiệm cuộc sống nhiều hơn bằng cách đi bộ một dặm so với đọc toàn bộ một cuốn sách. Đó là một cảm giác tự do. Bạn có thể quen những người bạn mới, thoát khỏi nỗi thất vọng hằng ngày, và cho mình một chút thời gian để trải nghiệm một cái gì đó mới.
								Những người thích đi du lịch có nhiều sự lựa chọn cho mỗi lần đi. Thế giới rất rộng lớn và có rất nhiều nơi để đến thăm. Mỗi nơi có một vẻ đẹp khác nhau, những sinh vật, văn hóa, đặc trưng, ngôn ngữ, lịch sử và thời tiết khác nhau.
								Đi du lịch có thể là một sở thích tốn kém nhưng cò vài cách để khiến số tiền đó xứng đáng. Bạn có thể tìm hiểu chi tiết về nơi mà bạn sẽ đến. Một sự lựa chọn vị trí hoặc một gói du lịch khôn ngoan phần mềm sẽ giúp giảm chi phí cho bạn.
								Đi du lịch là một sở thích giáo dục hoàn hảo vì nó giúp bạn học hỏi được rất nhiều điều mới trong cuộc sống. Đi du lịch mang lại cho bạn một sự đột phá lớn từ công việc hằng ngày và một cơ hội để học hỏi một nền văn hóa mới và kết bạn. Những người bạn tình cờ gặp và tương tác với biết đâu sẽ mang lại cho bạn những cơ hội mới trong cuộc sống, hay họ có thể giúp bạn mở mang đầu óc.
								Đây hoàn toàn là một sở thích đầy cảm hứng để viết nếu bạn biết cách sắp xếp các ý hợp lí phải không nào?
							</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Stats -->

	<div class="stats">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Thống kê</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<p class="stats_text" style="font-size: 20px">Thống kê doanh thu đạt được và những sự thay đổi về khách hàng, địa điểm du lịch trong năm vừa qua  </p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_years">
						<div class="stats_years_last">2017</div>
						<div class="stats_years_new float-right">2018</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="stats_contents">

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_1.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">1642</div>
									<div class="stats_type">Khách hàng</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="1642" data-y="3527" data-color="#31124b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_1.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">3527</div>
									<div class="stats_type">Khách hàng</div>
								</div>
							</div>
						</div>

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_2.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">768</div>
									<div class="stats_type">Khách hàng cũ</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="768" data-y="145" data-color="#a95ce4">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_2.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">145</div>
									<div class="stats_type">Khách hàng cũ</div>
								</div>
							</div>
						</div>

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_3.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">11546</div>
									<div class="stats_type">Đạt được</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="11546" data-y="9321" data-color="#fa6f1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_3.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">9321</div>
									<div class="stats_type">Đạt được</div>
								</div>
							</div>
						</div>

						<!-- Stats Item -->
						<div class="stats_item d-flex flex-md-row flex-column clearfix">
							<div class="stats_last order-md-1 order-3">
								<div class="stats_last_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_4.png" alt="">
								</div>
								<div class="stats_last_content">
									<div class="stats_number">3729</div>
									<div class="stats_type">Tổng số</div>
								</div>
							</div>
							<div class="stats_bar order-md-2 order-2" data-x="3729" data-y="17429" data-color="#fa9e1b">
								<div class="stats_bar_perc">
									<div>
										<div class="stats_bar_value"></div>
									</div>
								</div>
							</div>
							<div class="stats_new order-md-3 order-1 text-right">
								<div class="stats_new_icon d-flex flex-column align-items-center justify-content-end">
									<img src="../images//stats_4.png" alt="">
								</div>
								<div class="stats_new_content">
									<div class="stats_number">17429</div>
									<div class="stats_type">Tổng số</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Add -->

	<div class="add">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="add_container">
						<div class="add_background" style="background-image:url(../images//add.jpg)"></div>
						<div class="add_content">
							<h1 class="add_title">Kỳ Co - Quy Nhơn City</h1>
							<div class="add_subtitle">Chỉ từ <span>3000000 đồng</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images//milestone_1.png" alt=""></div>
						<div class="milestone_counter" data-end-value="255">0</div>
						<div class="milestone_text">Khách hàng</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images//milestone_2.png" alt=""></div>
						<div class="milestone_counter" data-end-value="1176">0</div>
						<div class="milestone_text">Kế hoạch</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images//milestone_3.png" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Địa điểm du lịch</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images//milestone_4.png" alt=""></div>
						<div class="milestone_counter" data-end-value="127">0</div>
						<div class="milestone_text">Thực phẩm</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include '../include/footer.php'; ?>

</div>

<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/about_custom.js"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>
<script type="text/javascript">
$('p.write1').collapser({
		 mode: 'words',
		 truncate: 150,
		 showText: 'XEM THÊM',
		hideText: 'THU GỌN'
 });
</script>

</body>

</html>
