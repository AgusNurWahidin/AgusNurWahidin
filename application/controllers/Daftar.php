<?php


class Daftar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_sewa');
        $this->load->helper('url');
    }
    function utama()
    {
        $this->load->view('sewa');
    }
    function index()
    {
        $data['tbl_users'] = $this->M_user->tampil_data()->result();
        $this->load->view('v_tampiluser', $data);
    }

    function tambah()
    {
        $this->load->view('sewa');
    }
    function hasil()
    {
        $this->load->view('Login_view');
    }

    function tambah_aksi()
    {

        $nik = $this->input->post('nik');
        $user_name = $this->input->post('user_name');
        $alamat = $this->input->post('alamat');
        $user_email = $this->input->post('user_email');
        $wa = $this->input->post('wa');
        $user_password = md5($this->input->post('user_password'));
        $user_level = $this->input->post('user_level');
        $ktp = $_FILES['ktp'];
        if ($ktp = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpeg|jpg|png|gif';
            $config['max_size'] = '6144';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('ktp')) {
                echo "Upload Gagal";
                die();
            } else {
                $ktp = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nik' => $nik,
            'user_name' => $user_name,
            'alamat' => $alamat,
            'user_email' => $user_email,
            'wa' => $wa,
            'user_password' => $user_password,
            'user_level' => $user_level,
            'ktp' => $ktp

        );
        $this->M_sewa->input_data($data, 'tbl_users');
        $this->load->view('Login_view', $data);
    }
    function hapus($id)
    {
        $where = array('user_id' => $id);
        $this->M_user->hapus_data($where, 'tbl_users');
        redirect('User/index');
    }
    function edit($id)
    {
        $where = array('user_id' => $id);
        $data['user'] = $this->M_user->edit_data($where, 'tbl_users')->result();
        $this->load->view('v_edituser', $data);
    }
    function update()
    {
        $user_id = $this->input->post('user_id');
        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');
        $user_level = $this->input->post('user_level');

        $data = array(
            'user_name' => $user_name,
            'user_email' => $user_email,
            'user_password' => $user_password,
            'user_level' => $user_level,

        );

        $where = array(
            'user_id' => $user_id
        );

        $this->M_user->update_data($where, $data, 'tbl_users');
        redirect('User/index');
    }
    function sewa()
    {
        $this->load->view('sewa');
    }
}
