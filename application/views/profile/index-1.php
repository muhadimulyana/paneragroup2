<!-- Hero Start -->
<section class="bg-half d-table w-100"
	style="background: url('<?= base_url(); ?>assets/images/profile/front.jpg') center center; background-size: cover;  background-attachment: fixed;">
	<div class="bg-overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<div class="page-next-level">
					<h4 class="title text-white title-dark"> Company Profile </h4>
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">About Us</li>
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

<!-- Shape Start -->
<div class="position-relative">
	<div class="shape overflow-hidden text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
		</svg>
	</div>
</div>
<!--Shape End-->

<!-- Blog STart -->
<section class="section" style="background: url('<?= base_url(); ?>assets/images/profile/shape.png') center center; background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title mb-4 pb-2">
					<h4 class="title mb-4 text-dark">Profil Perusahaan</h4>
					<p class="text-dark para-desc mx-auto mb-0">Pengenalan profil perusahaan, visi & misi, serta
						perusahaan - perusahaan yang tergabung dalam
						PAN ERA Group</p>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
				<div class="card explore-feature border-0 rounded text-center bg-white shadow">
					<div class="card-body">
						<div class="icon rounded-circle shadow-lg d-inline-block">
							<!-- <i data-feather="pen-tool" class="fea"></i> -->
							<img src="<?= base_url(); ?>assets/images/profile/building.svg" class="img-fluid" alt="">
						</div>
						<h5 class="mt-3 title">Profil, Visi & Misi Kami</h5>
						<p class="text-muted mb-0">Pengenalan profil perusahaan visi & misi Pan Era Group
						</p>
						<a href="<?= site_url('profile/company'); ?>" class="btn btn-pills btn-sm btn-soft-danger mt-3">
							Selengkapnya </a>
					</div>
				</div>
			</div>
			<!--end col-->
			<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
				<div class="card explore-feature border-0 rounded text-center bg-white shadow">
					<div class="card-body">
						<div class="icon rounded-circle shadow-lg d-inline-block">
							<!-- <i data-feather="pen-tool" class="fea"></i> -->
							<img src="<?= base_url(); ?>assets/images/profile/era-icon.png" class="img-fluid" alt="">
						</div>
						<h5 class="mt-3 title">PT. Elastis Reka Aktif</h5>
						<p class="text-muted mb-0">Pengenalan perusahaan kami yang menjadi bagian dari Pan Era Group</p>
						<a href="<?= site_url('profile/era'); ?>" class="btn btn-pills btn-sm btn-soft-danger mt-3">
							Selengkapnya </a>
					</div>
				</div>
			</div>
			<!--end col-->
			<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
				<div class="card explore-feature border-0 rounded text-center bg-white shadow">
					<div class="card-body">
						<div class="icon rounded-circle shadow-lg d-inline-block">
							<!-- <i data-feather="pen-tool" class="fea"></i> -->
							<img src="<?= base_url(); ?>assets/images/profile/eri-icon.png" class="img-fluid" alt="">
						</div>
						<h5 class="mt-3 title">PT. Elite Recycling Indonesia</h5>
						<p class="text-muted mb-0">Pengenalan perusahaan kami yang menjadi bagian dari Pan Era Group</p>
						<a href="<?= site_url('profile/eri'); ?>" class="btn btn-pills btn-sm btn-soft-success mt-3">
							Selengkapnya </a>
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

