<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/Logo.png" type="images/png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?v=<?php time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css?v=<?php time(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css?v=<?php time(); ?>">

  <!-- Homepage CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css?v=<?php time(); ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css?v=<?php time(); ?>">


  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
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
            <a class="nav-link fs-5" href="<?php echo base_url('dashboard/news'); ?>">Berita</a>
          </li>

          <!-- Menu UMKM -->
          <li class="nav-item me-md-4">
            <a aria-current="page" href="<?php echo base_url('dashboard/umkm'); ?>" class="nav-link fs-5">UMKM</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard/profile'); ?>" class="nav-link fs-5">Profil</a>
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
  <!-- End of NAVBAR -->

  <!-- MAIN CONTENTS -->
  <div id="main-contents">
    <!-- Header -->
    <section id="header">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card">
              <img src="assets/images/homepage/KantorDesa.jpeg" class="card-img d-block w-100" alt="Kantor Desa Karangnongko">
              <div class="card-img-overlay">
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">DESA KARANGNONGKO</p>
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <img src="assets/images/homepage/KantorDesa.jpeg" class="card-img d-block w-100" alt="Kantor Desa Karangnongko">
              <div class="card-img-overlay">
                <p class="card-text d-flex justify-content-center align-items-center">DESA KARANGNONGKO</p>
                <p class="card-text d-flex justify-content-center align-items-center">Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <img src="assets/images/homepage/KantorDesa.jpeg" class="card-img d-block w-100" alt="Kantor Desa Karangnongko">
              <div class="card-img-overlay">
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">DESA KARANGNONGKO</p>
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="page-title container mt-5">
      <p>LOGIN</p>
    </section>
    <section class="my-5 products-list d-flex justify-content-center align-items-center">
      <div class="card horizontal-card mb-3 p-5" style="max-width: 1100px;">
        <form action="<?php echo base_url('dashboard/login_process'); ?>" method="post">
          <div class="row g-3 align-items-center" style="margin-bottom:40px;">
            <div class="col-3">
              <label for="username" class="form-label">USERNAME</label>
            </div>
            <div class="col-3">
              <input type="text" class="form-field" name="username" id="username" placeholder="username" required>
            </div>
          </div>
          <div class="row g-3 align-items-center" style="margin-bottom:60px;">
            <div class="col-3">
              <label for="password" class="form-label">PASSWORD</label>
            </div>
            <div class="col-3">
              <input type="password" class="form-field" name="password" id="password" placeholder="password" required>
            </div>
          </div>
          <div style="margin-bottom:100px;">
            <input type="submit" value="LOGIN" class="form-btn">
          </div>
        </form>
      </div>
    </section>
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

  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Homepage JS -->
  <script src="<?php echo base_url(); ?>assets/js/homepage.js"></script>
</body>

</html>