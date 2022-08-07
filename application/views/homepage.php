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
  <title><?php echo $title; ?></title><!-- Icon -->
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
            <a class="nav-link fs-5" aria-current="page" href="<?php echo base_url(''); ?>">Beranda</a>
          </li>

          <!-- Menu Berita -->
          <li class="nav-item mx-md-4">
            <a class="nav-link fs-5" href="<?php echo base_url('news'); ?>">Berita</a>
          </li>

          <!-- Menu UMKM -->
          <li class="nav-item me-md-4">
            <a href="<?php echo base_url('umkm'); ?>" class="nav-link fs-5">UMKM</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item">
            <a href="<?php echo base_url('profile'); ?>" class="nav-link fs-5">Profil</a>
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
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; line-height: 48px; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">DESA KARANGNONGKO</p>
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; line-height: 48px; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
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
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; line-height: 48px; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">DESA KARANGNONGKO</p>
                <p class="card-text d-flex justify-content-center align-items-center" style="font-weight: 700; line-height: 48px; color: #125159; -webkit-text-stroke: 1px #DFE5E6;">Kec. Poncokusumo Kab. Malang Prov. Jawa Timur</p>
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

    <!-- Info Web Desa -->
    <section id="info-web">
      <div class="container d-flex">
        <div class="row">
          <div class="col-md-6" id="gambar-kantordesa">
            <img src="assets/images/homepage/Group-infoweb.png" class="justify-content-start img-fluid d-none d-md-block" alt="">
          </div>
          <div class="col-md-6 pt-5 ps-5">
            <p class="title-infoweb" style="font-size:32px ;">Informasi Website</p>
            <table>
            <tr style="vertical-align:top ;">
              <td class="list-infoweb pb-3">
                <span class="bi bi-check-circle-fill me-3" style="font-size:20px ;"></span>
              </td>
              <td class="list-infoweb pb-3">
                <span style="font-size:20px ;">Profile Desa serta Perangkat Desa Karangnongko</span>
              </td>
              </tr>
              <tr style="vertical-align:top ;">
              <td class="list-infoweb pb-3">
                <span class="bi bi-check-circle-fill me-3" style="font-size:20px ;"></span>
              </td>
              <td class="list-infoweb pb-3">
                <span style="font-size:20px ;">Kegiatan dan berita terkini yang dilaksanakan di desa karangnongko</span>
              </td>
              </tr>
              <tr style="vertical-align:top ;">
              <td class="list-infoweb pb-3">
                <span class="bi bi-check-circle-fill me-3" style="font-size:20px ;"></span>
              </td>
              <td class="list-infoweb pb-3">
                <span style="font-size:20px ;">Produk unggulan UMKM Desa Karangnongko</span>
              </td>
              </tr>
              <tr style="vertical-align:top ;">
              <td class="list-infoweb pb-3">
                <span class="bi bi-check-circle-fill me-3" style="font-size:20px ;"></span>
              </td>
                <td class="list-infoweb pb-3">
                <span style="font-size:20px ;">Menyebarkan informasi terbaru desa karangnongko</span>
              </td>
            </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Berita Terkini -->
    <section class="container"  id="current-news mb-5">
      <div class="d-flex mx-5 mt-5">
        <div class="me-auto">
          <p class="left fs-3 mb-5">BERITA TERKINI</p>
        </div>

        <div class="ms-auto">
          <a href="<?php echo site_url('news'); ?>" class="text-decoration-underline right">LIHAT SEMUA</a>
        </div>
      </div>

      <div class="card-currentnews">
        <div class="responsive mx-5" style="padding-bottom: 50px;margin-bottom: 100px;">
          <!-- Card Loop -->
          <?php foreach ($data_berita as $row) : ?>
            <div>
              <div class="card-body" style="width: 18rem; border-style: solid; border-width: 1px; border-radius: 20px; border-color: #909A9B;">
                <img src="assets/images/homepage/sdn01karangnongko.png" class="card-img-top p-2" style=" width: 320; height: 160; margin-left: auto; margin-right: auto;" alt="Card Image">
                <div class="card-body">
                  <?php if (strlen($row->judul) <= 40) : ?>
                    <p class="card-title" style="text-align: center; font-size: 14px;"><b><?= $row->judul ?></b></p>
                  <?php else : ?>
                    <p class="card-title" style="text-align: center; font-size: 14px;"><b><?= substr($row->judul, 0, 40) . " ..." ?></b></p>
                  <?php endif; ?>
                  <?php if (strlen($row->deskripsi) <= 150) : ?>
                    <p class="card-text" style="font-size: 12px;"><?= $row->deskripsi ?></p>
                  <?php else : ?>
                    <p class="card-text" style="font-size: 12px;"><?= substr($row->deskripsi, 0, 150) . " ..." ?></p>
                  <?php endif; ?>
                  <div class="d-flex justify-content-center">
                  <button type="button" class="btn" style="background: #125159; border-radius: 30px;">
                    <a class="text-decoration-none" href="<?php echo base_url('berita/' . $row->idBerita); ?>" style="color: #fff;">Baca Selengkapnya</a>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
    </section>
    <!-- End of BERITA TERKINI -->

    <!-- Peta Desa Karangnongko-->
    <section id="peta-desa" class="" style="background: #125159; color: #fff;">
      <div class="container">
        <div class="fs-5 d-flex justify-content-center justify-content-md-start pt-3" style="font-weight: 600; line-height: 48px;">
          <p id="tulisan-petadesa">PETA DESA KARANGNONGKO</p>
        </div>

        <div class="d-flex flex-nowrap">
          <div class="row justify-content-center align-items-center" style="text-align: justify;">
            <div class="col-md-6 order-2 order-md-1 fs-6 pb-4" style="font-weight: 300; line-height: 27px; font-style: normal;">
              <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Karangnongko merupakan salah satu desa yang ada di kecamatan karangnongko kabupaten malang. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. </p>
              <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. Salah satu keunikan desa ini merupakan banyak nya anak anak kecil yang ramah dan suka senyum terhadap teman teman kkn. oleh karena itu, kita sangat nyaman dalam menjalankan program kkn hingga akhir waktu. </p>
            </div>

            <div class="col-md-6 order-1 order-md-2 d-flex justify-content-center justify-content-md-end">
              <img src="assets/images/homepage/peta-desa.png" alt="Peta Desa" class="my-3 pb-5 img-responsive">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Peta Desa Karangnongko -->

    <!-- UMKM Desa Karangnongko -->
    <section class="container" id="umkm-desa">
      <div class="d-flex mx-5 mt-5">
        <div class="me-auto">
          <p class="left fs-3 mb-5">UMKM DESA KARANGNONGKO</p>
        </div>

        <div class="ms-auto">
          <a href="<?php echo site_url('umkm'); ?>" class="text-decoration-underline right">LIHAT SEMUA</a>
        </div>
      </div>

      <div class="responsive mx-5" style="margin-bottom: 100px; padding-bottom: 50px;">
        <!-- UMKM Loop -->
        <?php foreach ($data_umkm as $row) : ?>
          <div>
            <div class="card" style="width: 18rem; border-style: none;  background-color:transparent;">
              <img src="assets/images/umkm-products/<?= $row->gambarUmkm ?>" class="card-img-top" style=" width: 280; height: 328; margin-left: auto; margin-right: auto;" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title mt-2" style="font-size:22px ;"><?= $row->namaUmkm ?></h5>
                <p class="card-text mt-3" style="color: #898889; font-size:16px ;"><?= $row->pemilikUmkm ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- End of UMKM Desa Karangnongko -->
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
    <div class="footer-bottom container text-center" id="copyright">Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.</div>
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