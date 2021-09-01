<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='admin'){
          $this->load->view('admin');
      }else{
          echo "Access Denied";
      }

  }

  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='user'){
      $this->load->view('utama');
    }else{
        echo "Access Denied";
    }
  }

  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='user'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
  

}
