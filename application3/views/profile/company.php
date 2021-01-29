<style>
	@media (max-width: 768px){
		.bg-half {
			padding: 100px 0 50px;
		}
	}
</style>

<section class="d-table w-100 bg-light bg-half">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-12 order-2 order-md-1">
				<div class="title-heading">
					<span class="badge badge-pill badge-soft-primary">Tentang Kami</span>
					<h1 style="line-height: 1;" class="font-weight-bold mt-2 mb-3">Profil <br> Perusahaan</h1>
					<p class="para-desc text-muted">Pengenalan profil perusahaan dan sejarah dibentuknya Pan Era Group
					</p>
				</div>
			</div>
			<!--end col-->
			<div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 order-1 order-md-2">
				<img src="<?= base_url(); ?>assets/images/profile/build2.png" width="200px" class="img-fluid d-block mx-auto" alt="">
			</div>
			<!--end col-->
			<div class="col-md-12 order-3 order-md-3 text-center">
				<div class="page-next-level">
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="<?= base_url('profile'); ?>">About Us</a></li>
								<li class="breadcrumb-item active" aria-current="page">Company Profile</li>
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
					<div class="card-body content">
						<h5 class="mt-3">Company Profile</h5>
						<p class="text-muted mt-3">Pan Era Group dibentuk pada tahun 2011, dan pada awalnya merupakan
							gabungan dari dua buah perusahaan, PT Elastis Reka Aktif dan PT Elite Recycling Indonesia.
						</p>
						<p class="text-muted">Kami adalah salah satu grup perusahaan terkemuka di Indonesia yang
							bergerak di dua lini bisnis, yakni pendauran ulang limbah plastik, terutama yang berbahan
							Polyethylene, dan manufaktur kantong plastik.
						</p>
						<p class="text-muted">
							Kami percaya bahwa daur ulang adalah salah satu solusi utama terhadap masalah keberlanjutan
							lingkungan hidup (sustainability problem). Dengan kegiatan daur ulang, tidak hanya jumlah
							limbah yang beredar di lingkungan dapat berkurang, namun juga masyarakat dapat menikmati
							produk yang diproduksi dengan energi yang lebih rendah. Pengurangan pemakaian energi
							tersebut adalah kunci utama daripada sebagian besar masalah lingkungan yang ada sekarang.
							Beberapa contoh di antaranya pemanasan global dan keterbatasan sumber energi. Berbekal dari
							kepercayaan yang mendalam inilah kami kemudian memfokuskan sumber daya kami ke dalam
							pengembangan aktivitas daur ulang.
						</p>
						<p class="text-muted">
							Kualitas adalah nilai yang sangat penting dalam organisasi kami. Filosofi kualitas yang
							dibenamkan ke dalam benak organisasi kami dititikberatkan pada kemampuan dan kewajiban kami
							untuk melebihi ekspektasi pelanggan, pada setiap saat. Skema pengendalian kualitas kami
							dirancang sedemikian rupa untuk dapat memenuhi tuntutan tersebut.
						</p>
						<p class="text-muted">
							Pada setiap saat kami tidak pernah berhenti untuk terus mengembangkan sistem perusahaan agar
							sistem manajemen yang berkualitas dapat tercipta.
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
