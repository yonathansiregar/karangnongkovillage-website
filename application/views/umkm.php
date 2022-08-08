<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/Logo.png" type="images/png">

  <!-- Page title -->
  <title><?php echo $title; ?></title>

  <!-- CSS External Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/umkm.css">

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
  <div id="main-content">
    <section class="page-title container mt-5">
      <p>UMKM DESA KARANGNONGKO</p>
    </section>

    <!-- UMKM Loop -->
    <?php
    $alternative = $this->umkm->getAll();
    foreach ($alternative as $row) : ?>
      <section class="my-5 products-list d-flex justify-content-center align-items-center">
        <div class="card horizontal-card mb-3" style="width: 1295px; background-color: transparent;">
          <div class="row g-0">
            <div class="col-md-4">
              <img id="umkm-image" src="<?php echo base_url(); ?>assets/images/umkm-products/<?= $row->gambarUmkm ?>" class="img-fluid p-5 rounded-start" style=" width: 280; height: 328;" alt="Foto Produk UMKM">
            </div>
            <div class="col-md-8">
              <div class="card-body mt-4 me-5">
                <div class="product-details">
                  <table>
                    <tr>
                   <td colspan="3" style="height:50px ; "><p class="card-title" id="umkm-name" style="font-size:20px ;"><b><?= $row->namaUmkm ?></b></p></td>
                    </tr>
                    <tr style="vertical-align:top ;">
                      <td style="height:50px ; width: 140px;"><span class="me-3" style="font-size:18px ;">Nama Produk</span></td>
                      <td style="height:50px ;"><span class="me-3" style="font-size:18px ;">:</span></td>
                      <td style="height:50px ;"><span style="font-size:18px ;"><?= $row->namaUmkm ?></span></td>
                    </tr>
                    <tr style="vertical-align:top ;">
                      <td style="height:50px ; width: 140px;"><span class="me-3" style="font-size:18px ;">Jenis Produk</span></td>
                      <td style="height:50px ;"><span class="me-3" style="font-size:18px ;">:</span></td>
                      <td style="height:50px ;"><span style="font-size:18px ;"><?= $row->jenisProduk ?></span></td>
                    </tr>
                    <tr style="vertical-align:top ;">
                      <td style="height:50px ; width: 140px;"><span class="me-3" style="font-size:18px ;">Alamat</span></td>
                      <td style="height:50px ;"><span class="me-3" style="font-size:18px ;">:</span></td>
                      <td style="height:50px ;"><span style="font-size:18px ;"><?= $row->lokasi ?></span></td>
                    </tr>
                  </table>
                </div>
                <br>
                <div class="umkm-description">
                  <p class="card-text p-3"><?= $row->deskripsi ?></p>
                </div>
              </div>
                <div style="padding-right:65px ; padding-top:40px ; padding-bottom:100px ;" id="btn-links">
              <table align="right">
                <tr>
                  <td style="padding-right:20px ;">
                  <form target="_blank" action="<?= $row->olshop ?>">
                  <button class="p-3" style="background-color:transparent ;" id="shopee-link">Link Online Shop</button>
                  </form>
                  </td>
                  <td>
                  <form target="_blank" action="https://wa.me/62<?= $row->nomorWa ?>">
                  <button class="p-3" id="whatsapp-link">Link WhatsApp</button>
                  </form>
                  </td>
                </tr>
              </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endforeach; ?>

  </div>

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
    <div class="footer-bottom container text-center" id="copyright">Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.</div>
  </footer>
  <!-- End of FOOTER -->

  <!-- JS External Link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="assets/js/homepage.js"></script>
</body>

</html>