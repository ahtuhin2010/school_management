<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 19:22:21 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Edulearn | Responsive Education HTML5 Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="{{ asset('frontend/apple-touch-icon.html') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/fav.png') }}">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
		<!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/off-canvas.css') }}">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flaticon.css') }}">
		<!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/fonts2/flaticon.css') }}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rsmenu-main.css') }}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rsmenu-transitions.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->

        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
			<div class="rs-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="rs-toolbar-left">
								<div class="welcome-message">
									<i class="fa fa-bank"></i><span>Welcome to Edulearn</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="rs-toolbar-right">
								<div class="toolbar-share-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<a href="#" class="apply-btn">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Toolbar End -->

			<!--Header Start-->
			<header id="rs-header" class="rs-header">

				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
						                    <a href="mailto:info@domain.com">
						                    	<span>Mail Us</span>
												info@domain.com
											</a>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
						                    <a href="tel:4155551234">
						                    	<span>Call Us</span>
												+1234-567-890
											</a>
						                </div>
						            </div>
						        </div>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
											<li class="current-menu-item current_page_item menu-item-has-children"> <a href="#" class="home">Home</a></li>
											<!-- End Home -->

                                            <!--About Menu Start-->
                                            <li class="menu-item-has-children"> <a href="#">About Us</a></li>
                                            <!--About Menu End-->

                                            <!-- Drop Down Pages Start -->
											<li class="rs-mega-menu mega-rs"> <a href="#">Mega</a></li>
											<!--Drop Down Pages End -->

											<!--Courses Menu Start-->
		                                    <li class="menu-item-has-children"> <a href="#">Courses</a></li>
		                                    <!--Courses Menu End-->

											<!--Events Menu Start-->
											<li class="menu-item-has-children"> <a href="#">Events</a></li>
											<!--Events Menu End-->

                                            <!-- Drop Down -->
											<li class="menu-item-has-children"> <a href="#">Pages</a></li>
											<!--End Icons -->

											<!--blog Menu Start-->
											<li class="menu-item-has-children"> <a href="#">Blog</a></li>
											<!--blog Menu End-->

											<!--Contact Menu Start-->
											<li> <a href="contact.html">Contact</a></li>
								            <!--Contact Menu End-->
										</ul>
									</nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->

		</div>
        <!--Full width header End-->

		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">
        	<div id="home-slider">
				<!-- Item 1 -->
				<div class="item active">
					<img src="{{ asset('frontend/images/slider/home1/slide1.jpg') }}" alt="Slide1" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">WELCOME TO EDULEARN</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br class="hidden-sm-dow"> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 2 -->
				<div class="item">
					<img src="{{ asset('frontend/images/slider/home1/slide2.jpg') }}" alt="Slide2" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br class="hidden-sm-dow"> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 3 -->
				<div class="item">
					<img src="{{ asset('frontend/images/slider/home1/slide3.jpg') }}" alt="Slide3" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

        	</div>
        </div>
        <!-- Slider Area End -->

		<!-- Services Start -->
        <div class="rs-services rs-services-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	    	<i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Trending Courses</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-book rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Books & Liberary</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-user rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certified Teachers</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certification</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Services End -->

		<!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>ABOUT US</h2>
                	<p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
							<img src="{{ asset('frontend/images/about/about.jpg') }}" alt="img02"/>
							<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=tzMpWiGL8D8" title="Video Icon">
							</a>
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="about-desc">
                		    <h3>WELCOME TO EDULEARN</h3>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    	</div>
						<div id="accordion" class="rs-accordion-style1">
						    <div class="card">
						        <div class="card-header" id="headingOne">
						            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          		Our History
						            </h3>
						        </div>
						        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header" id="headingTwo">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          		Our Mission
						            </h3>
						        </div>
						        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header mb-0" id="headingThree">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          		Our Vision
						            </h3>
						        </div>
						        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Courses Start -->
        <div id="rs-courses" class="rs-courses sec-color sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h2>OUR POPULAR COURSES</h2>
                	<p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
				<div class="row">
			        <div class="col-md-12">
						<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="cource-item">
			                    <div class="cource-img">
			                        <img src="{{ asset('frontend/images/courses/1.jpg') }}" alt="" />
                                    <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                        <span class="course-value">$450</span>
			                    </div>
			                    <div class="course-body">
			                    	<a href="#" class="course-category">Science</a>
			                    	<h4 class="course-title"><a href="courses-details.html">Electrical Engineering</a></h4>
			                    	<div class="review-wrap">
			                    		<ul class="rating">
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star-half-empty"></li>
			                    		</ul>
			                    		<span class="review">25 Reviews</span>
			                    	</div>
			                    	<div class="course-desc">
			                    		<p>
			                    			Cras ultricies lacus consectetur, consectetur
			                    			scelerisque arcu curabitur
			                    		</p>
			                    	</div>
			                    </div>
			                    <div class="course-footer">
			                    	<div class="course-time">
			                    		<span class="label">Course Time</span>
			                    		<span class="desc">3 Year</span>
			                    	</div>
			                    	<div class="course-student">
			                    		<span class="label">Course Student</span>
			                    		<span class="desc">95</span>
			                    	</div>
			                    	<div class="class-duration">
			                    		<span class="label">Class Duration</span>
			                    		<span class="desc">8:30-4:00</span>
			                    	</div>
			                    </div>
			                </div>
			                <div class="cource-item">
			                    <div class="cource-img">
			                        <img src="{{ asset('frontend/images/courses/2.jpg') }}" alt="" />
                                    <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                        <span class="course-value">$450</span>
			                    </div>
			                    <div class="course-body">
			                    	<a href="#" class="course-category">Science</a>
			                    	<h4 class="course-title"><a href="courses-details.html">Computer Engineering</a></h4>
			                    	<div class="review-wrap">
			                    		<ul class="rating">
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star-half-empty"></li>
			                    		</ul>
			                    		<span class="review">39 Reviews</span>
			                    	</div>
			                    	<div class="course-desc">
			                    		<p>
			                    			Cras ultricies lacus consectetur, consectetur
			                    			scelerisque arcu curabitur
			                    		</p>
			                    	</div>
			                    </div>
			                    <div class="course-footer">
			                    	<div class="course-time">
			                    		<span class="label">Course Time</span>
			                    		<span class="desc">4 Years</span>
			                    	</div>
			                    	<div class="course-student">
			                    		<span class="label">Course Student</span>
			                    		<span class="desc">99</span>
			                    	</div>
			                    	<div class="class-duration">
			                    		<span class="label">Class Duration</span>
			                    		<span class="desc">8:30-4:00</span>
			                    	</div>
			                    </div>
			                </div>
			                <div class="cource-item">
			                    <div class="cource-img">
			                        <img src="{{ asset('frontend/images/courses/3.jpg') }}" alt="" />
                                    <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                        <span class="course-value">$450</span>
			                    </div>
			                    <div class="course-body">
			                    	<a href="#" class="course-category">Science</a>
			                    	<h4 class="course-title"><a href="courses-details.html">Civil Engineering</a></h4>
			                    	<div class="review-wrap">
			                    		<ul class="rating">
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star"></li>
			                    		    <li class="fa fa-star-half-empty"></li>
			                    		</ul>
			                    		<span class="review">22 Reviews</span>
			                    	</div>
			                    	<div class="course-desc">
			                    		<p>
			                    			Cras ultricies lacus consectetur, consectetur
			                    			scelerisque arcu curabitur
			                    		</p>
			                    	</div>
			                    </div>
			                    <div class="course-footer">
			                    	<div class="course-time">
			                    		<span class="label">Course Time</span>
			                    		<span class="desc">3.5 Years</span>
			                    	</div>
			                    	<div class="course-student">
			                    		<span class="label">Course Student</span>
			                    		<span class="desc">80</span>
			                    	</div>
			                    	<div class="class-duration">
			                    		<span class="label">Class Duration</span>
			                    		<span class="desc">8:30-4:00</span>
			                    	</div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Courses End -->

		<!-- Counter Up Section Start-->
        <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="row">
                	<div class="col-lg-6 col-md-12">
                		<div class="counter-content">
                			<h2 class="counter-title">ACHEIVEMENTS</h2>
                			<div class="counter-text">
                				<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart like mine.</p>
                			</div>
                			<div class="counter-img rs-image-effect-shine">
                				<img src="{{ asset('frontend/images/counter/1.jpg') }}" alt="Counter Discussion">
                			</div>
                		</div>
                	</div>
                	<div class="col-lg-6 col-md-12 mt-80">
                		<div class="row">
		                    <div class="col-md-6">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">60</h2>
		                            <h4 class="counter-desc">TEACHERS</h4>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">40</h2>
		                            <h4 class="counter-desc">COURSES</h4>
		                        </div>
		                    </div>
                		</div>
                		<div class="row">
		                    <div class="col-md-6">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">900</h2>
		                            <h4 class="counter-desc">STUDENTS</h4>
		                        </div>
		                    </div>
		                    <div class="col-md-6">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">3675</h2>
		                            <h4 class="counter-desc">Satisfied Client</h4>
		                        </div>
		                    </div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- Counter Down Section End -->

        <!-- Events Start -->
        <div id="rs-events" class="rs-events sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h2>OUR UPCOMING EVENTS</h2>
                	<p>I feel the presence of the Almighty, who formed us in his own image, and the breath.</p>
                </div>
				<div class="row">
			        <div class="col-md-12">
						<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{ asset('frontend/images/events/1.jpg') }}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
		                    	<div class="events-details sec-color">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 June 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">PRACTICE WORKSHOP 2018</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>12.30AM-05.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
			                </div>
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{ asset('frontend/images/events/2.jpg') }}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
                                <div class="events-details sec-color">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 April 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">CAMPUS EXAMINATION ROOM</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>10.30AM-03.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
			                </div>
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{ asset('frontend/images/events/3.jpg') }}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
                                <div class="events-details sec-color">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 June 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">BEST GRADUATION CEREMONY</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>10.30AM-03.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
		                    	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Events End -->

		<!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>OUR EXPERIENCED STAFFS</h2>
                	<p>Considering desire as primary motivation for the generation of narratives is a useful concept.</p>
                </div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ ('frontend/images/team/1.jpg') }}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">ABD Rashid Khan</h3>
                                <span class="subtitle">Vice Chancellor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
									<h3 class="team-name"><a href="teachers-single.html">ABD Rashid Khan</a></h3>
									<span class="team-title">Vice Chancellor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ ('frontend/images/team/2.jpg') }}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Luyes Figery</h3>
                                <span class="subtitle">A. Professor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                    <span class="team-title">A. Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ ('frontend/images/team/3.jpg') }}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Mr. Mahabub Alam</h3>
                                <span class="subtitle">Assistant Professor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Mr. Mahabub Alam</a></h3>
                                    <span class="team-title">Assistant Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
				    <a class="cta-button" href="#">Join Now</a>
				</div>
            </div>
        </div>
        <!-- Calltoaction End -->

        <!-- Latest News Start -->
        <div id="rs-latest-news" class="rs-latest-news sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h2>OUR LASTEST NEWS</h2>
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
				<div class="row">
			        <div class="col-md-6">
						<div class="news-normal-block">
		                    <div class="news-img">
		                    	<a href="#">
		                        	<img src="{{ asset('frontend/images/blog/1.jpg') }}" alt="" />
		                    	</a>
		                    </div>
	                    	<div class="news-date">
	                    		<i class="fa fa-calendar-check-o"></i>
	                    		<span>June  28,  2017</span>
	                    	</div>
	                    	<h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
	                    	<div class="news-desc">
	                    		<p>
	                    			Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
	                    		</p>
	                    	</div>
	                    	<div class="news-btn">
	                    		<a href="#">Read More</a>
	                    	</div>
		                </div>
			        </div>
			        <div class="col-md-6">
			        	<div class="news-list-block">
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="{{ asset('frontend/images/blog/2.jpg') }}" alt="" />
			                    	</a>
			                    </div>
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">While the lovely valley team work</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>
			        		</div>
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="{{ asset('frontend/images/blog/3.jpg') }}" alt="" />
			                    	</a>
			                    </div>
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">I must explain to you how all this idea</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>
			        		</div>
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="{{ asset('frontend/images/blog/4.jpg') }}" alt="" />
			                    	</a>
			                    </div>
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing a stroke</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>
			        		</div>
			        	</div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Latest News End -->


		<!-- Newslatter Start -->
