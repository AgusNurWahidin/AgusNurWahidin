<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
    <title>Tampil data</title>
    <style>
        .table-container {
            overflow: auto;
        }
    </style>
</head>

<body>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="">

            <div class="section-title">
                <h2>Data Sewa</h2>
            </div>
            <!-- <section class="mt-4" class="tampil-user"> -->
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <div class="table-container">
                            <!-- <a href="<?php echo site_url('Admin/tambah') ?>" class="btn btn-sm btn-primary mb-2"><i class="bi bi-person-plus"></i> Tambah</a> -->
                            <a href="<?php echo site_url('Bayar/utama1') ?>" class="btn btn-sm btn-primary mb-2"> Kembali</a>
                            <form action="<?php echo base_url('index.php/Bayar/hasil') ?>" action="GET">
                                <div class="form-group">
                                    <label for="cari">Cari Tempat : </label>
                                    <!-- <input type="date" class="form" id="cari" name="cari" placeholder="Nama Anda"> -->
                                    <select type="text" class="form" id="cari" name="cari" placeholder="" required>
                                        <option name="cari" value="kosong">- Pilih Tempat -</option>
                                        <option name="cari" value="Bangsal / LAP.VOLY 1">Bangsal / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Bangsal / LAP.VOLY 2">Bangsal / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Dawar Blandong / LAP.VOLY 1">Dawar Blandong / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Dawar Blandong / LAP.VOLY 2">Dawar Blandong / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Dawar Blandong / LAP.VOLY 3">Dawar Blandong / LAPANGAN.VOLY 3</option>
                                        <option name="cari" value="Gedeg / LAP.VOLY 1">Gedeg / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Gedeg / LAP.VOLY 2">Gedeg / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Gedeg / LAP.VOLY 3">Gedeg / LAPANGAN.VOLY 3</option>
                                        <option name="cari" value="Gondang / LAP.VOLY 1">Gondang / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Gondang / LAP.FUTSAL">Gondang / LAPANGAN.FUTSAL</option>
                                        <option name="cari" value="Jatirejo / LAP.FUTSAL">Jatirejo / LAPANGAN.FUTSAL</option>
                                        <option name="cari" value="Jetis / LAP.FUTSAL">Jetis / LAPANGAN.FUTSAL</option>
                                        <option name="cari" value="Jetis / LAP.VOLY 1">Jetis / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Jetis / LAP.VOLY 2">Jetis / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Kemlagi / LAP.VOLY">Kemlagi / LAPANGAN.VOLY</option>
                                        <option name="cari" value="Mojosari / LAP.BOLA(GOR)">Mojosari / LAPANGAN.BOLA(GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.VOLY 1 (GOR)">Mojosari / LAPANGAN.VOLY 1 (GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.VOLY 2 (GOR)">Mojosari / LAPANGAN.VOLY 2 (GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.VOLY 3 (GOR)">Mojosari / LAPANGAN.VOLY 3 (GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.BULU TANGKIS(GOR)">Mojosari / LAPANGAN.BULU TANGKIS(GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.FUTSAL 1 (GOR)">Mojosari / LAPANGAN.FUTSAL 1 (GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.FUTSAL 2 (GOR)">Mojosari / LAPANGAN.FUTSAL 2 (GOR)</option>
                                        <option name="cari" value="Mojosari / LAP.FUTSAL 3 (GOR)">Mojosari / LAPANGAN.FUTSAL 3 (GOR)</option>
                                        <option name="cari" value="Ngoro / LAP.VOLY 1">Ngoro / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Ngoro / LAP.VOLY 2">Ngoro / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Ngoro / LAP.BULU TANGKIS 1">Ngoro / LAPANGAN.BULU TANGKIS 1</option>
                                        <option name="cari" value="Ngoro / LAP.BULU TANGKIS 2">Ngoro / LAPANGAN.BULU TANGKIS 2</option>
                                        <option name="cari" value="Ngoro / LAP.FUTSAL">Ngoro / LAPANGAN.FUTSAL</option>
                                        <option name="cari" value="Pacet / LAP.FUTSAL 1">Pacet / LAPANGAN.FUTSAL 1</option>
                                        <option name="cari" value="Pacet / LAP.FUTSAL 2">Pacet / LAPANGAN.FUTSAL 2</option>
                                        <option name="cari" value="Pungging / LAP.BULU TANGKIS">Pungging / LAPANGAN.BULU TANGKIS</option>
                                        <option name="cari" value="Puri / LAP.FUTSAL 1">Puri / LAPANGAN.FUTSAL 1</option>
                                        <option name="cari" value="Puri / LAP.FUTSAL 2">Puri / LAPANGAN.FUTSAL 2</option>
                                        <option name="cari" value="Puri / LAP.VOLY 1">Puri / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Puri / LAP.VOLY 2">Puri / LAPANGAN.VOLY 2</option>
                                        <option name="cari" value="Sooko / LAP.BULU TANGKIS 1">Sooko / LAPANGAN.BULU TANGKIS 1</option>
                                        <option name="cari" value="Sooko / LAP.BULU TANGKIS 2">Sooko / LAPANGAN.BULU TANGKIS 2</option>
                                        <option name="cari" value="Trawas / LAP.BULU TANGKIS 1">Trawas / LAPANGAN.BULU TANGKIS 1</option>
                                        <option name="cari" value="Trawas / LAP.BULU TANGKIS 2">Trawas / LAPANGAN.BULU TANGKIS 2</option>
                                        <option name="cari" value="Trowulan / LAP.VOLY 1">Trowulan / LAPANGAN.VOLY 1</option>
                                        <option name="cari" value="Trowulan / LAP.VOLY 2">Trowulan / LAPANGAN.VOLY 2</option>
                                    </select>
                                    <input class="btn btn-sm btn-success mb-2" type="submit" value="Tampilkan">
                                </div>

                            </form>
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <!-- <th>Id User</th> -->
                                        <th>Nama</th>
                                        <th>Tempat</th>
                                        <th>Tanggal awal</th>
                                        <th>Jam awal</th>
                                        <th>Tanggal akhir</th>
                                        <th>Jam akhir</th>
                                        <!-- <th>Bukti Pembayaran</th> -->
                                        <!-- <th>Pilih Aksi</th> -->
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($user as $u) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <!-- <td><?php echo $u->id_user ?></td> -->
                                        <td><?php echo $u->nama ?></td>
                                        <td><?php echo $u->tempat ?></td>
                                        <td><?php echo $u->tgl1 ?></td>
                                        <td><?php echo $u->jam1 ?></td>
                                        <td><?php echo $u->tgl2 ?></td>
                                        <td><?php echo $u->jam2 ?></td>

                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </section> -->
        </div>
    </section><!-- End Contact Section -->
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