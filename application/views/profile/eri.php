<style>
	@media (max-width: 768px){
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
	style="background: url('<?= base_url(); ?>assets/images/profile/bg-3.jpg">
	<div class="bg-overlay-white"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-12 order-2 order-md-1">
				<img width="80px" src="<?= base_url(); ?>assets/images/profile/eri.png" class="img-fluid d-block"
					alt="">
				<div class="title-heading">
					<h1 class="font-weight-bold mt-2 mb-3">PT. Elite Recycling Indonesia</h1>
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
								<li class="breadcrumb-item active" aria-current="page">PT. Elite Recycling Indonesia
								</li>
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

						<p class="text-muted mt-3">Didirikan pada tahun 2011, PT Elite Recycling Indonesia merupakan
							bagian dari visi organisasi untuk mewujudkan sebuah industri daur ulang yang modern dan
							professional.
						</p>
						<p class="text-muted">
							Adalah ambisi organisasi kami untuk membentuk sebuah perusahaan yang kelak dapat menjadi
							tolak ukur dalam industri daur ulang limbah plastik di Indonesia.
						</p>
						<p class="text-muted">
							Oleh karena itu seluruh komponen fisik perusahaan didesain sedemikian rupa untuk sedapat
							mungkin memenuhi standar industri paling modern.
						</p>
						<p class="text-muted">
							Teknologi dan strategi manajemen industri di PT Elite Recycling Indonesia mengadopsi apa
							yang selama ini telah dibangun dan dikembangkan oleh PT Elastis Reka Aktif.
						</p>
						<p class="text-muted">
							Pada saat ini, PT Elite Recycling Indonesia masih dalam tahap pertumbuhan. Namun semenjak
							tahap perancangan sudah diproyeksikan untuk menjadi fasilitas daur ulang bertaraf
							internasional. Segala sarana dan prasarana pabrik didesain secara seksama, agar dapat
							memenuhi standar industri modern.</p>
						<p class="text-muted">
							PT Elite Recyling Indonesia diharapkan dapat mendemonstrasikan sebuah lompatan besar dalam
							perkembangan industri daur ulang di Indonesia, khususnya daur ulang limbah plastik.
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
