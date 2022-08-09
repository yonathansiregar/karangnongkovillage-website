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

  <!-- TITLE PAGE -->
  <title>Website Desa Karangnongko Poncokusumo - Daftar UMKM</title>
</head>
<body>
    <div class="container pt-5">
        <h3><?= $title ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="btn btn-secondary mb-2" style="margin-right: 10px;" href="<?= base_url('modification'); ?>">Kembali</a>
                    <a class="btn btn-primary mb-2" href="<?= base_url('tambahUmkm'); ?>">Tambah</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tablePesanan">
                                <thead>
                                    <tr class="table-success">
                                        <th style="width: 50px;">ID</th>
                                        <th>GAMBAR</th>
                                        <th>UMKM</th>
                                        <th style="width: 150px;">MODIFIKASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($semua_umkm as $row) : ?>
                                        <tr>
                                            <td><?= $row->idUmkm ?></td>
                                            <td width="300">
                                                <img src="<?php echo base_url(); ?>assets/images/umkm-products/<?= $row->gambarUmkm;?>" class="card-img-top p-3" alt="Card Image">
                                                <p style="text-align:center;"><?= $row->gambarUmkm;?></p>
                                            </td>
                                            <td>
                                                <table>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Nama UMKM</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->namaUmkm;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Nama Produk</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->namaProduk;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b><span class="me-3">Pemilik UMKM</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->pemilikUmkm;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Jenis Produk</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->jenisProduk;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Lokasi</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->lokasi;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Nomor WA</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td>(+62)<?= $row->nomorWa;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Online Shop</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td><?= $row->olshop;?></td>
                                                    </tr>
                                                    <tr style="vertical-align:top ;">
                                                        <td><b><span class="me-3">Deskripsi</span></b></td>
                                                        <td><span class="me-3">:</span></td>
                                                        <td width="600px"><?= $row->deskripsi;?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('editUmkm/' . $row->idUmkm) ?>" class="btn btn-success btn-sm">Edit </a>
                                                <a href="<?= site_url('hapusUmkm/' . $row->idUmkm) ?>" class="btn btn-danger btn-sm item-delete">Hapus </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //menampilkan data ketabel dengan plugin datatables
        $('#tableTiket').DataTable();
    </script>
</body>
</html>

<?php
}
?>