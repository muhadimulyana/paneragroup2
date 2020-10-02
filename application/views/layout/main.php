<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Landrick - Saas & Software Landing Page Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
	<meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
	<meta name="author" content="Shreethemes" />
	<meta name="email" content="shreethemes@gmail.com" />
	<meta name="website" content="http://www.shreethemes.in" />
	<meta name="Version" content="v2.5.1" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/front/images/favicon.ico">
	<!-- Bootstrap -->
	<link href="<?= base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Icons -->
	<link href="<?= base_url(); ?>assets/front/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<!-- Magnific -->
	<link href="<?= base_url(); ?>assets/front/css/magnific-popup.css" rel="stylesheet" type="text/css" />
	<!-- Slider -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/owl.theme.default.min.css" />
	<!-- FLEXSLIDER -->
	<link href="<?= base_url(); ?>assets/front/css/flexslider.css" rel="stylesheet" type="text/css" />
	<!-- Date picker -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/flatpickr.min.css">
	<!-- Main Css -->
	<link href="<?= base_url(); ?>assets/front/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
	<link href="<?= base_url(); ?>assets/front/css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>
	<!-- Loader -->
	<!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
	<!-- Loader -->

	<!-- Navbar STart -->
	<header id="topnav" class="defaultscroll sticky bg-white">
		<div class="container">
			<!-- Logo container-->
			<div>
				<a class="logo" href="index.html">
					<img src="<?= base_url(); ?>assets/front/images/logo-dark.png" height="24" alt="">
				</a>
			</div>
			<!-- End Logo container-->
			<div class="menu-extras">
				<div class="menu-item">
					<!-- Mobile menu toggle-->
					<a class="navbar-toggle">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
					<!-- End mobile menu toggle-->
				</div>
			</div>

			<div id="navigation">
				<!-- Navigation Menu-->
				<ul class="navigation-menu">
					<li><a href="index.html">Home</a></li>
					<li class="has-submenu">
						<a href="javascript:void(0)">Landing</a><span class="menu-arrow"></span>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="index-saas.html">Saas</a></li>
									<li><a href="index-classic-saas.html">Classic Saas</a></li>
									<li><a href="index-agency.html">Agency</a></li>
									<li><a href="index-apps.html">Application</a></li>
									<li><a href="index-classic-app.html">Classic Application</a></li>
									<li><a href="index-studio.html">Studio</a></li>
									<li><a href="index-business.html">Business</a></li>
									<li><a href="index-modern-business.html">Modern Business</a></li>
									<li><a href="index-hotel.html">Hotel</a></li>
									<li><a href="index-marketing.html">Marketing</a></li>
									<li><a href="index-enterprise.html">Enterprise</a></li>
									<li><a href="index-insurance.html">Insurance</a></li>
									<li><a href="index-shop.html">Shop</a></li>
									<li><a href="index-coworking.html">Coworking</a></li>
								</ul>
							</li>

							<li>
								<ul>
									<li><a href="index-it-solution.html">IT Solution <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-corporate.html">Corporate Business<span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-task-management.html">Task Management <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-email-inbox.html">Email Inbox <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-landing-one.html">Landing One <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-landing-two.html">Landing Two <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-landing-three.html">Landing Three <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-travel.html">Travel <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-blog.html">Blog <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="forums.html">Forums <span
												class="badge badge-danger rounded">v2.5</span></a></li>
									<li><a href="index-personal.html">Personal</a></li>
									<li><a href="index-services.html">Service</a></li>
									<li><a href="index-payments.html">Payments</a></li>
									<li><a href="index-crypto.html">Cryptocurrency</a></li>
								</ul>
							</li>
							<li>
								<ul>
									<li><a href="index-course.html">Course</a></li>
									<li><a href="index-online-learning.html">Online Learning</a></li>
									<li><a href="index-hosting.html">Hosting & Domain</a></li>
									<li><a href="index-event.html">Event</a></li>
									<li><a href="index-single-product.html">Product</a></li>
									<li><a href="index-portfolio.html">Portfolio</a></li>
									<li><a href="index-job.html">Job</a></li>
									<li><a href="index-social-marketing.html">Social Media</a></li>
									<li><a href="index-digital-agency.html">Digital Agency</a></li>
									<li><a href="index-car-riding.html">Car Ride</a></li>
									<li><a href="index-customer.html">Customer</a></li>
									<li><a href="index-software.html">Software</a></li>
									<li><a href="index-ebook.html">E-Book</a></li>
									<li><a href="index-onepage.html">Saas <span
												class="badge badge-pill badge-warning ml-2">Onepage</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
						<ul class="submenu">
							<li class="has-submenu"><a href="javascript:void(0)"> Company <span
										class="badge badge-primary rounded">Added</span></a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-aboutus.html"> About Us</a></li>
									<li><a href="page-aboutus-two.html"> About Us Two <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="page-services.html">Services</a></li>
									<li><a href="page-history.html">History <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="page-team.html"> Team</a></li>
									<li><a href="page-pricing.html">Pricing</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Account <span
										class="badge badge-primary rounded">Added</span></a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="account-profile.html">Profile</a></li>
									<li><a href="account-members.html">Members <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="account-works.html">Works <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="account-messages.html">Messages <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="account-payments.html">Payments <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="account-setting.html">Setting</a></li>
									<li><a href="page-invoice.html">Invoice</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Shop </a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="shop-products.html">All Products</a></li>
									<li><a href="shop-product-detail.html">Product Details</a></li>
									<li><a href="shop-cart.html">Shop Cart</a></li>
									<li><a href="shop-checkouts.html">Checkouts</a></li>
									<li><a href="shop-myaccount.html">My Account</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Help center </a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="helpcenter-overview.html">Helpcenter</a></li>
									<li><a href="helpcenter-faqs.html">Faqs</a></li>
									<li><a href="helpcenter-guides.html">Guides</a></li>
									<li><a href="helpcenter-support-request.html">Support Call</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Forums <span
										class="badge badge-danger rounded">v2.5</span></a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="forums.html">Overview <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="forums-topic.html">Forum Topic <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="forums-comments.html">Forum Comments <span
												class="badge badge-success rounded">New</span></a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Email Template</a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="email-confirmation.html">Confirmation</a></li>
									<li><a href="email-password-reset.html">Reset Password</a></li>
									<li><a href="email-alert.html">Alert</a></li>
									<li><a href="email-invoice.html">Invoice</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)">Careers</a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-jobs.html">Jobs</a></li>
									<li><a href="page-jobs-sidebar.html">Jobs - Sidebar</a></li>
									<li><a href="page-job-detail.html">Job Detail</a></li>
									<li><a href="page-job-apply.html">Job Apply</a></li>
									<li><a href="page-job-company.html">Company</a></li>
									<li><a href="page-job-candidate.html">Candidate</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Blog <span
										class="badge badge-primary rounded">Added</span></a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-blog-grid.html">Blog Grid</a></li>
									<li><a href="page-blog-sidebar.html">Blog with Sidebar</a></li>
									<li><a href="page-blog-list.html">Blog Listing</a></li>
									<li><a href="page-blog-list-sidebar.html">Blog List & Sidebar</a></li>
									<li><a href="page-blog-detail.html">Blog Detail</a></li>
									<li><a href="page-blog-detail-two.html">Blog Detail 2 <span
												class="badge badge-success rounded">New</span></a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Case Study <span
										class="badge badge-danger rounded">v2.5</span></a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-cases.html">All Cases <span
												class="badge badge-success rounded">New</span></a></li>
									<li><a href="page-case-detail.html">Case Detail <span
												class="badge badge-success rounded">New</span></a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Works</a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-work-modern.html">Works Modern</a></li>
									<li><a href="page-work-classic.html">Works Classic</a></li>
									<li><a href="page-work-grid.html">Works Grid</a></li>
									<li><a href="page-work-masonry.html">Works Masonry</a></li>
									<li><a href="page-work-detail.html">Work Detail</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Auth Pages</a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="auth-login.html">Login</a></li>
									<li><a href="auth-cover-login.html">Login Cover</a></li>
									<li><a href="auth-login-three.html">Login Simple</a></li>
									<li><a href="auth-signup.html">Signup</a></li>
									<li><a href="auth-cover-signup.html">Signup Cover</a></li>
									<li><a href="auth-signup-three.html">Signup Simple</a></li>
									<li><a href="auth-re-password.html">Reset Password</a></li>
									<li><a href="auth-cover-re-password.html">Reset Password Cover</a></li>
									<li><a href="auth-re-password-three.html">Reset Password Simple</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Utility </a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-terms.html">Terms of Services</a></li>
									<li><a href="page-privacy.html">Privacy Policy</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Special </a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-comingsoon.html">Coming Soon</a></li>
									<li><a href="page-comingsoon2.html">Coming Soon Two</a></li>
									<li><a href="page-maintenance.html">Maintenance</a></li>
									<li><a href="page-error.html">Error</a></li>
								</ul>
							</li>
							<li class="has-submenu"><a href="javascript:void(0)"> Contact </a><span
									class="submenu-arrow"></span>
								<ul class="submenu">
									<li><a href="page-contact-detail.html">Contact Detail</a></li>
									<li><a href="page-contact-one.html">Contact One</a></li>
									<li><a href="page-contact-two.html">Contact Two</a></li>
									<li><a href="page-contact-three.html">Contact Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="has-submenu">
						<a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
						<ul class="submenu">
							<li><a href="documentation.html">Documentation</a></li>
							<li><a href="changelog.html">Changelog</a></li>
							<li><a href="components.html">Components</a></li>
							<li><a href="widget.html">Widget</a></li>
						</ul>
					</li>
				</ul>
				<!--end navigation menu-->
			</div>
			<!--end navigation-->
		</div>
		<!--end container-->
	</header>
	<!--end header-->
	<!-- Navbar End -->

	<!-- Hero Start -->
	<section class="main-slider">
		<ul class="slides">
			<li class="bg-slider bg-animation-left d-flex align-items-center"
				style="background-image:url('<?= base_url(); ?>assets/front/images/hotel/bg01.jpg')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7">
							<div class="title-heading position-relative mt-4" style="z-index: 1;">
								<h1 class="heading mb-3">Enjoy Better Holidays With Landrick Resort</h1>
								<p class="para-desc">Launch your campaign and benefit from our expertise on designing
									and managing conversion centered bootstrap4 html page.</p>
								<div class="watch-video mt-4 pt-2">
									<a href="https://www.youtube.com/watch?v=jNTZpfXYJa4"
										class="video-play-icon watch text-dark"><i
											class="mdi mdi-play play-icon-circle text-center d-inline-block mr-2 rounded-circle text-white title-dark position-relative play play-iconbar"></i>
										WATCH VIDEO</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="bg-slider bg-animation-left d-flex align-items-center"
				style="background-image:url('<?= base_url(); ?>assets/front/images/hotel/bg02.jpg')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7">
							<div class="title-heading position-relative mt-4" style="z-index: 1;">
								<h1 class="heading mb-3">Enjoy The World of Relaxation</h1>
								<p class="para-desc">Launch your campaign and benefit from our expertise on designing
									and managing conversion centered bootstrap4 html page.</p>
								<div class="watch-video mt-4 pt-2">
									<a href="page-aboutus.html" class="btn btn-primary"><i
											class="mdi mdi-briefcase"></i> Aboutus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="bg-slider bg-animation-left d-flex align-items-center"
				style="background-image:url('<?= base_url(); ?>assets/front/images/hotel/bg03.jpg')">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7">
							<div class="title-heading position-relative mt-4" style="z-index: 1;">
								<h1 class="heading mb-3">Welcome Landrick <br> A Stunning Hotel</h1>
								<p class="para-desc">Launch your campaign and benefit from our expertise on designing
									and managing conversion centered bootstrap4 html page.</p>
								<div class="mt-4 pt-2">
									<a href="#bookroom" class="btn btn-primary mouse-down"><i
											class="mdi mdi-home-assistant"></i> Book now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</section>
	<!--end section-->
	<!-- Hero End -->

	<!-- Partners start -->
	<section class="section-two bg-light" id="bookroom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<form class="p-4 shadow bg-white rounded">
						<h4 class="mb-3">Book Now !</h4>
						<div class="row text-left">
							<div class="col-lg-3 col-md-6">
								<div class="form-group">
									<label> Check in : </label>
									<input name="date" type="text" class="flatpickr flatpickr-input form-control"
										id="checkin-date">
								</div>
							</div>
							<!--end col-->

							<div class="col-lg-3 col-md-6">
								<div class="form-group">
									<label> Check out : </label>
									<input name="date" type="text" class="flatpickr flatpickr-input form-control"
										id="checkout-date">
								</div>
							</div>
							<!--end col-->

							<div class="col-lg-6">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="form-group">
											<label>Adults : </label>
											<input type="number" min="0" autocomplete="off" id="adult" required=""
												class="form-control" placeholder="Adults :">
										</div>
									</div>
									<!--end col-->

									<div class="col-md-4">
										<div class="form-group">
											<label>Children : </label>
											<input type="number" min="0" autocomplete="off" id="children"
												class="form-control" placeholder="Children :">
										</div>
									</div>
									<!--end col-->

									<div class="col-md-4 mt-2">
										<input type="submit" id="search" name="search"
											class="searchbtn btn btn-primary btn-block p" value="Search">
									</div>
									<!--end col-->
								</div>
							</div>
						</div>
					</form>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- Partners End -->

	<!-- Rooms Start -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Rooms & Suits</h4>
						<p class="text-muted para-desc mb-0 mx-auto">Start working with <span
								class="text-primary font-weight-bold">Landrick</span> that can provide everything you
							need to generate awareness, drive traffic, connect.</p>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row">
				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/01.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Regular
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$350</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/02.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Regular Big
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$800</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/03.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Deluxe Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>2
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$1100</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/04.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Super Deluxe
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>2
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>2
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$1400</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/05.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Deluxe Big
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>3
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>3
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$1600</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/06.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Family Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>3
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>2
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$1750</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/07.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Premium
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$1890</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/08.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Super Premium
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$2050</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card work-container work-modern rounded border-0 overflow-hidden">
						<div class="card-body p-0">
							<img src="<?= base_url(); ?>assets/front/images/hotel/09.jpg" class="img-fluid rounded"
								alt="work-image">
							<div class="overlay-work"></div>
							<div class="content">
								<a href="javascript:void(0)" class="title text-white pb-2 border-bottom">Premium Big
									Room</a>
								<ul class="post-meta mb-0 mt-2 text-white list-unstyled">
									<li class="list-inline-item mr-3"><i class="mdi mdi-bed-empty mdi-24px mr-2"></i>1
										Bed</li>
									<li class="list-inline-item"><i class="mdi mdi-scale-bathroom mdi-24px mr-2"></i>1
										Bathrooms</li>
								</ul>
								<p class="text-white d-block mb-0">Rent <span class="text-success">$2500</span> /Night
								</p>
							</div>
							<div class="read_more bg-primary text-center rounded-circle">
								<a href="javascript:void(0)" class="text-light d-block"><i data-feather="chevron-right"
										class="fea icon-sm title-dark"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row justify-content-center">
				<div class="col-12 text-center mt-4 pt-2">
					<a href="javascript:void(0)" class="btn btn-primary">See More <i
							class="mdi mdi-chevron-right"></i></a>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- Rooms End -->

	<!-- CTA Start -->
	<section class="section bg-cta"
		style="background: url('<?= base_url(); ?>assets/front/images/hotel/bg04.jpg') center center;" id="cta">
		<div class="bg-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title">
						<h4 class="title title-dark text-white mb-4">Resembling Tour of Landrick Resort</h4>
						<p class="text-light para-dark para-desc mx-auto">Start working with Landrick that can provide
							everything you need to generate awareness, drive traffic, connect.</p>
						<a href="http://vimeo.com/287684225" class="play-btn border border-light mt-4 video-play-icon">
							<i data-feather="play" class="fea icon-ex-md text-white title-dark"></i>
						</a>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- CTA End -->

	<!-- Services Start -->
	<section class="section">
		<div class="container pb-lg-4 mb-md-5 mb-4">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Best Services for you</h4>
						<p class="text-muted para-desc mb-0 mx-auto">Start working with <span
								class="text-primary font-weight-bold">Landrick</span> that can provide everything you
							need to generate awareness, drive traffic, connect.</p>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row">
				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/wifi.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Free WIFI</h4>
							<p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a
								Aliquam aenean elementum semper.</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/game-controller.svg"
								class="avatar avatar-small" alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Relaxation</h4>
							<p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by
								established compiling unusual word.</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/weightlifter.svg"
								class="avatar avatar-small" alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Spa & Fitness</h4>
							<p class="text-muted mb-0">It seems that only fragments of the original text remain in the
								Lorem Ipsum fragments texts used today.</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/serving-dish.svg"
								class="avatar avatar-small" alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Restaurant</h4>
							<p class="text-muted mb-0">It seems that only fragments of the original text remain in the
								Lorem Ipsum fragments texts used today.</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/cardiogram.svg"
								class="avatar avatar-small" alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Smooth Parallax</h4>
							<p class="text-muted mb-0">Nisi aenean vulputate eleifend tellus vitae eleifend enim a
								Aliquam aenean elementum semper.</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/front/images/icon/bed.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Bedrooms</h4>
							<p class="text-muted mb-0">Allegedly, a Latin scholar established the origin of the text by
								established compiling unusual word.</p>
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<div class="position-relative">
		<div class="shape overflow-hidden text-light">
			<svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
			</svg>
		</div>
	</div>
	<!-- End services -->

	<!-- News Start -->
	<section class="section pt-5 pt-sm-0 pt-md-4 bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Latest News</h4>
						<p class="text-muted para-desc mx-auto mb-0">Start working with <span
								class="text-primary font-weight-bold">Landrick</span> that can provide everything you
							need to generate awareness, drive traffic, connect.</p>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row">
				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<img src="<?= base_url(); ?>assets/front/images/hotel/bg01.jpg"
								class="card-img-top rounded-top" alt="...">
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your
									own way</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i
												class="mdi mdi-comment-outline mr-1"></i>08</a></li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August,
								2019</small>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<img src="<?= base_url(); ?>assets/front/images/hotel/bg02.jpg"
								class="card-img-top rounded-top" alt="...">
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the
									IT world</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i
												class="mdi mdi-comment-outline mr-1"></i>08</a></li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August,
								2019</small>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<img src="<?= base_url(); ?>assets/front/images/hotel/bg03.jpg"
								class="card-img-top rounded-top" alt="...">
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications
									for Business</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i
												class="mdi mdi-comment-outline mr-1"></i>08</a></li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August,
								2019</small>
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--end section-->
	<!-- Blog End -->

	<!-- Client Start -->
	<section class="section"
		style="background: url('<?= base_url(); ?>assets/front/images/hotel/bg05.jpg') center center;">
		<div class="bg-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<div id="owl-fade" class="owl-carousel owl-theme">
						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" It seems that only fragments of the
								original text remain in the Lorem Ipsum texts used today. The most well-known dummy text
								is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Thomas Israel </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/01.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->

						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" The advantage of its Latin origin and the
								relative meaninglessness of Lorum Ipsum is that the text does not attract attention to
								itself or distract the viewer's attention from the layout. "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Carl Oliver </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/02.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->

						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" There is now an abundance of readable dummy
								texts. These are usually used when a text is required purely to fill a space. These
								alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or
								nonsensical stories. "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Barbara McIntosh </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/03.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->

						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" According to most sources, Lorum Ipsum can
								be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar
								established the origin of the text by compiling all the instances of the unusual word
								'consectetur' he could find "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Christa Smith </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/04.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->

						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" It seems that only fragments of the
								original text remain in the Lorem Ipsum texts used today. The most well-known dummy text
								is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Dean Tolle </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/05.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->

						<div class="customer-testi text-center">
							<p class="text-light para-dark h6 font-italic">" It seems that only fragments of the
								original text remain in the Lorem Ipsum texts used today. One may speculate that over
								the course of time certain letters were added or deleted at various positions within the
								text. "</p>
							<ul class="list-unstyled mb-0 mt-3">
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
								<li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
							</ul>
							<h6 class="text-light title-dark"> Jill Webb </h6>
							<img src="<?= base_url(); ?>assets/front/images/client/06.jpg"
								class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
						</div>
						<!--end customer testi-->
					</div>
					<!--end owl carousel-->
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
		<!-- Client End -->
	</section>
	<!-- Client End -->

	<!-- Contact Start -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6 p-0 pl-md-3 pr-md-3">
					<div class="card map map-height-two rounded map-gray border-0">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
							style="border:0" class="rounded" allowfullscreen></iframe>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<div class="card rounded shadow border-0">
						<div class="card-body py-5">
							<h5 class="card-title">Get In Touch !</h5>

							<div class="custom-form mt-4">
								<div id="message"></div>
								<form method="post" action="php/contact.php" name="contact-form" id="contact-form">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group position-relative">
												<label>Your Name <span class="text-danger">*</span></label>
												<i data-feather="user" class="fea icon-sm icons"></i>
												<input name="name" id="name" type="text" class="form-control pl-5"
													placeholder="First Name :">
											</div>
										</div>
										<!--end col-->
										<div class="col-md-12">
											<div class="form-group position-relative">
												<label>Your Email <span class="text-danger">*</span></label>
												<i data-feather="mail" class="fea icon-sm icons"></i>
												<input name="email" id="email" type="email" class="form-control pl-5"
													placeholder="Your email :">
											</div>
										</div>
										<!--end col-->
										<div class="col-md-12">
											<div class="form-group position-relative">
												<label>Comments</label>
												<i data-feather="message-circle" class="fea icon-sm icons"></i>
												<textarea name="comments" id="comments" rows="4"
													class="form-control pl-5" placeholder="Your Message :"></textarea>
											</div>
										</div>
									</div>
									<!--end row-->
									<div class="row">
										<div class="col-sm-12 text-center">
											<input type="submit" id="submit" name="send"
												class="submitBnt btn btn-primary btn-block" value="Send Message">
											<div id="simple-msg"></div>
										</div>
										<!--end col-->
									</div>
									<!--end row-->
								</form>
								<!--end form-->
							</div>
							<!--end custom-form-->
						</div>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
		<!-- Contact End -->
	</section>
	<!--end section-->
	<!-- News End -->

	<!-- Footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
					<a href="#" class="logo-footer">
						<img src="<?= base_url(); ?>assets/front/images/logo-light.png" height="24" alt="">
					</a>
					<p class="mt-4">Start working with Landrick that can provide everything you need to generate
						awareness, drive traffic, connect.</p>
					<ul class="list-unstyled social-icon social mb-0 mt-4">
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
					</ul>
					<!--end icon-->
				</div>
				<!--end col-->

				<div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Company</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								About us</a></li>
						<li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Services</a></li>
						<li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Team</a></li>
						<li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Pricing</a></li>
						<li><a href="page-work-modern.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Project</a></li>
						<li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Careers</a></li>
						<li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Blog</a></li>
						<li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Login</a></li>
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Usefull Links</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms
								of Services</a></li>
						<li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Privacy Policy</a></li>
						<li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Documentation</a></li>
						<li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Changelog</a></li>
						<li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Components</a></li>
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Newsletter</h4>
					<p class="mt-4">Sign up and receive the latest tips via email.</p>
					<form>
						<div class="row">
							<div class="col-lg-12">
								<div class="foot-subscribe form-group position-relative">
									<label>Write your email <span class="text-danger">*</span></label>
									<i data-feather="mail" class="fea icon-sm icons"></i>
									<input type="email" name="email" id="emailsubscribe"
										class="form-control pl-5 rounded" placeholder="Your email : " required>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="submit" id="submitsubscribe" name="send"
									class="btn btn-soft-primary btn-block" value="Subscribe">
							</div>
						</div>
					</form>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</footer>
	<!--end footer-->
	<footer class="footer footer-bar">
		<div class="container text-center">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="text-sm-left">
						<p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a
								href="http://www.shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
						</p>
					</div>
				</div>
				<!--end col-->

				<div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<ul class="list-unstyled text-sm-right mb-0">
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="<?= base_url(); ?>assets/front/images/payments/american-ex.png"
									class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="<?= base_url(); ?>assets/front/images/payments/discover.png"
									class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="<?= base_url(); ?>assets/front/images/payments/master-card.png"
									class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="<?= base_url(); ?>assets/front/images/payments/paypal.png"
									class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="<?= base_url(); ?>assets/front/images/payments/visa.png"
									class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
					</ul>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</footer>
	<!--end footer-->
	<!-- Footer End -->

	<!-- Back to top -->
	<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
	<!-- Back to top -->

	<!-- javascript -->
	<script src="<?= base_url(); ?>assets/front/js/jquery-3.5.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/scrollspy.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= base_url(); ?>assets/front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/magnific.init.js"></script>
	<!-- SLIDER -->
	<script src="<?= base_url(); ?>assets/front/js/owl.carousel.min.js "></script>
	<script src="<?= base_url(); ?>assets/front/js/owl.init.js "></script>
	<!--FLEX SLIDER-->
	<script src="<?= base_url(); ?>assets/front/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/flexslider.init.js"></script>
	<!-- Datepicker -->
	<script src="<?= base_url(); ?>assets/front/js/flatpickr.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/flatpickr.init.js"></script>
	<!-- Contact -->
	<script src="<?= base_url(); ?>assets/front/js/contact.js"></script>
	<!-- Icons -->
	<script src="<?= base_url(); ?>assets/front/js/feather.min.js"></script>
	<script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
	<!-- Main Js -->
	<script src="<?= base_url(); ?>assets/front/js/app.js"></script>
</body>

</html>
