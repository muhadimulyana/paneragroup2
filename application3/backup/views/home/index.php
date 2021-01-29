<style>
	.bg-animation-left:after {
		background: rgba(255, 255, 255, 0.85) !important;
		width: 65%;
	}

	@media only screen and (max-width: 700px) {
		.bg-animation-left:after {
			width: 100%;
		}
	}

</style>

<!-- Hero Start -->
<section class="main-slider">
	<ul class="slides">
		<?php foreach($slider as $row) : ?>
		<li class="bg-slider bg-animation-left d-flex align-items-center"
			style="background-image:url('<?= base_url(); ?>assets/images/slider/<?= $row->GAMBAR; ?>'); background-size: cover; min-height: 100vh; background-attachment: fixed;">
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
					<p class="text-muted para-desc mb-0">Kami tetap berkomitmen untuk memenuhi kebutuhan Anda,
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

<!-- CTA Start -->
<section class="section bg-cta" data-jarallax='{"speed": 0.5}'
	style="background: url('<?= base_url(); ?>assets/images/home/a.jpg') center center;" id="cta">
	<div class="bg-overlay bg-overlay-gradient"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title">
					<h2 class="title title-dark text-white mb-4">PAN ERA GROUP</h2>
					<h5 class="text-light para-desc para-dark mx-auto font-weight-light">Start working with PAN ERA
						GROUP that can provide
						everything you need to generate skills, communication, and experience.</h5>
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
						<h4 class="title-2"><a href="<?= site_url('profile/company'); ?>">Profil Perusahaan</a></h4>
						<p class="text-muted mb-0">Pengenalan perusahaan - perusahaan yang tergabung dalam Pan Era
							Group</p>
					</div>
				</div>
			</div>
			<!--end col-->

			<div class="col-md-4 col-12 mt-5">
				<div class="features text-center">
					<div class="image position-relative d-inline-block">
						<img src="<?= base_url(); ?>assets/images/services/idea.svg" class="avatar avatar-small" alt="">
					</div>

					<div class="content mt-4">
						<h4 class="title-2"><a href="<?= site_url('profile/visi'); ?>">Visi & Misi</a></h4>
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
						<h4 class="title-2"><a href="<?= site_url('product#resin'); ?>">Bijih Plastik Daur Ulang</a>
						</h4>
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
						<h4 class="title-2"><a href="<?= site_url('product#bag'); ?>">Kantong Plastik</a></h4>
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
						<h4 class="title-2"><a href="<?= site_url('management'); ?>">Manajemen SDM</a></h4>
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
						<h4 class="title-2"><a href="<?= site_url('career'); ?>">Kesempatan Berkarir</a></h4>
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
<!-- <div class="position-relative">
	<div class="shape overflow-hidden text-light">
		<svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
		</svg>
	</div>
</div> -->
<!-- End services -->

<!-- News Start -->
<section class="section pt-5 pt-sm-0 pt-md-4 bg-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title mb-4 pb-2">
					<h4 class="title mb-4 text-white">Media Dan Informasi</h4>
					<p class="text-white para-desc mx-auto mb-0">Kumpulan Berita & Informasi Terlengkap Dan Terbaru<br>
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
							<a href="<?= base_url('news/detail'); ?>" class="text-muted readmore">Read More <i
									class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
					<div class="author">
						<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
						<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020</small>
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
							<a href="<?= base_url('news/detail'); ?>" class="text-muted readmore">Read More <i
									class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
					<div class="author">
						<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
						<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020</small>
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
							<a href="<?= base_url('news/detail'); ?>" class="text-muted readmore">Read More <i
									class="mdi mdi-chevron-right"></i></a>
						</div>
					</div>
					<div class="author">
						<small class="text-light user d-block"><i class="mdi mdi-account"></i> Muhamad Adi</small>
						<small class="text-light date"><i class="mdi mdi-calendar-check"></i> 30th June 2020</small>
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

<!-- News End -->
