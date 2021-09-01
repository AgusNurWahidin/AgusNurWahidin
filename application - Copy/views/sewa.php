<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sewa</title>
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
    <div class="container" data-aos="">

      <div class="section-title">
        <h2>Sewa Tempat</h2>
      </div>
      <!-- <h5 class="animate__animated animate__fadeInDown">ID User :<?php echo $this->session->userdata('alamaat'); ?></h5> -->
      <!-- <form action="<?php echo site_url('Bayar/proses'); ?>" method="post"> -->

      <form action="<?php echo site_url('Bayar/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">

        <div class="form-row">
          <div class="col-md-6 form-group">
            <label>ID User</label>
            <input type="text" class="form-control" readonly name="id_user" id="id_user" value="<?php echo $this->session->userdata('userid'); ?>" placeholder="Nama" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <label>Nama User</label>
            <input type="text" class="form-control" readonly name="nama" id="nama" value="<?php echo $this->session->userdata('username'); ?>" placeholder="Nama" required>
            <div class="validate"></div>
          </div>

          <div class="col-md-6 form-group">
            <label>Tempat</label>
            <select type="text" class="form-control" name="tempat" id="user_level" placeholder="User" required>
              <option name="tempat" value="kosong">- Pilih Tempat -</option>
              <option name="tempat" value="Bangsal / LAP.VOLY 1">Bangsal / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Bangsal / LAP.VOLY 2">Bangsal / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Dawar Blandong / LAP.VOLY 1">Dawar Blandong / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Dawar Blandong / LAP.VOLY 2">Dawar Blandong / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Dawar Blandong / LAP.VOLY 3">Dawar Blandong / LAPANGAN.VOLY 3</option>
              <option name="tempat" value="Gedeg / LAP.VOLY 1">Gedeg / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Gedeg / LAP.VOLY 2">Gedeg / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Gedeg / LAP.VOLY 3">Gedeg / LAPANGAN.VOLY 3</option>
              <option name="tempat" value="Gondang / LAP.VOLY 1">Gondang / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Gondang / LAP.FUTSAL">Gondang / LAPANGAN.FUTSAL</option>
              <option name="tempat" value="Jatirejo / LAP.FUTSAL">Jatirejo / LAPANGAN.FUTSAL</option>
              <option name="tempat" value="Jetis / LAP.FUTSAL">Jetis / LAPANGAN.FUTSAL</option>
              <option name="tempat" value="Jetis / LAP.VOLY 1">Jetis / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Jetis / LAP.VOLY 2">Jetis / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Kemlagi / LAP.VOLY">Kemlagi / LAPANGAN.VOLY</option>
              <option name="tempat" value="Mojosari / LAP.BOLA(GOR)">Mojosari / LAPANGAN.BOLA(GOR)</option>
              <option name="tempat" value="Mojosari / LAP.VOLY 1 (GOR)">Mojosari / LAPANGAN.VOLY 1 (GOR)</option>
              <option name="tempat" value="Mojosari / LAP.VOLY 2 (GOR)">Mojosari / LAPANGAN.VOLY 2 (GOR)</option>
              <option name="tempat" value="Mojosari / LAP.VOLY 3 (GOR)">Mojosari / LAPANGAN.VOLY 3 (GOR)</option>
              <option name="tempat" value="Mojosari / LAP.BULU TANGKIS(GOR)">Mojosari / LAPANGAN.BULU TANGKIS(GOR)</option>
              <option name="tempat" value="Mojosari / LAP.FUTSAL 1 (GOR)">Mojosari / LAPANGAN.FUTSAL 1 (GOR)</option>
              <option name="tempat" value="Mojosari / LAP.FUTSAL 2 (GOR)">Mojosari / LAPANGAN.FUTSAL 2 (GOR)</option>
              <option name="tempat" value="Mojosari / LAP.FUTSAL 3 (GOR)">Mojosari / LAPANGAN.FUTSAL 3 (GOR)</option>
              <option name="tempat" value="Ngoro / LAP.VOLY 1">Ngoro / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Ngoro / LAP.VOLY 2">Ngoro / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Ngoro / LAP.BULU TANGKIS 1">Ngoro / LAPANGAN.BULU TANGKIS 1</option>
              <option name="tempat" value="Ngoro / LAP.BULU TANGKIS 2">Ngoro / LAPANGAN.BULU TANGKIS 2</option>
              <option name="tempat" value="Ngoro / LAP.FUTSAL">Ngoro / LAPANGAN.FUTSAL</option>
              <option name="tempat" value="Pacet / LAP.FUTSAL 1">Pacet / LAPANGAN.FUTSAL 1</option>
              <option name="tempat" value="Pacet / LAP.FUTSAL 2">Pacet / LAPANGAN.FUTSAL 2</option>
              <option name="tempat" value="Pungging / LAP.BULU TANGKIS">Pungging / LAPANGAN.BULU TANGKIS</option>
              <option name="tempat" value="Puri / LAP.FUTSAL 1">Puri / LAPANGAN.FUTSAL 1</option>
              <option name="tempat" value="Puri / LAP.FUTSAL 2">Puri / LAPANGAN.FUTSAL 2</option>
              <option name="tempat" value="Puri / LAP.VOLY 1">Puri / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Puri / LAP.VOLY 2">Puri / LAPANGAN.VOLY 2</option>
              <option name="tempat" value="Sooko / LAP.BULU TANGKIS 1">Sooko / LAPANGAN.BULU TANGKIS 1</option>
              <option name="tempat" value="Sooko / LAP.BULU TANGKIS 2">Sooko / LAPANGAN.BULU TANGKIS 2</option>
              <option name="tempat" value="Trawas / LAP.BULU TANGKIS 1">Trawas / LAPANGAN.BULU TANGKIS 1</option>
              <option name="tempat" value="Trawas / LAP.BULU TANGKIS 2">Trawas / LAPANGAN.BULU TANGKIS 2</option>
              <option name="tempat" value="Trowulan / LAP.VOLY 1">Trowulan / LAPANGAN.VOLY 1</option>
              <option name="tempat" value="Trowulan / LAP.VOLY 2">Trowulan / LAPANGAN.VOLY 2</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label>Tanggal Awal</label>
            <input type="date" name="tgl1" class="form-control" id="tgl1" placeholder="" required />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <label>Jam Awal</label>
            <input type="time" class="form-control" name="jam1" id="jam1" placeholder="" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label>Tanggal Akhir</label>
            <input type="date" name="tgl2" class="form-control" id="tgl2" placeholder="" required />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <label>Jam Akhir</label>
            <input type="time" class="form-control" name="jam2" id="jam2" placeholder="" required />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label>Upload Bukti Pembayaran</label>
            <input type="file" class="form-control" name="bayar" id="bayar" placeholder="pillih File" required />
            <div class="validate"></div>
          </div>

        </div>

        <div class="scrollto"><button type="submit" name="input" class="btn-success">Kirim</button></div>
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