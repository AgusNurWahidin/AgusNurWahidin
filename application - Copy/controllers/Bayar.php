<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bayar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_bayar");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->M_bayar->getAll();
        $this->load->view("sewa");
    }
    public function utama()
    {
        $this->load->view("admin");
    }
    public function utama1()
    {
        $this->load->view("utama");
    }
    public function surat()
    {
        $this->load->view("surat");
    }
    public function tampil()
    {
        $data["user"] = $this->M_bayar->tampil_data()->result();
        $this->load->view("list", $data);
    }
    public function tampil1()
    {
        $this->db->order_by('tgl1', 'DESC');
        $data["user"] = $this->M_bayar->tampil_data()->result();
        $this->load->view("list_user", $data);
    }
    function hapus($id)
    {
        $where = array('id_sewa' => $id);
        $this->M_bayar->hapus_data($where, 'tb_sewa');
        redirect('Bayar/tampil');
    }

    //  function pertemuan()
    // {
    //     $data['perte'] = $this->M_pertemuan->tampil_data()->result();
    //     $this->load->view('v_tampilpertemuan', $data);
    // }

    function tambah_aksi()
    {

        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tgl1 = $this->input->post('tgl1');
        $jam1 = $this->input->post('jam1');
        $tgl2 = $this->input->post('tgl2');
        $jam2 = $this->input->post('jam2');
        $bayar = $_FILES['bayar'];
        if ($bayar = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['max_size'] = '6144';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bayar')) {
                echo "Upload Gagal";
                die();
            } else {
                $bayar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_user' => $id_user,
            'nama' => $nama,
            'tempat' => $tempat,
            'tgl1' => $tgl1,
            'jam1' => $jam1,
            'tgl2' => $tgl2,
            'jam2' => $jam2,
            'bayar' => $bayar

        );
        $this->M_bayar->input_data($data, 'tb_sewa');
        $this->load->library('pdfgenerator');

        // title dari pdf
        $data = array(
            'id_user' => $id_user,
            'nama' => $nama,
            'tempat' => $tempat,
            'tgl1' => $tgl1,
            'jam1' => $jam1,
            'tgl2' => $tgl2,
            'jam2' => $jam2,
            'bayar' => $bayar
        );

        // filename dari pdf ketika didownload
        $file_pdf = 'Surat Izin';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";


        $html = $this->load->view('surat', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        // $this->load->view('surat', $data);
    }
    function edit($id)
    {
        $where = array('id_sewa' => $id);
        $data['user'] = $this->M_bayar->edit_data($where, 'tb_sewa')->result();
        $this->load->view('surat', $data);
    }
    public function hasil()
    {
        $data2['cari'] = $this->M_bayar->cari();
        $this->load->view('result_list_user', $data2);
    }
    public function hasil1()
    {
        $data2['cari'] = $this->M_bayar->cari();
        $this->load->view('result_list', $data2);
    }
}
