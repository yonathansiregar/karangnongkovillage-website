<?php
session_start();
if (empty($_SESSION["username"])) {
echo "Maaf, anda belum login";
} else {
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?v=<?php time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css?v=<?php time(); ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css?v=<?php time(); ?>">

  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>
<body>
    <img src="<?php echo base_url(); ?>assets/images/dashboard/icon.png" class="icon-img">
    <img src="<?php echo base_url(); ?>assets/images/dashboard/bars.png" class="bars-img">
    <div class="container btns">
        <section class="page-title">
            <p>DASHBOARD</p>
        </section>
        <button onclick="location.href='<?php echo base_url('daftarPD'); ?>'" type="button" class="dashboard-btn" style="background: #125159; border-radius: 30px; margin-bottom: 20px;">
            <a class="text-decoration-none" href="<?php echo base_url('daftarPD'); ?>" style="color: #fff;">Perangkat Desa</a>
        </button>
        <button onclick="location.href='<?php echo base_url('daftarBerita'); ?>'" type="button" class="dashboard-btn" style="background: #125159; border-radius: 30px; margin-bottom: 20px;">
            <a class="text-decoration-none" href="<?php echo base_url('daftarBerita'); ?>" style="color: #fff;">Berita</a>
        </button>
        <button onclick="location.href='<?php echo base_url('daftarUmkm'); ?>'" type="button" class="dashboard-btn" style="background: #125159; border-radius: 30px; margin-bottom: 20px;">
            <a class="text-decoration-none" href="<?php echo base_url('daftarUmkm'); ?>" style="color: #fff;">UMKM</a>
        </button>
        <a class="text-decoration-none logout-btn" href="<?php echo base_url('logout_process'); ?>">Logout</a>
    </div>
</body>
</html>

<?php
}
?>