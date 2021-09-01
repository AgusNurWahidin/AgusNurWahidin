<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Konfirmasi Sewa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v2.2.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <?php foreach ($user as $u) { ?>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Konfirmasi Sewa</h2>
        </div>

        <form action="<?php echo site_url('Daftar/tambah_aksi'); ?>" method="post">

          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="hidden" name="user_id" value="<?php echo $u->id_sewa ?>" class="form-control">
              <input type="hidden" class="form-control" name="wa" value="<?php echo $u->wa ?>" />
              <input type="text" name="nik" class="form-control" id="nik" value="Telah Terdaftar NIK : <?php echo $u->nik ?> dengan Atas Nama : <?php echo $u->user_name ?> di Aplikasi Dispora Mojokerto" required />
              <div class="validate"></div>
            </div>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="wa" value="<?php echo $u->wa ?>" required />
                <div class="validate"></div>
              </div>
            </div>

            <div class="scrollto"><button type="submit" class="btn-success">Kirim</button></div>
        </form>



      </div>
    <?php } ?>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>