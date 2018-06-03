<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../include/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="../styles/offers_styles.css">
	<link rel="stylesheet" type="text/css" href="../styles/offers_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- navbar -->
	<?php include '../include/navbar.php'; ?>

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">

			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(../images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(../images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(../images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
			</div>

			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>

		</div>

	</div>
	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				<div class="col-lg-11">
				</div>

				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">
						<!-- Offers Item -->
						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(../images/offer_1.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$70<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->
						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@thoughtcatalog -->
										<div class="offers_image_background" style="background-image:url(../images/offer_5.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->
						<div class="offers_item rating_5">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mindaugas -->
										<div class="offers_image_background" style="background-image:url(../images/offer_6.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$110<span>per night</span></div>
										<div class="rating_r rating_r_5 offers_rating"  data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->
						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@rktkn -->
										<div class="offers_image_background" style="background-image:url(../images/offer_7.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->
						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@itsnwa -->
										<div class="offers_image_background" style="background-image:url(../images/offer_8.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$90<span>per night</span></div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="../images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="../images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Phản hồi của khách hàng</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Testimonials Slider -->

					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
									<div class="test_icon"><img src="../images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
									<div class="test_icon"><img src="../images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
									<div class="test_icon"><img src="../images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_2.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_1.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="../images/test_3.jpg" alt=""></div>
									<div class="test_icon"><img src="../images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2017</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- Testimonials Slider Nav - Prev -->
						<div class="test_slider_nav test_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
						</div>

						<!-- Testimonials Slider Nav - Next -->
						<div class="test_slider_nav test_slider_next">
							<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Xu hướng</h2>
				</div>
			</div>
			<div class="row trending_container">
				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="../images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="contact">
		<div class="contact_background" style="background-image:url(../images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">

					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">Gửi liên lạc</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Tên" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Vấn đề" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Tin nhắn" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">Gửi tin nhắn<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include '../include/footer.php'; ?>
	<script src="../js/index_custom.js"></script>

</body>

</html>
