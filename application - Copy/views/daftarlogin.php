<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>daftar</title>
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
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar Login</h2>
      </div>

      <form action="<?php echo site_url('Daftar/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK" required />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Nama Lengkap" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Masukkan Email" data-rule="email" data-msg="Masukkan Email dengan benar" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" class="form-control" name="wa" id="wa" placeholder="Nomor WA Contoh : +62895xxxxxxx" required />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="text" class="form-control" name="user_password" id="user_password" placeholder="Password" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <select type="text" class="form-control" name="user_level" id="user_level" placeholder="User" required>
              <option name="user_level" value="user">User</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label>Upload KTP</label>
            <input type="file" class="form-control" name="ktp" id="ktp" placeholder="pillih File" required />
            <div class="validate"></div>
          </div>
        </div>

        <div class="scrollto"><button type="submit" class="btn-success">Kirim</button></div>
      </form>



    </div>
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