<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icon -->
  <link rel="icon" href="assets/images/Logo.png" type="images/png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

  <!-- Homepage CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css">

  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="assets/images/Logo.png" alt="Logo Pemkab Malang" class="brand-img">
        <span class="navbar-title"><?php echo $navbarTitle; ?></span>
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-menu me-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- Menu Beranda -->
          <li class="nav-item">
            <a class="nav-link fs-5" aria-current="page" href="">Beranda</a>
          </li>

          <!-- Menu Berita -->
          <li class="nav-item mx-md-4">
            <a class="nav-link fs-5" href="<?php echo base_url('dashboard/news'); ?>">Berita</a>
          </li>

          <!-- Menu UMKM -->
          <li class="nav-item me-md-4">
            <a href="<?php echo base_url('dashboard/umkm'); ?>" class="nav-link fs-5">UMKM</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard/profile'); ?>" class="nav-link fs-5">Profil</a>
          </li>
        </ul>

        <!-- Search icon -->
        <form class="d-flex mx-md-4" id="search">
          <i class="bi bi-search text-white fs-5"></i>
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
            <img src="assets/images/homepage/KantorDesa.jpeg" class="d-block w-100" alt="Kantor Desa Karangnongko">
            <div class="carousel-caption d-block d-md-block d-flex align-items-center justify-content-center">
              <p>DESA KARANGNONGKO <br> Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/homepage/KantorDesa.jpeg" class="d-block w-100" alt="Kantor Desa Karangnongko">
            <div class="carousel-caption d-block d-md-block d-flex align-items-center justify-content-center">
              <p>DESA KARANGNONGKO <br> Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/homepage/KantorDesa.jpeg" class="d-block w-100" alt="Kantor Desa Karangnongko">
            <div class="carousel-caption d-block d-md-block d-flex align-items-center justify-content-center">
              <p>DESA KARANGNONGKO <br> Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
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

    <!-- Info Web Desa -->
    <section id="info-web">
      <div class="container d-flex">
        <div class="row">
          <div class="col-md-6" id="gambar-kantordesa">
            <img src="assets/images/homepage/Group-infoweb.png" class="justify-content-start img-fluid d-none d-md-block" alt="">
          </div>
          <div class="col-md-6 pt-5 ps-5">
            <p class="title-infoweb">Informasi Website</p>
            <ul class="">
              <li class="list-infoweb">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>Profile mengenai Desa Karangnongko</span>
              </li>
              <li class="list-infoweb">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>Kegiatan terkini yang dilaksanakan di desa</span>
              </li>
              <li class="list-infoweb">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>Produk unggulan UMKM Desa Karangnongko</span>
              <li class="list-infoweb">
                <i class="bi bi-check-circle-fill me-2"></i>
                <span>Produk unggulan UMKM Desa Karangnongko</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Berita Terkini -->
    <section id="current-news mb-5">
      <div class="d-flex mx-5 mt-5">
        <div class="me-auto">
          <p class="left">BERITA TERKINI</p>
        </div>

        <div class="ms-auto">
          <p class="text-decoration-underline right">LIHAT SEMUA</p>
        </div>
      </div>

      <div class="card-currentnews">
        <div class="responsive mx-5">
          <!-- Card Loop -->
          <?php foreach ($data_berita as $row) : ?>
            <div>
              <div class="card" style="width: 18rem;">
                <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
                <div class="card-body">
                  <p class="card-title"><?= $row->judul ?></p>
                  <p class="card-text"><?= $row->deskripsi ?></p>
                  <button type="button" class="btn">
                    <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- Card 1 -->
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
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
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
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
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>
          <div>
            <div class="card" style="width: 18rem;">
              <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-3" alt="Card Image">
              <div class="card-body">
                <p class="card-title">SDN Karangnongko 1 Mendapat Kunjugan KKN ...</p>
                <p class="card-text">Sejumlah 30 Mahasiswa mengikuti porseni tingkat kabupaten malang selama 30 hari di kepanjen. selama 30 hari di kepanjen. ...</p>
                <button type="button" class="btn">
                  <a href="<?php echo base_url('dashboard/berita'); ?>">Baca Selengkapnya</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Peta Desa Karangnongko-->
    <section id="peta-desa" class="" style="background: #125159; color: #fff;">
      <div class="container">
        <div class="fs-5 d-flex justify-content-center justify-content-md-start" style="font-weight: 600; line-height: 48px; ">
          <p id="tulisan-petadesa">PETA DESA KARANGNONGKO</p>
        </div>

        <div class="d-flex flex-nowrap">
          <div class="row justify-content-center align-items-center" style="text-align: justify;">
            <div class="col-md-6 order-2 order-md-1 fs-6" style="font-weight: 300; line-height: 27px; font-style: normal;">
              <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Karangnongko merupakan salah satu desa yang ada di kecamatan karangnongko kabupaten malang. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. </p>
              <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. </p>
            </div>

            <div class="col-md-6 order-1 order-md-2 d-flex justify-content-center justify-content-md-end">
              <img src="assets/images/homepage/peta-desa.png" alt="Peta Desa" class="my-3 img-responsive">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Peta Desa Karangnongko -->

    <!-- UMKM Desa Karangnongko -->
    <section id="umkm-desa">
      <div class="d-flex mx-5 mt-5">
        <div class="me-auto">
          <p class="left">UMKM DESA KARANGNONGKO</p>
        </div>

        <div class="ms-auto">
          <p class="text-decoration-underline right">LIHAT SEMUA</p>
        </div>
      </div>

      <div class="responsive mx-5">
        <!-- UMKM Loop -->
        <?php foreach ($data_umkm as $row) : ?>
          <div>
            <div class="card" style="width: 18rem; border-style: none;">
              <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?= $row->namaUmkm ?></h5>
                <p class="card-text"><?= $row->pemilikUmkm ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <!-- UMKM 1 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>
        <!-- UMKM 2 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>

        <!-- UMKM 3 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>

        <!-- UMKM 4 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>

        <!-- UMKM 5 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>

        <!-- UMKM 6 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>

        <!-- UMKM 7 -->
        <div>
          <div class="card" style="width: 18rem; border-style: none;">
            <img src="assets/images/homepage/umkm-products/foto1.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Kunir Asem Herbal Instan</h5>
              <p class="card-text">UMKM Damajati</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of UMKM Desa Karangnongko -->

    <!-- End of BERITA TERKINI -->
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
    <div class="footer-bottom container text-center" id = "copyright">Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.</div>
  </footer>
  <!-- End of FOOTER -->

  <!-- JQuery JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

  <!-- Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Homepage JS -->
  <script src="<?php echo base_url(); ?>assets/js/homepage.js"></script>
</body>

</html>