<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Penyewaan Gedung</title>
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

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="cta">
        <a href="<?php echo site_url('login/logout'); ?>" class="scrollto">Logout</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#header" class="scrollto">Penyewaan Lapangan Olahraga</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#header">Home</a></li>
          <li><a href="<?php echo site_url('Sewa/galeri'); ?>">Galeri</a></li>
          <li><a href="<?php echo site_url('Daftar/sewa'); ?>">Booking</a></li>
          <li><a href="<?php echo site_url('Bayar/tampil1'); ?>">Informasi Booking</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat <span>Datang <?php echo $this->session->userdata('username'); ?></span></h2>
          <p class="animate__animated animate__fadeInUp">Sebelum melakukan booking ,harap cek pada menu Informasi penyewaan untuk melihat jadwal</p>
          <a href="<?php echo site_url('Daftar/sewa'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Booking</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lapangan Sepak Bola</a></h4>

              <p><b>Hari Biasa</b></p>
              <p>- Rp 20.000 / jam </p>
              <p>- Rp 200.000 / hari</p>
              <p><b>Hari Weekend</b></p>
              <p>- Rp 40.000 / jam</p>
              <p>- Rp 400.000 / hari</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-medal"></i></div>
              <h4 class="title"><a href="">Lapangan Bulu Tangkis</a></h4>
              <p><b> Hari Biasa</b></p>
              <p>- Rp 60.000 / jam </p>
              <p>- Rp 400.000 / hari</p>
              <p><b>Hari Weekend</b></p>
              <p>- Rp 70.000 / jam</p>
              <p>- Rp 600.000 / hari</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-football"></i></div>
              <h4 class="title"><a href="">Lapangan Futsal</a></h4>
              <p><b>Hari Biasa</b></p>
              <p>- Rp 60.000 / jam </p>
              <p>- Rp 400.000 / hari</p>
              <p><b>Hari Weekend</b></p>
              <p>- Rp 70.000 / jam</p>
              <p>- Rp 600.000 / hari</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-building"></i></div>
              <h4 class="title"><a href="">Gedung Olahraga</a></h4>
              <p><b>Hari Biasa</b></p>
              <p>- Rp 70.000 / jam </p>
              <p>- Rp 400.000 / hari</p>
              <p><b>Hari Weekend</b></p>
              <p>- Rp 80.000 / jam</p>
              <p>- Rp 600.000 / hari</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi dan Misi</h2>
          <!-- <p>Pelayanan Mudah dan Cepat</p> -->
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="icofont-pen"></i>
              <h4><a href="#">Visi</a></h4>
              <p>Terwujudnya Masyarakat Kabupaten Mojokerto yang mandiri,sejahtera dan bermartabat melalui penguatan dan pengembangan basis perekonomian pendidikan serta kesehatan</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Misi</a></h4>
              <p><b>Dalam rangka mewujudkan visinya maka ditetapkan misi yang di emban Disparpora Kabupaten Mojokerto:</b><br>
              <ul>
                <li>Meningkatkan kualitas keimanan dan ketaqwaan dalam kehidupan bermasyarakat berbangsa dan bernegara yang selaras dengan semangat revolusi mental untuk memeperkuat citra PNS sebagai abdi negara sekaligus pelayanan masyarakat.</li>

                <li>Mewujudkan tata kelola pemerintahan yang baik akuntable bersih dan berwibawa melalui penyelelenggaraan pemerintahan dan pelaksanaan pembangunan yang lebih professional , aspiratif , partisipatif , dan transparan.</li>

                <li>Membangun kemandiriran ekonomi yang berdimensi kerakyatan untuk meningkatkat kesejahteraan melaui penguatan struktur ekonomi yang berorientasi pada pengembangan jaringan infrastruktur, UMKM, agrobisnis,agroindustri dan pariwisata.</li>

                <li>Membuka ruang komunikasi yang efekif dan efisien untuk menumbuhkembangkan Kepercayaan sosial (social trust) dan mestimulasi kreatifitas serta inovasi masyarakat berlandaskan pada etika, budaya, dan kearifan lokal yang lebih berkarakter.</li>
                Meningkatkan kualitas sumber daya manusia dengan cara memperbesar peluang memperoleh akses pendidikan yang lebih baik untuk mengoptimalkan kemanfaatan ilmu pengetahuan dan teknologi.

                <li>Memperlebar akses dan kesempatan untuk memperoleh pelayanan kesehatan yang mudah dan murah serta mampu menjangkau semua lapisan masyarakat.</li>
                Memperkuat kondusifitas ketertiban dan keamanan serta peningkatan pemberian pelayanan prima di semua sektor bagi masyarakat.</p>

              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>


   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row">



          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>Agus</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
              Designed by <a href="https://www.unim.ac.id/">Unim</a>
            </div>
          </div>
  </footer><!-- End Footer -->

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