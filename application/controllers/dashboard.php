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
    $index["title"] = "Website Desa Karangnongko Poncokusumo";
    $index['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $index["data_umkm"] = $this->umkm->getAll();
    $index["data_berita"] = $this->berita->getAll();
    $this->load->view('homepage', $index);
  }

  public function news()
  {
    $news["title"] = "Website Desa Karangnongko Poncokusumo - Berita";
    $news['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $news['icon'] = "assets/images/Logo.png";
    $this->load->view('news', $news);
  }

  public function newsDetails()
  {
    $newsDetails["title"] = "Website Desa Karangnongko Poncokusumo - Detail Berita";
    $newsDetails['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $newsDetails['icon'] = "assets/images/Logo.png";
    $this->load->view('news-details', $newsDetails);
  }

  public function umkm()
  {
    $umkm["title"] = "Website Desa Karangnongko Poncokusumo - UMKM";
    $umkm['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $umkm['icon'] = "assets/images/Logo.png";
    // $data['data_umkm'] = $this->umkm->getAll();
    $this->load->view('umkm', $umkm);
  }

  public function umkmDetails()
  {
    $umkmDetails["title"] = "Website Desa Karangnongko Poncokusumo - Detail UMKM";
    $umkmDetails['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $umkmDetails['icon'] = "assets/images/Logo.png";
    $this->load->view('umkm-details', $umkmDetails);
  }

  public function profile()
  {
    $profile["title"] = "Website Desa Karangnongko Poncokusumo - Profil";
    $profile['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $profile['icon'] = "assets/images/Logo.png";
    $profile['data_pd'] = $this->perangkatDesa->getAll();
    $this->load->view('profile', $profile);
  }

  public function login()
  {
    $login["title"] = "Website Desa Karangnongko Poncokusumo - Login";
    $login['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('login', $login);
  }

  public function login_process()
  {
    $username_login = "u1584330_admin";
    $password_login = "bucinlivematter";
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $username_login && $password == $password_login) {
        session_start();
        $_SESSION['username'] = $username;
        redirect('dashboard/modification');
    } 
    else {
      redirect('dashboard/login');
   }
  }

  public function modification()
  {
    $modification["title"] = "Website Desa Karangnongko Poncokusumo - Modification";
    $modification['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('modification', $modification);
  }

}
