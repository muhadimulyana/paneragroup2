	<!-- Hero Start -->
	<section class="main-slider">
		<ul class="slides">
			<?php foreach($slider as $row) : ?>
			<li class="bg-slider bg-animation-left d-flex align-items-center"
				style="background-image:url('<?= base_url(); ?>assets/images/slider/<?= $row->GAMBAR; ?>'); background-size: cover; min-height: 100vh;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-7">
							<div class="title-heading position-relative mt-4" style="z-index: 1;">
								<h1 class="heading mb-3"><?= $row->JUDUL; ?></h1>
								<p class="para-desc"><?= $row->ISI; ?></p>
								<div class="watch-video mt-4 pt-2">
									<a href="#parallax" class="btn btn-primary mouse-down"><i
											class="mdi mdi-home-assistant"></i> Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</section>
	<!--end section-->
	<!-- Hero End -->

	<!-- Start Plan -->
	<section class="section bg-light">

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5 col-12">
					<img src="<?= base_url(); ?>assets/images/home/new.png" style="max-width: 80%;"
						class="img-fluid mx-auto d-block" alt="">
				</div>
				<!--end col-->

				<div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<div class="section-title">
						<span class="title" style="font-size: 18px;">Selamat Datang</span> <span class="title text-blue"
							style="font-size: 18px;"><b>Di PAN ERA Group</b></span>
						<h4 class="title mb-4"><b>Kami Adalah Organisasi Yang Berdedikasi Pada <span class="text-blue">
									Alam</span>, Berorientasi Pada
								<span class="text-blue">Kualitas</span>.</b>
						</h4>
						<p class="text-muted para-desc mb-0">Kondisi virus Covid-19 membuat beberapa distributor kami harus
							menyesuaikan jam operasional. Namun kami tetap berkomitmen untuk memenuhi kebutuhan Anda,
							silahkan untuk menghubungi nomor telepon kami agar mendapatkan contact distributor produk
							plastik kami.</p>
						<div class="d-inline-block">
							<div class="pt-4 d-flex align-items-center border-top">
								<i data-feather="phone" class="fea icon-md mr-2 text-primary"></i>
								<div class="content">
									<h6 class="mb-0">Fast Response: 0817-248-999 (Whatsapp)</h6>
									<a href="javascript:void(0)" class="text-primary">Selengkapnya <i
											class="mdi mdi-arrow-right"></i></a>
								</div>
							</div>
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
	<!-- End Plan -->

	<!-- Services Start -->
	<section class="section">
		<div class="container pb-lg-4 mb-md-5 mb-4">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title mb-4 pb-2">
						<h4 class="title mb-4">Bisnis Kami</h4>
						<p class="text-muted para-desc mb-0 mx-auto">Kami adalah organisasi yang berdedikasi pada alam,
							<br> berorientasi pada kualitas.
						</p>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row">
				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/building.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Profil Perusahaan</h4>
							<p class="text-muted mb-0">Pengenalan perusahaan - perusahaan yang tergabung dalam Pan Era
								Group</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/idea.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Visi & Misi</h4>
							<p class="text-muted mb-0">Ambisi kami yang kemudian menjadi daya dorong untuk terus maju dan
								berkembang</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/recycle.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Bijih Plastik Daur Ulang</h4>
							<p class="text-muted mb-0">Produk ramah lingkungan yang menjadi inti dan asal identitas kami
							</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/reusable.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Kantong Plastik</h4>
							<p class="text-muted mb-0">LOCO, kantong plastik kebanggaan besar kami yang kami kembangkan</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/hired.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Manajemen SDM</h4>
							<p class="text-muted mb-0">Filosofi manajemen sumber daya manusia kami untuk berkembang bersama
							</p>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-md-4 col-12 mt-5">
					<div class="features text-center">
						<div class="image position-relative d-inline-block">
							<img src="<?= base_url(); ?>assets/images/services/job-search.svg" class="avatar avatar-small"
								alt="">
						</div>

						<div class="content mt-4">
							<h4 class="title-2">Kesempatan Berkarir</h4>
							<p class="text-muted mb-0">Daftar lowongan posisi yang sedang tersedia beserta instruksi
								pelamaran</p>
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
						<h4 class="title mb-4">Media Dan Informasi</h4>
						<p class="text-muted para-desc mx-auto mb-0">Kumpulan Berita & Informasi Terlengkap Dan Terbaru<br>
							Dari PAN ERA
							GROUP</p>
					</div>
				</div>
				<!--end col-->
			</div>
			<!--end row-->

			<div class="row">
				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<a href="javascript:void" class="card-img-top img-fluid rounded-top"
								style="background-image: url('<?= base_url(); ?>assets/images/news/1.jpg'); background-size: cover; min-width: 100%; width: 350px; height: 232px; display: block;"></a>
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">Family Gathering di
									<br>Jungle
									Land

								</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a>
									</li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020,
								2019</small>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<a href="javascript:void" class="card-img-top img-fluid rounded-top"
								style="background-image: url('<?= base_url(); ?>assets/images/news/3.jpg'); background-size: cover; min-width: 100%; width: 350px; height: 232px; display: block;"></a>
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">Family Gathering di PT
									Elite Recycling Indonesia</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a>
									</li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020,
								2019</small>
						</div>
					</div>
				</div>
				<!--end col-->

				<div class="col-lg-4 col-md-6 mt-4 pt-2">
					<div class="card blog rounded border-0 shadow">
						<div class="position-relative">
							<a href="javascript:void" class="card-img-top img-fluid rounded-top"
								style="background-image: url('<?= base_url(); ?>assets/images/news/2.jpeg'); background-size: cover; min-width: 100%; width: 350px; height: 232px; display: block;"></a>
							<!-- <img src="<?= base_url(); ?>assets/images/news/2.jpeg" class="card-img-top rounded-top"
								alt="..."> -->
							<div class="overlay rounded-top bg-dark"></div>
						</div>
						<div class="card-body content">
							<h5><a href="javascript:void(0)" class="card-title title text-dark">Pelatihan Manajemen PAN ERA
									Group
								</a></h5>
							<div class="post-meta d-flex justify-content-between mt-3">
								<ul class="list-unstyled mb-0">
									<li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)"
											class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a>
									</li>
									<li class="list-inline-item"><a href="javascript:void(0)"
											class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a>
									</li>
								</ul>
								<a href="page-blog-detail.html" class="text-muted readmore">Read More <i
										class="mdi mdi-chevron-right"></i></a>
							</div>
						</div>
						<div class="author">
							<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
							<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020,
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

	<!-- Start -->
	<section class="section" style="padding: 50px 0;">
		<!-- Start CTA -->
		<div class="container-fluid mt-100 mt-60">
			<div class="rounded"
				style="background: url('<?= base_url(); ?>assets/images/home/a.jpg'); background-attachment: fixed; background-size: cover; background-position:center;">
				<div class="py-5" style="background: rgba(255, 255, 255, 0.775);">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section-title text-center mt-lg-3">
									<img class="logo-panera" src="<?= base_url(); ?>assets/images/logo/panera.png"
										style="height: 180px;" alt="" id="parallax">
								</div>
							</div>
							<!--end col-->
						</div>
						<!--end row-->
					</div>
					<!--end container-->
				</div>
			</div>
		</div>
		<!--end container-->
		<!-- End CTA -->
	</section>
	<!--end section-->
	<!-- End -->

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
												<textarea name="comments" id="comments" rows="4" class="form-control pl-5"
													placeholder="Your Message :"></textarea>
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
