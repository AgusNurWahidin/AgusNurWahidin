<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

  function index()
  {
    $this->load->view('login_view');
  }
  function daftar()
  {
    $this->load->view('daftarlogin');
  }

  function auth()
  {
    $email    = $this->input->post('email', TRUE);
    $password = md5($this->input->post('password', TRUE));
    $validate = $this->login_model->validate($email, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $id  = $data['user_id'];
      $name  = $data['user_name'];
      $alamatt  = $data['alamat'];
      $email = $data['user_email'];
      $level = $data['user_level'];
      $sesdata = array(
        'userid' => $id,
        'username'  => $name,
        'alamaat'  => $alamatt,
        'email'     => $email,
        'level'     => $level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      if ($level === 'admin') {
        redirect('page');

        // access login for staff
      } elseif ($level === 'user') {
        redirect('page/staff');

        // access login for author
      } else {
        redirect('page/author');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
