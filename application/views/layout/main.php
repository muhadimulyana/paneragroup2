<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
	<meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
	<meta name="author" content="Shreethemes" />
	<meta name="email" content="shreethemes@gmail.com" />
	<meta name="website" content="http://www.shreethemes.in" />
	<meta name="Version" content="v2.5.1" />
	<!-- favicon -->
	<link href="<?= base_url(); ?>assets/images/favicon/p.png" rel="icon">
	<title><?= $this->lang->line('text_title'); ?></title>
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

	<style>
		.text-lang {
			display: none;
		}

		@media only screen and (max-width: 700px) {
			.text-lang {
				display: inline;
			}

			.logo-panera {
				height: 50px !important;
			}
		}

	</style>

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
				<a class="logo" style="padding: 5px 0 0 0;" href="index.html">
					<img class="logo-panera" src="<?= base_url(); ?>assets/images/logo/panera.png" style="height: 65px;"
						alt="">
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
				<ul class="navigation-menu nav-right">
					<?php $menu = $this->Menu_m->getmenubyLang($this->lang->line('text_nation'))->result(); 
					foreach($menu as $row) : ?>
					<?php if($row->HAVE_SUB == 0) : ?>
					<li style="margin: 0 5px;"><a href="<?= $row->URL; ?>"><?= $row->MENU; ?></a></li>
					<?php else : ?>
					<li style="margin: 0 5px;" class="has-submenu">
						<a href="javascript:void(0)"><?= $row->MENU; ?></a><span class="menu-arrow"></span>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<?php $submenu = $this->Menu_m->getsubbylangIdMenu($this->lang->line('text_nation'), $row->ID_MENU)->result(); 
                    				foreach($submenu as $sub) : ?>
									<li><a href="<?= $sub->URL; ?>"><?= $sub->SUB_MENU;?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
						</ul>
					</li>
					<?php endif; ?>
					<?php endforeach; ?>
					<li class="has-submenu" style="margin: 0 5px;">
						<a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/images/flags/id.png" alt=""
								width="25px;"><span class="text-lang"> Bahasa Indonesia</span></a><span
							class="menu-arrow"></span>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="#"><img src="<?= base_url(); ?>assets/images/flags/en.png" alt=""
												width="25px;">&nbsp;&nbsp;English</a></li>
								</ul>
							</li>
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

	<?= $contents; ?>

	<!-- Shape Start -->
	<div class="position-relative" style="margin-top: 50px;">
		<div class="shape overflow-hidden text-footer">
			<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#202942" fill-opacity="1"
					d="M0,160L60,165.3C120,171,240,181,360,202.7C480,224,600,256,720,277.3C840,299,960,309,1080,298.7C1200,288,1320,256,1380,240L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
				</path>
			</svg> -->
			<img src="<?= base_url(); ?>assets/images/wave/wave3.svg" alt="">
		</div>
	</div>
	<!--Shape End-->

	<!-- Footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
					<a href="#" class="logo-footer">
						<img src="<?= base_url(); ?>assets/images/logo/panera-c.png" height="65"
							style="border-radius: 10px;" alt="">
					</a>
					<p class="mt-4">Jalan Kapuk Raya No. 88 E, F, G Penjaringan Jakarta Utara DKI Jakarta 14460
						Indonesia</p>
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
								<?= $this->lang->line('qlink_profile'); ?></a></li>
						<li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_vision'); ?></a></li>
						<li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_news'); ?></a></li>
						<li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_hr'); ?></a></li>
						<li><a href="page-work-modern.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_career'); ?></a></li>
						<!-- <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Careers</a></li>
						<li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Blog</a></li>
						<li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Login</a></li> -->
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
								Sitemap</a></li>
						<!-- <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Changelog</a></li>
						<li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Components</a></li> -->
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Subscribe</h4>
					<p class="mt-4">Sign up and receive the latest news and job opportunities via email.</p>
					<form>
						<div class="row">
							<div class="col-lg-12">
								<div class="foot-subscribe form-group position-relative">
									<label>Write and submit your email <span class="text-danger">*</span></label>
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
						<p class="mb-0">© 2020 PAN ERA Group. Craft with <i class="mdi mdi-heart text-danger"></i> by
							IT Team.
						</p>
					</div>
				</div>
				<!--end col-->

				<div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<ul class="list-unstyled payment-cards text-sm-right mb-0">
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="images/payments/american-ex.png" class="avatar avatar-ex-sm"
									title="American Express" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="images/payments/discover.png" class="avatar avatar-ex-sm" title="Discover"
									alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img
									src="images/payments/master-card.png" class="avatar avatar-ex-sm"
									title="Master Card" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png"
									class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png"
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