<!--
        <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-6">
                        <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="newslatter-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email Address">
                            <button type="submit" class="form-button">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
-->

		<!-- Testimonial Start -->
        <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>
					<p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="{{ asset('frontend/images/testimonial/1.jpg') }}" alt="Jhon Smith">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name">Luise Henrikes</h4>
			                        <p>
			                            Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
			                        </p>
			                    </div>
			                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('frontend/images/testimonial/2.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('frontend/images/testimonial/3.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('frontend/images/testimonial/4.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('frontend/images/testimonial/5.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Testimonial End -->

        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="{{ asset('frontend/images/partner/1.png') }}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{ asset('frontend/images/partner/2.png') }}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{ asset('frontend/images/partner/3.png') }}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{ asset('frontend/images/partner/4.png') }}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{ asset('frontend/images/partner/5.png') }}" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
			<div class="container">
				<!-- Footer Address -->
				<div>
					<div class="row footer-contact-desc">
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Address</h4>
								<p class="contact-desc">
									503  Old Buffalo Street<br>
									Northwest #205, New York-3087
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-phone"></i>
								<h4 class="contact-title">Phone Number</h4>
								<p class="contact-desc">
									+3453-909-6565<br>
									+2390-875-2235
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Email Address</h4>
								<p class="contact-desc">
									infoname@gmail.com<br>
									www.yourname.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="about-widget">
                                <img src="{{ asset('frontend/images/logo-footer.png') }}" alt="Footer Logo">
                                <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the elegance of unique.</p>
                                <p class="margin-remove">We create Unique and Easy To Use Flexible Html Themes.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">RECENT POSTS</h5>
                            <div class="recent-post-widget">
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>28</span>
                                        <span>June</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="#">While the lovely valley team work</a></h5>
                                        <span class="post-category">Keyword Analysis</span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>28</span>
                                        <span>June</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="#">I must explain to you how all this idea</a></h5>
                                        <span class="post-category">Spoken English</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">OUR SITEMAP</h5>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li ><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                                <li><a href="courses-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses Details</a></li>
                                <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                                <li><a href="events-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Events Details</a></li>
                                <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                                <li><a href="blog-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Details</a></li>
                                <li><a href="teachers.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a></li>
                                <li><a href="teachers-single.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers Details</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                                <li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error 404</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">NEWSLETTER</h5>
                            <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                            <form class="news-form">
                                <input type="text" class="form-input" placeholder="Enter Your Email">
                                <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="footer-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2018 <a href="#">RS Theme</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

		<!-- Canvas Menu start -->
        <nav class="right_menu_togle">
        	<div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
            <div class="canvas-logo">
                <a href="index.html"><img src="{{ asset('frontend/images/logo-white.png') }}" alt="logo"></a>
            </div>
        	<ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start-->
                <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">Home One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Home Menu End-->

                <!--About Menu Start-->
                <li class="menu-item-has-children"><a href="#">About Us</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--About Menu End-->

                <!--Pages Menu Start-->
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Pages Menu End-->

                <!--Courses Menu Star-->
                <li class="menu-item-has-children"><a href="#">Courses</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Courses Menu End-->

                <!--Events Menu Star-->
                <li class="menu-item-has-children"><a href="#">Events</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--Events Menu End-->

                <!--blog Menu Star-->
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="list-unstyled">
                        <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                        <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
                    </ul>
                </li>
                <!--blog Menu End-->
                <li><a href="contact.html">Contact<span class="icon"></span></a></li>
        	</ul>
            <div class="search-wrap">
                <label class="screen-reader-text">Search for:</label>
                <input type="search" placeholder="Search..." name="s" class="search-input" value="">
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
		<!-- slick.min js -->
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
        <!-- magnific popup -->
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- rsmenu js -->
        <script src="{{ asset('frontend/js/rsmenu-main.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
		 <!-- main js -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 19:24:06 GMT -->
</html>