<!-- Modal Content Start -->
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content rounded shadow border-0">
			<div class="modal-header bg-soft-primary">
				<h5 class="modal-title text-dark" id="exampleModalCenterTitle">Judul Konten </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="isiKonten" style="overflow: auto !important; height: auto; max-height: 430px;">
				<div class="bg-white p-3 rounded box-shadow">
					<img src="<?= base_url(); ?>assets/images/home/a.jpg" width="100%" class="img-fluid rounded-md mb-3"
						alt="" id="company">
					<h5 class="card-title mb-0">Company Profile</h5>
					<blockquote class="blockquote mt-3 p-3">
						<p class=" mb-0 font-italic">" Kami adalah organisasi yang berdedikasi pada alam,
							berorientasi pada kualitas. "</p>
					</blockquote>
					<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Integer eget aliquet nibh praesent tristique
						magna sit amet purus. Nec tincidunt praesent semper feugiat nibh sed pulvinar proin. Sit amet
						consectetur adipiscing elit ut aliquam purus sit. Vitae auctor eu augue ut lectus. Enim nec dui
						nunc mattis enim ut tellus. Ultricies integer quis auctor elit sed. Pulvinar sapien et ligula
						ullamcorper malesuada proin. Est sit amet facilisis magna etiam tempor. Nisl purus in mollis
						nunc sed id semper. In nulla posuere sollicitudin aliquam. Diam maecenas sed enim ut sem
						viverra. Urna nunc id cursus metus. Sit amet consectetur adipiscing elit pellentesque habitant
						morbi tristique. Nulla facilisi cras fermentum odio eu feugiat. Volutpat sed cras ornare arcu
						dui vivamus.
						<br><br>
						Imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Quis enim lobortis scelerisque
						fermentum dui faucibus in. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Gravida arcu
						ac tortor dignissim. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Convallis
						convallis tellus id interdum velit laoreet id donec. A diam sollicitudin tempor id eu. Porta
						lorem mollis aliquam ut porttitor. Non nisi est sit amet facilisis magna etiam tempor. Id
						faucibus nisl tincidunt eget nullam. At quis risus sed vulputate odio ut enim blandit volutpat.
						In hac habitasse platea dictumst vestibulum rhoncus est. Urna nec tincidunt praesent semper
						feugiat nibh sed pulvinar. Turpis massa tincidunt dui ut ornare.
						<br><br>
						Mauris ultrices eros in cursus turpis massa tincidunt. Vitae et leo duis ut diam quam nulla
						porttitor. Pellentesque id nibh tortor id aliquet lectus proin. Arcu cursus euismod quis viverra
						nibh cras pulvinar mattis. Posuere morbi leo urna molestie at elementum eu. Est ullamcorper eget
						nulla facilisi etiam dignissim. Sit amet commodo nulla facilisi nullam vehicula ipsum a arcu.
						Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Scelerisque felis imperdiet proin
						fermentum leo vel orci porta non. Commodo quis imperdiet massa tincidunt nunc. Vitae suscipit
						tellus mauris a. Ullamcorper a lacus vestibulum sed arcu non odio euismod lacinia. Tempus
						egestas sed sed risus pretium quam vulputate dignissim suspendisse. Purus in mollis nunc sed id
						semper. Vitae et leo duis ut. Fames ac turpis egestas maecenas.
						<br><br>
						A scelerisque purus semper eget. Vel pretium lectus quam id leo in vitae turpis. Nec nam aliquam
						sem et tortor consequat id porta. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.
						Quis imperdiet massa tincidunt nunc pulvinar. Risus feugiat in ante metus dictum at tempor. Et
						netus et malesuada fames ac turpis egestas sed. Velit scelerisque in dictum non consectetur a
						erat nam at. At in tellus integer feugiat scelerisque varius. Sit amet dictum sit amet justo
						donec. Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Dis parturient montes
						nascetur ridiculus mus mauris vitae ultricies leo.
						<br><br>
						Nunc sed blandit libero volutpat sed cras ornare. Odio eu feugiat pretium nibh. Est ante in nibh
						mauris cursus. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Bibendum est
						ultricies integer quis. Pulvinar mattis nunc sed blandit libero volutpat. Suscipit adipiscing
						bibendum est ultricies integer quis auctor elit sed. Enim praesent elementum facilisis leo. Eu
						augue ut lectus arcu bibendum at varius vel. Nunc sed velit dignissim sodales ut eu. Mi tempus
						imperdiet nulla malesuada pellentesque. Lorem mollis aliquam ut porttitor leo a diam
						sollicitudin tempor. Egestas sed sed risus pretium quam. Quam adipiscing vitae proin sagittis
						nisl rhoncus mattis. Purus semper eget duis at tellus at urna condimentum.</p>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Content End -->

<script>
	$(function () {
		$('#LoginForm').on('shown.bs.modal', function () {
			$("#isiKonten").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	})

</script>
