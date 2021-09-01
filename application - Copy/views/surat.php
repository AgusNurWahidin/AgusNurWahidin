<!DOCTYPE html>
<html>

<head>
    <title>surat permohonan</title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>

    <center>
        <table>
            <tr>
                <td><img src="<?php echo base_url('assets/img/lg.png') ?>" width="90"></td>
                <td>
                    <center>
                        <font size="4">PEMERINTAH KABUPATEN MOJOKERTO</font><br>
                        <font size="5"><b>DINAS PEMUDA, OLAHRAGA, KEBUDAYAAN DAN PARIWISATA</b></font><br>
                        <font size="2">Jl. Jayanegara No.4, Gatul, Banjaragung, Kec. Puri, Mojokerto, Jawa Timur 61363</font><br>
                        <font size="2"><i>Kabupaten Mojokerto - Jawa Timur</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <table width="500">
                <tr>
                    <td class="text2">Mojokerto, <?php $tgl = date('d-m-Y');
                                                    echo $tgl;  ?></td>
                </tr>
            </table>
        </table>
        <table>
            <!-- <tr class="text2">
                <td>Nomer</td>
                <td width="572">: <?php echo $this->session->userdata('userid'); ?></td>
            </tr> -->
            <tr>
                <td>Perihal</td>
                <td width="564">: Surat Permohonan</td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Kepada Yth.<br>Kepala Disparpora Kabupaten Mojokerto<br>Di tempat</font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Assalamu'alaikum wr.wb<br>Sehubungan dengan kelancaran Kegiatan kami di <b><?php echo $tempat; ?></b>
                        <br>Maka kami selaku panitia kegiatan tersebut bermaksud untuk menyewa tempat tersebut<br>, yang
                        dilaksanakan pada :
                    </font>
                </td>
            </tr>
        </table>
        <br>
        </table>
        <table>
            <tr class="text2">
                <td width="130">Tanggal Awal / Jam Awal</td>
                <td width="541">: <?php echo $tgl1; ?> / <?php echo $jam1; ?></td>
            </tr>
            <tr class="text2">
                <td width="130">Tanggal Akhir / Jam Akhir</td>
                <td width="541">: <?php echo $tgl2; ?> / <?php echo $jam2; ?></td>
            </tr>
            <tr class="text2">
                <td width="130">Nama Penyewa</td>
                <td width="541">: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Alamat Penyewa</td>
                <td width="525">: <?php echo $this->session->userdata('alamaat'); ?></td>
            </tr>
        </table>

        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Demikian surat ini kami buat, Kiranya mendapatkan izin, atas perhatian dan kerjasamanya kami
                        ucapkan terima kasih.<br><br>Wassalamu'alaikum wr.wb.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="500">
            <tr>
                <td width="350"><br><br><br><br></td>
                <td class="text" align="center">Mojokerto, <?php $tgl = date('d-m-Y');
                                                            echo $tgl;  ?></td><br><br><br><br>

            </tr>
            <tr>
                <td width="350"><br><br><br><br></td>

                <td class="text" align="center"><?php echo $nama; ?></td>
            </tr>
        </table>
    </center>

</body>

</html>