<?php
defined('BASEPATH') or exit('No direct script access allowed');

class beritaController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("berita");
    $this->load->model("gambar");
    $this->load->model("umkm");
  }
  public function beritaBaru()
  {
    $data["berita_baru"] = $this->berita->getById();
  }
}
