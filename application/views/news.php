<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META TAGS -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/berita.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">

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
        <form action="" method="" class="d-flex mx-md-4" id="search">
          <input type="text" name="search" id="" placeholder="CARI BERITA.." class="p-2">
          <button type="submit" class="btn btn-search btn-light ms-1">
            <i class="bi bi-search text-black"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- MAIN CONTENTS -->
  <div id="main-content">
    <section class="page-title container mt-5">
      <p>BERITA DESA KARANGNONGKO</p>
    </section>

    <!-- NEWS LIST -->
    <?php 
    $alternative = $this->berita->count();
    if ($alternative % 3 != 0) {
      
    }
    foreach ($alternative as $row) : ?>
    <!-- Masukan Berita Disini -->
    <?php endforeach; ?>
    <section class="my-5 products-list d-flex justify-content-center align-items-center">
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>
    </section>
    
    <section class="my-5 products-list d-flex justify-content-center align-items-center">
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5 products-list d-flex justify-content-center align-items-center">
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="mx-5">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo base_url(''); ?>assets/images/homepage/sdn01karangnongko.png" height="225" class="card-img-top p-3" alt="Card Image">
          <div class="card-body">
            <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
            <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
            <button type="button" class="btn">
              <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
            </button>
          </div>
        </div>
      </div>
    </section>
  <!-- End of MAIN CONTENTS -->

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <!-- Logo Pemkab Malang -->
          <div id="footer-logo" class="col-lg-4 col-md-6 d-flex justify-content-start">
            <a href="">
              <img src="<?php echo base_url(); ?>assets/images/Logo.png" alt="Logo Kab Malang" class="img-fluid" id="">
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
    <div class="footer-bottom container text-center" id="copyright">Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.</div>
  </footer>
  <!-- End of FOOTER -->

  <!-- JS LINKS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="assets/js/news-page/news.js"></script>
  <!-- End of JS LINKS -->
</body>

</html>