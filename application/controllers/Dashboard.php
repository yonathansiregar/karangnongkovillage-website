<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model("berita");
    $this->load->model("perangkatDesa");
    $this->load->model("kkn");
    $this->load->model("umkm");
    $this->load->model("search");
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
    $data['icon'] = "assets/images/Logo.png";
    $this->load->view('news', $data);
  }

  public function newsDetails($idBerita)
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Detail Berita";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $data['icon'] = "assets/images/Logo.png";
    $data['detail_berita'] = $this->berita->getById($idBerita);
    $this->load->view('news-detail', $data);
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
    $data['icon'] = "assets/images/Logo.png";
    $this->load->view('umkm-details', $data);
  }

  public function profile()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Profil";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $data['icon'] = "assets/images/Logo.png";
    $data['data_pd'] = $this->perangkatDesa->getAll();
    $data['data_kkn'] = $this->kkn->getAll();
    $this->load->view('profile', $data);
  }

  public function login()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Login";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('login', $data);
  }

  public function login_process()
  {
    $username_login = "admin@karangnongko";
    $password_login = "kelompok7kkn2020";
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $username_login && $password == $password_login) {
      session_start();
      $_SESSION['username'] = $username;
      redirect('modification');
    } else {
      redirect('login');
    }
  }

  public function logout_process()
  {
    session_start();
    unset($_SESSION["username"]);
    session_destroy();
    redirect('login');
  }

  public function modification()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Modification";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $this->load->view('modification', $data);
  }

  public function daftarBerita()
  {
    $data["title"] = "DAFTAR BERITA";
    $data['semua_berita'] = $this->berita->getAll();
    $this->load->view('daftarBerita', $data);
  }

  public function tambahBerita()
  {
    $this->load->helper('form');
    $data["title"] = "BUAT BERITA BARU";
    $this->load->view('tambahBerita', $data);
  }

  public function editBerita($idBerita)
  {
    $this->load->helper('form');
    $data["title"] = "EDIT BERITA";
    $data['pilih_berita'] = $this->berita->getById($idBerita);
    $this->load->view('editBerita', $data);
  }

  public function hapusBerita($idBerita)
  {
    $data = $this->berita->getById($idBerita);
    $filename = "assets/images/news/" . $data->gambarBerita;
    if (!empty($data->gambarBerita)) {
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
      $this->berita->hapus($idBerita);
    }
    redirect("daftarBerita");
  }

  public function simpanBerita()
  {
    $upload_path = 'assets/images/news/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $this->berita->simpan();
    redirect('daftarBerita');
  }

  public function simpanEditBerita($idBerita)
  {
    $upload_path = 'assets/images/news/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $lama = $this->berita->getById($idBerita);
    $this->berita->edit($idBerita);
    $baru = $this->berita->getById($idBerita);
    if ($lama->gambarBerita != $baru->gambarBerita && $lama->gambarBerita != null && $lama->gambarBerita != '') {
      $filename = "assets/images/news/" . $lama->gambarBerita;
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
    }
    redirect('daftarBerita');
  }

  public function daftarUmkm()
  {
    $data["title"] = "DAFTAR UMKM";
    $data['semua_umkm'] = $this->umkm->getAll();
    $this->load->view('daftarUmkm', $data);
  }

  public function tambahUmkm()
  {
    $this->load->helper('form');
    $data["title"] = "BUAT UMKM BARU";
    $this->load->view('tambahUmkm', $data);
  }

  public function editUmkm($idUmkm)
  {
    $this->load->helper('form');
    $data["title"] = "EDIT UMKM";
    $data['pilih_umkm'] = $this->umkm->getById($idUmkm);
    $this->load->view('editUmkm', $data);
  }

  public function hapusUmkm($idUmkm)
  {
    $data = $this->umkm->getById($idUmkm);
    $filename = "assets/images/umkm-products/" . $data->gambarUmkm;
    if (!empty($data->gambarUmkm)) {
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
      $this->umkm->hapus($idUmkm);
    }
    redirect("daftarUmkm");
  }

  public function simpanUmkm()
  {
    $upload_path = 'assets/images/umkm-products/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $this->umkm->simpan();
    redirect('daftarUmkm');
  }

  public function simpanEditUmkm($idUmkm)
  {
    $upload_path = 'assets/images/umkm-products/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $lama = $this->umkm->getById($idUmkm);
    $this->umkm->edit($idUmkm);
    $baru = $this->umkm->getById($idUmkm);
    if ($lama->gambarUmkm != $baru->gambarUmkm && $lama->gambarUmkm != null && $lama->gambarUmkm != '') {
      $filename = "assets/images/umkm-products/" . $lama->gambarUmkm;
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
    }
    redirect('daftarUmkm');
  }

  public function daftarPD()
  {
    $data["title"] = "DAFTAR PERANGKAT DESA";
    $data['semua_PD'] = $this->perangkatDesa->getAllDesc();
    $this->load->view('daftarPD', $data);
  }

  public function tambahPD()
  {
    $this->load->helper('form');
    $data["title"] = "BUAT PERANGKAT DESA BARU";
    $this->load->view('tambahPD', $data);
  }

  public function editPD($idPD)
  {
    $this->load->helper('form');
    $data["title"] = "EDIT PERANGKAT DESA";
    $data['pilih_PD'] = $this->perangkatDesa->getById($idPD);
    $this->load->view('editPD', $data);
  }

  public function hapusPD($idPD)
  {
    $data = $this->perangkatDesa->getById($idPD);
    $filename = "assets/images/village-profile/" . $data->gambarPD;
    if (!empty($data->gambarPD)) {
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
      $this->perangkatDesa->hapus($idPD);
    }
    redirect("daftarPD");
  }

  public function simpanPD()
  {
    $upload_path = 'assets/images/village-profile/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $this->perangkatDesa->simpan();
    redirect('daftarPD');
  }

  public function simpanEditPD($idPD)
  {
    $upload_path = 'assets/images/village-profile/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $lama = $this->perangkatDesa->getById($idPD);
    $this->perangkatDesa->edit($idPD);
    $baru = $this->perangkatDesa->getById($idPD);
    if ($lama->gambarPD != $baru->gambarPD && $lama->gambarPD != null && $lama->gambarPD != '') {
      $filename = "assets/images/village-profile/" . $lama->gambarPD;
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
    }
    redirect('daftarPD');
  }

  public function daftarKKN()
  {
    $data["title"] = "DAFTAR MAHASISWA KKN";
    $data['semua_KKN'] = $this->kkn->getAllDesc();
    $this->load->view('daftarKKN', $data);
  }

  public function tambahKKN()
  {
    $this->load->helper('form');
    $data["title"] = "BUAT MAHASISWA KKN BARU";
    $this->load->view('tambahKKN', $data);
  }

  public function editKKN($idKKN)
  {
    $this->load->helper('form');
    $data["title"] = "EDIT MAHASISWA KKN";
    $data['pilih_KKN'] = $this->kkn->getById($idKKN);
    $this->load->view('editKKN', $data);
  }

  public function hapusKKN($idKKN)
  {
    $data = $this->kkn->getById($idKKN);
    $filename = "assets/images/village-profile/" . $data->gambarKKN;
    if (!empty($data->gambarKKN)) {
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
      $this->kkn->hapus($idKKN);
    }
    redirect("modeRahasia");
  }

  public function simpanKKN()
  {
    $upload_path = 'assets/images/village-profile/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $this->kkn->simpan();
    redirect('modeRahasia');
  }

  public function simpanEditKKN($idKKN)
  {
    $upload_path = 'assets/images/village-profile/';
    $filename = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $upload_path . $filename);
    $lama = $this->kkn->getById($idKKN);
    $this->kkn->edit($idKKN);
    $baru = $this->kkn->getById($idKKN);
    if ($lama->gambarKKN != $baru->gambarKKN && $lama->gambarKKN != null && $lama->gambarKKN != '') {
      $filename = "assets/images/village-profile/" . $lama->gambarKKN;
      $open = fopen($filename, "w");
      fclose($open);
      chmod($filename, 0777);
      unlink($filename);
    }
    redirect('modeRahasia');
  }

  public function cariSemua()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Hasil Pencarian";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $keyword = $this->input->get('keyword');
    $data['cari_berita'] = $this->search->searchBerita($keyword);
    $data['cari_umkm'] = $this->search->searchUmkm($keyword);
    $data['cari_PD'] = $this->search->searchPD($keyword);
    $this->load->view('cariSemua', $data);
  }

  public function cariBerita()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Hasil Pencarian Berita";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $keyword = $this->input->get('keyword');
    $data['cari_berita'] = $this->search->searchBerita($keyword);
    $this->load->view('cariBerita', $data);
  }

  public function cariUmkm()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Hasil Pencarian UMKM";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $keyword = $this->input->get('keyword');
    $data['cari_umkm'] = $this->search->searchUmkm($keyword);
    $this->load->view('cariUmkm', $data);
  }

  public function cariPD()
  {
    $data["title"] = "Website Desa Karangnongko Poncokusumo - Hasil Pencarian Perangkat Desa";
    $data['navbarTitle'] = 'PEMERINTAH DESA KARANGNONGKO';
    $keyword = $this->input->get('keyword');
    $data['cari_PD'] = $this->search->searchPD($keyword);
    $this->load->view('cariPD', $data);
  }
}
