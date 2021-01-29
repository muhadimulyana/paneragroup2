<style>
	@media (max-width: 768px){
		.bg-half {
			padding: 100px 0 50px;
		}
	}
</style>

<section class="d-table bg-half w-100 bg-light">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-12 order-2 order-md-1">
				<div class="title-heading">
					<span class="badge badge-pill badge-soft-primary">About Us</span>
					<h1 class="font-weight-bold mt-2 mb-3">Visi & Misi <br> Perusahaan</h1>
					<p class="para-desc text-muted">Kenali gambaran besar mengenai visi, misi, dan tujuan perusahaan
					</p>
				</div>
			</div>
			<!--end col-->
			<div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 order-1 order-md-2">
				<img width="200px" src="<?= base_url(); ?>assets/images/profile/misi2.png" class="img-fluid d-block mx-auto" alt="">
			</div>
			<!--end col-->
			<div class="col-md-12 order-3 order-md-3 text-center">
				<div class="page-next-level">
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?= base_url('profile'); ?>">About Us</a></li>
								<li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
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
						<h5 class="mt-3">Visi Perusahaan</h5>
						<p class="text-muted mt-3">Untuk menjadi pelopor dan teladan, pada skala nasional dan
							internasional, dalam menjalankan dan mengembangkan industri daur ulang plastik, yang akan
							mendukung terciptanya lingkungan hidup yang berkelanjutan (Sustainable Living Environment).
						</p>
						<h5 class="mt-3">Misi Perusahaan</h5>
						<ul class="list-unstyled text-muted">
							<li class="mb-0"><span class="text-primary h5 mr-2"><i
										class="uim uim-check-circle"></i></span>Menyediakan produk berkualitas yang
								selalu dapat melebihi ekspektasi pelanggan.
							</li>
							<li class="mb-0"><span class="text-primary h5 mr-2"><i
										class="uim uim-check-circle"></i></span>Mengembangkan dan menggalakkan industri
								daur ulang yang memberikan efek positif terhadap lingkungan hidup (ramah lingkungan).
							</li>
							<li class="mb-0"><span class="text-primary h5 mr-2"><i
										class="uim uim-check-circle"></i></span>Menjadi organisasi yang menunaikan
								tanggung jawab sosial korporasi, baik secara eksternal mau pun internal, secara
								berkelanjutan.
							</li>
						</ul>
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
											href="<?= site_url('profile/visi'); ?>"> <img alt="img" width="50"
												src="<?= base_url(); ?>assets/images/profile/creative-idea.png"
												class="img-fluid rounded"></a></div>
									<div class="post-recent-content float-left"><a
											href="<?= site_url('profile/visi'); ?>">Visi & Misi
											Perusahaan</a> <span class="text-muted mt-2">About Us </span>
									</div>
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
