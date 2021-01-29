<style>
    #wave{
        display:none;
    }

    header{
        display:none;
    }

    footer{
        display:none;
    }

</style>

<div class="back-to-home rounded d-none d-sm-block">
    <a href="<?= site_url(); ?>" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- ERROR PAGE -->
<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <img src="<?= base_url(); ?>assets/images/oops/404.svg" style="max-width: 400px" class="img-fluid" alt="">
                <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>
                <p class="text-muted para-desc mx-auto">Halaman yang anda cari tidak ditemukan, mungkin telah dihapus, telah diubah, atau sedang dalam perbaikan. Klik tombol dibawah untuk kembali.</p>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-12 text-center">  
                <a href="javascript:void" onclick="window.history.back();" class="btn btn-outline-primary mt-4">Go Back</a>
                <a href="<?= site_url(); ?>" class="btn btn-primary mt-4 ml-2">Go To Home</a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- ERROR PAGE -->