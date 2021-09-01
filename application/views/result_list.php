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
                            <a href="<?php echo site_url('Bayar/tampil') ?>" class="btn btn-sm btn-primary mb-2"> Kembali</a>
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Id User</th>
                                        <th>Nama</th>
                                        <th>Tempat</th>
                                        <th>Tanggal awal</th>
                                        <th>Jam awal</th>
                                        <th>Tanggal akhir</th>
                                        <th>Jam akhir</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Pilih Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                if (count($cari) > 0) {
                                    foreach ($cari as $u) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->id_user ?></td>
                                        <td><?php echo $u->nama ?></td>
                                        <td><?php echo $u->tempat ?></td>
                                        <td><?php echo $u->tgl1 ?></td>
                                        <td><?php echo $u->jam1 ?></td>
                                        <td><?php echo $u->tgl2 ?></td>
                                        <td><?php echo $u->jam2 ?></td>
                                        <td><img src="<?php echo base_url(); ?>upload/<?php echo $u->bayar; ?>" width="300"></td>
                                        <td>
                                            <!-- <?php echo anchor('admin/edit/' . $u->id_sewa, '<span class="icon"><i class="bi bi-pencil-square"></i></span>'); ?> | -->
                                            <?php echo anchor('Bayar/hapus/' . $u->id_sewa, '<i class="bi bi-trash"> Hapus</i>'); ?>
                                            <!-- <?php echo anchor('Bayar/edit/' . $u->id_sewa, '<i class="bi bi-chat"></i>'); ?> -->
                                        </td>
                                    </tr>
                                    <?php }
                                } else {
                                    echo "Data tidak ditemukan";
                                } ?>
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