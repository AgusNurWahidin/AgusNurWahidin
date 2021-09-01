<?php


class Sewa extends CI_Controller
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
    function galeri()
    {
        $this->load->view('galeri');
    }

    function tambah()
    {
        $this->load->view('sewa');
    }
    function hasil()
    {
        $this->load->view('Login_view');
    }
    // function tampil()
    // {
    //     $this->load->view('list_user');
    // }
    public function tampil2()
    {

        $data["user"] = $this->M_sewa->tampil_data()->result();
        $this->load->view("list_penyewa", $data);
    }
    // function tambah_aksi()
    // {

    //     $nik = $this->input->post('nik');
    //     $user_name = $this->input->post('user_name');
    //     $alamat = $this->input->post('alamat');
    //     $user_email = $this->input->post('user_email');
    //     $wa = $this->input->post('wa');
    //     $user_password = md5($this->input->post('user_password'));
    //     $user_level = $this->input->post('user_level');

    //     $data = array(
    //         'nik' => $nik,
    //         'user_name' => $user_name,
    //         'alamat' => $alamat,
    //         'user_email' => $user_email,
    //         'wa' => $wa,
    //         'user_password' => $user_password,
    //         'user_level' => $user_level,

    //     );
    //     $this->M_sewa->input_data($data, 'tbl_users');
    //     $this->load->view('Login_view', $data);
    // }
    function hapus($id)
    {
        $where = array('user_id' => $id);
        $this->M_sewa->hapus_data($where, 'tbl_users');
        redirect('Sewa/tampil2');
    }
    function edit($id)
    {
        $where = array('user_id' => $id);
        $data['user'] = $this->M_sewa->edit_data($where, 'tbl_users')->result();
        $this->load->view('kirimpesanuser', $data);
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
    function user()
    {
        $this->load->view('kirimpesanuser');
    }

}
