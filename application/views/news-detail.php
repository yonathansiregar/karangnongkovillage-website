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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/news-page/berita.css">

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
  <div id="main-contents" class="main">
    <!-- Background Article -->
    <div class="background-picture" style="padding-top: 10vh;">
      <img src="<?= base_url(); ?>assets/images/homepage/sdn1.png" alt="" class="w-100 position-absolute">
    </div>
    <div class="container">
      <div class="article position-relative">
        <p class="fs-1 news-title">SDN Karangnongko 1 Mendapat Kunjugan KKN Fakultas Ilmu Komputer Universitas Brawijaya</h1>
        <p>Selasa, 02 Agustus 2022</h5>
        <p>Desa Mengglobal: Dengan Warga Memahami IT Maka Kehidupannya Diharapkan Akan Lebih Baik<br><br>
        MALANG -- Desa sudah mengglobal. Hal ini ditandai dengan penetrasi Teknologi Internet (IT) yang kini sudah menjadi kebutuhan baru 
          masyarakat di seluruh pelosok kampung. Apalagi jaringan Wi-Fi sudah merambah ke desa-desa sehingga mereka terkoneksi dengan seluruh 
          warga dunia. Masyarakat tak lagi sekadar dapat mengakses teknologi komunikasi (IT) hanya melalui telepon selularnya saja. Akan 
          tetapi, sudah menggunakan jaringan Wi-Fi yang tersambung melalui kabel ke rumah-rumah mereka.<br><br>
        Maka sangat tepat bila pada 18 Juli sampai 13 Agustus 2022 mahasiswa Fakutas Ilmu Komputer (Filkom) Univeritas Brawijaya 
          melakanakan KKN (Kuliah Kerja Nyata) ke berbagai wilayah yang ada di seputaran kampus mereka yang berada di Kota Malang, Jawa Timur. 
          Tema KKN mereka kali ini bertajuk ‘IT For Better Life’ (Teknologi IT untuk Hidup yang Lebih Baik).<br><br>
        “KKN di Desa Karanongko tidak hanya dilaksanakan hanya mahasiswa FILKOM saja, ada juga mahasiswa dari Fakultas Ekonomi dan Bisnis 
          (FEB) Universitas Brawijaya. Kedua fakultas nantinya akan berkerjasama dalam satu program kerja (Proker). Program kerja tersebut 
          adalah Proker Pujasera," kata Attar Syifa Kamal, mahasiswa FILKOM Univertas Brawijaya yang menjadi peserta KKN, Selasa (2/8/2022).<br><br>
        Menurut Attar, pada hari pertama kedatangan mahasiswa KKN FILKOM Univeritas Brawijaya, mereka bertemu dengan perangkat desa guna 
          melakukan koordinasi awal para mahasiswa mengenai jenis Proker apa saja yang akan dijalankan. “Kami kemudian menjelaskan bahwa akan 
          melaksanakan tiga Proker yaitu pembuatan website desa, pembuatan logo dan desain kemasan UMKM, dan pelatihan IT kepada murid–murid SD 
          dari kelas 4–6," ujarnya.<br><br>
        “Proker pelatihan IT ini dilakasnakan dari tanggal 26 -  28 Juli 2022. Proker itu dilaksanakan di SDN Karangnongko 1. Pelatihan IT 
          dibuat dengan harapan agar anak-anak bisa bijak dalam menggunakan internet,’’ tegas Attar lagi.<br><br>
        Mengenai Proker pembuatan website itu dilakukan karena sebelumnya desa tidak mempunyai website yang mendukung aktivitas bekerja. 
          Padahal sebelumnya pihak kecamatan setempat dahulu sudah pernah memberikan website kepada Desa Karanongko. Namun,  ternyata server 
          website tersebut mati. Dengan demikian, adanya pembuatan website desa dari mahasiswa FILKOM Universitas Brawijaya diharapakan dapat 
          mempermudah warga desa, baik mereka yang berada dalam maupun di luar desa, agar dapat mengetahui segala informasi mengenai desanya 
          dengan mudah.<br><br>
        Tujuan lainnya adalah dengan adanya Proker  pembuatan logo dan desain UMKM, para mahasiswa KKN itu berharap agar Desa Karangnongko 
          memiliki laman dengan desain yang menarik. Selain itu, warga desa itu dapat memanfaatkan sarana sosial untuk meningkatkan penjualan 
          produk UMKM secara maksimal. <br><br>
        “Dalam pelaksanaan Proker ini mahasiswa KKN FILKOM Univeritas Brawijaya melakukan koordinasi dengan Ibu Rismiati selaku koordinator 
          UMKM di Kecamatan Poncokusumo. Koordinasi dilakukan agar mahasiswa KKN FILKOM Univeritas Brawijaya mengetahui apa saja kebutuhan dan 
          produk UMKM yang dipasarkan di kecamatan tersebut," kata Attar lagi.<br><br>
        Selain tiga Proker dari Mahasiswa FILKOM Univeritas Brawijaya, masih ada satu proker tambahan lainnya, yaitu Proker Pujasera. Proker 
          tersebut dilakukan bersama – sama dengan Mahasiswa dari FEB Univeritas Brawijaya. Para mahasiswa dari kedua fakultas ini saling 
          bekerja sama membantu menyiapkan Pujasera mulai dari meja, kursi, photobooth, dan masih banyak lagi lainnya. <br><br>
        Puncak Proker Pujasera adalah pada tanggal 28 Juli 2022. Pada hari itu diadakan acara grand opening Pujasera. <br><br>
        “Acara itu dihadiri oleh banyak orang mulai dari para pelaku UMKM, perwakilan camat, ibu kepala desa, warga desa, bahkan mahasiswa 
          KKN dari desa lain yang juga turut meramaikan acara. Acara berlangsung meriah. Semua pengunjung di sana bergantian untuk menari dan 
          bernyanyi.  Berkahirnya acara tersebut juga menandakan bahwa kegiatan KKN FEB UB sudah selesai," tandas Attas mengisahkan.</p>
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