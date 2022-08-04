<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model("berita");
    $this->load->model("perangkatDesa");
    $this->load->model("umkm");
  }

  public function index()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';

    $data["data_umkm"] = $this->umkm->getAll();
    $data["data_berita"] = $this->berita->getAll();

    $this->load->view('homepage', $data);
  }

  public function news()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Berita";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $data["data_berita"] = $this->berita->getAll();
    $this->load->view('news', $data);
  }

  public function newsDetails()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Detail Berita";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('news-details', $data);
  }

  public function umkm()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - UMKM";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $data['icon'] = "assets/images/Logo.png";
    // $data['data_umkm'] = $this->umkm->getAll();
    $this->load->view('umkm', $data);
  }

  public function umkmDetails()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Detail UMKM";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('umkm-details', $data);
  }

  public function profile()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Profil";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $data["data_PD"] = $this->perangkatDesa->getAll();
    $this->load->view('profile', $data);
  }

  public function login()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Profil";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('login', $data);
  }
}
