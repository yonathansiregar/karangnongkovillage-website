<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("berita");
    $this->load->model("gambar");
    $this->load->model("umkm");
  }
  public function masuk()
  {
    session_start();
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if ($username == 'admin' && $password == 'admin') {
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Username dan password anda salah!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
      redirect("beranda");
    }
  }
}
