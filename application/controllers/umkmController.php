<?php
defined('BASEPATH') or exit('No direct script access allowed');

class umkmController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("berita");
    $this->load->model("gambar");
    $this->load->model("umkm");
  }
  public function ambilUmkm()
  {
    $data["data_umkm"] = $this->berita->getAll();
  }
}
