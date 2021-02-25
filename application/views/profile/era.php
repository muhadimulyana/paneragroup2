<style>
	@media (max-width: 768px) {
		.bg-half {
			padding: 100px 0 50px;
		}
	}

	.bg-overlay-white {
		background-color: rgba(255, 255, 255, 0.6);
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
	}

</style>

<section class="d-table w-100 bg-light bg-half"
	style="background: url('<?= base_url(); ?>assets/images/profile/bg-2.jpg') center center; background-size: cover;"">
	<div class=" bg-overlay-white">
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-12 order-2 order-md-1">
				<img width="120px" src="<?= base_url(); ?>assets/images/profile/era.png" class="img-fluid d-block"
					alt="">
				<div class="title-heading">
					<h1 class="font-weight-bold mt-2 mb-3">PT. Elastis Reka Aktif</h1>
					<p class="para-desc">Perusahaan manufaktur kantong plastik dan bijih plastik
					</p>
				</div>
			</div>
			<!--end col-->
			<div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 order-1 order-md-2">

			</div>
			<!--end col-->
			<div class="col-md-12 order-3 order-md-3 text-center">
				<div class="page-next-level">
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?= base_url('profile'); ?>">About Us</a></li>
								<li class="breadcrumb-item active" aria-current="page">PT. Elastis Reka Aktif</li>
							</ul>
						</nav>
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

<!-- Blog STart -->
<section class="section">
	<div class="container">
		<div class="row">
			<!-- BLog Start -->
			<div class="col-lg-8 col-md-6">
				<div class="card blog blog-detail border-0 shadow rounded">
					<img src="images/blog/01.jpg" class="img-fluid rounded-top" alt="">
					<div class="card-body content">

						<p class="text-muted mt-3">Untuk menjadi pelopor dan teladan, pada skala nasional dan
							PT Elastis Reka Aktif memulai hidupnya sebagai PD Era Plastik, yang didirikan pada tahun
							1988. Pada awalnya, PD Era Plastik hanya bergerak di bidang jual beli dan pengolahan limbah
							plastik.
						</p>
						<p class="text-muted">
							Seiring dengan kemajuannya, dan untuk menunjang pengembangan lebih lanjut, maka pada tahun
							2004 PD Era Plastik dibentuk menjadi PT Elastis Reka Aktif. Namun hingga masih terkadang
							masih lebih dikenal dengan sebutan ERA Plastik.
						</p>
						<p class="text-muted">
							Bergerak dari bidang perdagangan limbah plastik, PT Elastis Reka Aktif kemudian
							mengembangkan lini bisnisnya menjadi pendauran ulang limbah plastik. Aktivitas pendauran
							ulang limbah plastik yang kemudian memberikan identitas kepada organisasi kami, dan juga
							sebagai sumber inspirasi kami.
						</p>
						<p class="text-muted">
							Berselang tidak lama, PT Elastis Reka Aktif kemudian memulai produksi kantong plastik dengan
							merek LOCO, yang sekarang telah menjelma menjadi sebuah merek yang dikenal baik di pasaran
							atas kualitasnya.
						</p>
						<p class="text-muted">
							Kantong plastik LOCO diproduksi dengan berbahan utama bahan hasil daur ulang limbah plastik
							yang diolah perusahaan.
						</p>
						<p class="text-muted">
							Peningkatan nilai tambah pada barang jadi tersebut PT Elastis Reka Aktif didasari atas
							pengertian akan filosofi daur ulang, yakni pengembalian limbah ke tingkat yang tertinggi
							mungkin pada tangga hirarki siklus hidup produk.
						</p>
					</div>
				</div>

			</div>
			<!-- BLog End -->

			<!-- START SIDEBAR -->
			<div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
				<div class="card border-0 sidebar sticky-bar rounded shadow">
					<div class="card-body">
						<!-- RECENT POST -->
						<div class="widget mb-4 pb-2">
							<h5 class="widget-title">About Us</h5>
							<div class="mt-4">
								<div class="clearfix post-recent">
									<div class="post-recent-thumb float-left" style="width: 18%;"> <a
											href="<?= site_url('profile/company'); ?>"> <img alt="img" width="50"
												src="<?= base_url(); ?>assets/images/profile/building.svg"
												class="img-fluid rounded"></a></div>
									<div class="post-recent-content float-left"><a
											href="<?= site_url('profile/company'); ?>">Company
											Profile</a><span class="text-muted mt-2">About Us </span></div>
								</div>
								<div class="clearfix post-recent">
									<div class="post-recent-thumb float-left" style="width: 18%;"> <a
											href="<?= site_url('profile/era'); ?>"> <img alt="img" width="50"
												src="<?= base_url(); ?>assets/images/profile/era-icon.png"
												class="img-fluid rounded"></a></div>
									<div class="post-recent-content float-left"><a
											href="<?= site_url('profile/era'); ?>">PT. Elastis
											Reka Aktif</a> <span class="text-muted mt-2">About Us </span></div>
								</div>
								<div class="clearfix post-recent">
									<div class="post-recent-thumb float-left" style="width: 18%;"> <a
											href="<?= site_url('profile/eri'); ?>"> <img alt="img" width="50"
												src="<?= base_url(); ?>assets/images/profile/eri-icon.png"
												class="img-fluid rounded"></a></div>
									<div class="post-recent-content float-left"><a
											href="<?= site_url('profile/eri'); ?>">PT. Elite
											Recycling Indonesia</a> <span class="text-muted mt-2">About Us </span>
									</div>
								</div>
							</div>
						</div>
						<!-- RECENT POST -->
					</div>
				</div>
			</div>
			<!--end col-->
			<!-- END SIDEBAR -->
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!--end section-->
<!-- Blog End -->
