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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile.css?v=<?php time(); ?>">


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
  <!-- End of NAVBAR -->

  <!-- MAIN CONTENTS -->
  <main>
    <section class="page-title container mt-5 mb-5">
      <p>PROFILE DESA KARANGNONGKO</p>
    </section>

    <section class="mb-4" id="header-img">
      <div class="d-flex justify-content-center align-items-center">
        <div>
          <div class="card" style="background-color: transparent;">
            <img style="border-radius: 40px;" src="<?php echo base_url(); ?>assets/images/village-profile/kantor-desa.png" class="card-img" alt="header image">
            <div class="card-img-overlay">
              <p class="card-text d-flex justify-content-center align-items-center title-text">STRUKTURAL PERANGKAT DESA</p>
              <p class="card-text d-flex justify-content-center align-items-center title-text">DESA KARANGNONGKO, KECAMATAN PONCOKUSUMO</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="structural">
      <div class="d-flex justify-content-center">
        <img class="my-5 img-fluid" src="<?php echo base_url(); ?>assets/images/village-profile/jabatan-strukturaldesa.png" alt="Jabatan Struktural Desa">
      </div>
    </section>

    <section id="village-apparatus">
      <section class="container mt-5 mb-5">
        <div class="d-flex mt-5">
          <div class="me-auto">
            <p class="page-title">PERANGKAT DESA</p>
          </div>

          <div class="ms-auto">
            <div class="form-group has-search ms-auto">
              <form action="<?php echo base_url('cariPD'); ?>" method="get">
                <span class="bi bi-search search-icon position-absolute d-block text-center fs-3 pe-auto" style="color: #9A9EA6; padding-left: 15px;"></span>
                <input class="form-control" type="text" name="keyword" id="" placeholder="CARI PERANGKAT DESA" style="max-width: 420px; height: 42px; padding-left: 50px; background-color: transparent; border-radius: 21px; border-width: 1px; border-color: #9A9EA6;">
              </form>
            </div>
          </div>
        </div>
      </section>

      <div class="container my-5 fs-5">
        <div class="row g-4">
          <?php
          foreach ($data_pd as $row) : ?>
            <div class="col-12 col-lg-6">
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/village-profile/<?= $row->gambarPD ?>" class="card-img" style="aspect-ratio: 86 / 107;" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="padding: 75px 0px 0px 25px;">
                      <p class="nama"><b><?= $row->namaPD ?></b></p>
                      <p class="jabatan"><?= $row->jabatanPD ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="community-service-program">
      <div class="container d-flex justify-content-center align-items-center mb-5">
        <h1>
          <span id="first">KKN</span>
          <span id="second"> KELOMPOK 7</span>
          <span id="third"> FILKOM UB</span>
          <span id="four"> 2022</span>
        </h1>
      </div>

      <div class="container rainbow my-5 fs-5" id="college-student">
        <div class="row g-4">
          <?php foreach ($data_kkn as $row) : ?>
            <div class="col-12 col-lg-6">
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>assets/images/village-profile/<?= $row->gambarKKN ?>" class="card-img" style="aspect-ratio: 86 / 107;" alt="<?= $row->namaKKN; ?>">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" style="padding: 75px 0px 0px 25px;">
                      <p class="nama"><b><?= $row->namaKKN ?></b></p>
                      <p class="jabatan"><?= $row->jabatanKKN ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
  <!-- End of MAIN CONTENTS -->

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <!-- Logo Pemkab Malang -->
          <div id="footer-logo" class="col-lg-4 col-md-6 d-flex justify-content-start">
            <a href="<?php echo base_url(''); ?>">
              <img src="assets/images/Logo.png" alt="Logo Kab Malang" class="img-fluid" id="">
            </a>
          </div>

          <!-- Social Media Links -->
          <div id="footer-links" class="col-lg-4 col-md-6 p-5">
            <p class="title-followus">Follow Us</p>
            <ul id="social-media">
              <li>
                <a id="social-media-icons" href="https://wwww.facebook.com/" target="_blank">
                  <i class="bi bi-facebook"></i>
                  <span class="ms-1">Facebook</span>
                </a>
              </li>
              <li class="my-3">
                <a id="social-media-icons" href="https://www.instagram.com/" target="_blank">
                  <i class="bi bi-instagram"></i>
                  <span class="ms-1">Instagram</span>
                </a>
              </li>
              <li class="mb-3">
                <a id="social-media-icons" href="https://twitter.com/" target="_blank">
                  <i class="bi bi-twitter"></i>
                  <span class="ms-1">Twitter</span>
                </a>
              </li>
              <li>
                <a id="social-media-icons" href="https://www.youtube.com/" target="_blank" style="color: #DFE5E6;">
                  <i class="bi bi-youtube"></i>
                  <span class="ms-1">YouTube</span>
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
    <div class="lines" style="border-bottom: 1px solid #1E2833;"></div>
    <div class="footer-bottom container text-center" id="copyright">
      Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.<br>
      <span>Created by KKN Kelompok 7 FILKOM UB 2022</span>
    </div>
  </footer>
  <!-- End of FOOTER -->

  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>