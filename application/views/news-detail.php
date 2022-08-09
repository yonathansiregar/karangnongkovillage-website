<?php
function tgl_indo($tanggal)
{
  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META TAGS -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/Logo.png" type="images/png">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/detailBerita.css">

  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg position-absolute" style="z-index: 1; width: 100%;">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="<?php echo base_url(); ?>assets/images/Logo.png" alt="Logo Pemkab Malang" class="brand-img">
        <span class="navbar-title">PEMERINTAH DESA KARANGNONGKO</span>
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-menu me-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- Menu Beranda -->
          <li class="nav-item">
            <a class="nav-link fs-5" href="<?php echo base_url(''); ?>">Beranda</a>
          </li>

          <!-- Menu Berita -->
          <li class="nav-item mx-md-4">
            <a class="nav-link fs-5" href="<?php echo base_url('news'); ?>">Berita</a>
          </li>

          <!-- Menu UMKM -->
          <li class="nav-item me-md-4">
            <a aria-current="page" href="<?php echo base_url('umkm'); ?>" class="nav-link fs-5">UMKM</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item">
            <a href="<?php echo base_url('profile'); ?>" class="nav-link fs-5">Profil</a>
          </li>
        </ul>

        <!-- Search icon -->
        <form action="<?php echo base_url('cariSemua'); ?>" method="get" class="d-flex mx-md-4" id="search">
          <input class="form-control" type="text" name="keyword" id="" placeholder="CARI DISINI" class="p-2" required>
          <button type="submit" class="btn btn-search btn-light ms-1">
            <i class="bi bi-search text-black"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- MAIN CONTENTS -->
  <div id="main-contents" class="main">
    <!-- Background Article -->
    <div class="background-picture" style="padding-top: 10vh;">
      <img src="<?= base_url(); ?>assets/images/news/<?= $detail_berita->gambarBerita; ?>" alt="" class="w-100 position-absolute">
    </div>
    <div class="container">
      <div class="article position-relative">
        <p class="fs-1 news-title" style="text-align:justify ;"><?= $detail_berita->judul; ?></h1>
        <p><?= tgl_indo($detail_berita->tanggal); ?></h5>
        <p style="text-align:justify ;"><?= $detail_berita->deskripsi; ?></p>
      </div>
    </div>

  </div>

  <!-- End of MAIN CONTENTS -->

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <!-- Logo Pemkab Malang -->
          <div id="footer-logo" class="col-lg-4 col-md-6 d-flex justify-content-start">
            <a href="">
              <img src="<?= base_url(); ?>assets/images/Logo.png" alt="Logo Kab Malang" class="img-fluid" id="">
            </a>
          </div>

          <!-- Social Media Links -->
          <div id="footer-links" class="col-lg-4 col-md-6 p-5">
            <p class="title-followus">Follow Us</p>
            <ul id="social-media">
              <li>
                <a id="social-media-icons" href="https://wwww.facebook.com/" target="_blank">
                  <i class="bi bi-facebook"></i>
                  <span>Facebook</span>
                </a>
              </li>
              <li>
                <a id="social-media-icons" href="https://www.instagram.com/" target="_blank">
                  <i class="bi bi-instagram"></i>
                  <span>Instagram</span>
                </a>
              </li>
              <li>
                <a id="social-media-icons" href="https://twitter.com/" target="_blank">
                  <i class="bi bi-twitter"></i>
                  <span>Twitter</span>
                </a>
              </li>
              <li>
                <a id="social-media-icons" href="https://www.youtube.com/" target="_blank" style="color: #DFE5E6;">
                  <i class="bi bi-youtube"></i>
                  <span>YouTube</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- End of Social Media Links -->

          <!-- Contact Us -->
          <div id="footer-contact" class="col-lg-4 col-md-6 p-5">
            <p class="title-contacts">Hubungi Kami</p>
            <div class="contacts">
              <div class="nomor-telp">
                <p>+62 822-4238-6861</p>
              </div>
              <div class="alamat">
                <p>Jl. Raya Nongkosewu, Karangnongko</p>
              </div>
              <div class="daerah">
                <p>Poncokusumo, Malang</p>
              </div>
              <div class="email">
                <p>support@karangnongko.id</p>
              </div>
            </div>
          </div>
          <!-- End of Contact Us -->
        </div>
      </div>
    </div>
    <div class="lines"></div>
    <div class="footer-bottom container text-center" id="copyright">
      Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.<br>
      <span>Created by KKN Kelompok 7 FILKOM UB 2022</span>
    </div>
  </footer>
  <!-- End of FOOTER -->

  <!-- JS LINKS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- End of JS LINKS -->
</body>

</html>