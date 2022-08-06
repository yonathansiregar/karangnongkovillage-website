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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css">

  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container pt-5">
        <h3><?= $title ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="btn btn-danger mb-2" href="<?= base_url('modification'); ?>">Kembali</a>
                    <a class="btn btn-success mb-2" href="<?= base_url('tambahUmkm'); ?>">Tambah</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tablePesanan">
                                <thead>
                                    <tr class="table-success">
                                        <th>ID</th>
                                        <th>GAMBAR</th>
                                        <th>UMKM</th>
                                        <th>MODIFIKASI</th>
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
                                                    <tr>
                                                        <td><b>Nama UMKM</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td><?= $row->namaUmkm;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Pemilik UMKM</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td><?= $row->pemilikUmkm;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Jenis Produk</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td><?= $row->jenisProduk;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Lokasi</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td><?= $row->lokasi;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Nomor WA</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td>(+62)<?= $row->nomorWa;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Olshop</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td><?= $row->olshop;?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Deskripsi</b></td>
                                                        <td>&nbsp; : &nbsp;&nbsp;</td>
                                                        <td width="600px"><?= $row->deskripsi;?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <a href="<?= site_url('editUmkm/' . $row->idUmkm) ?>" class="btn btn-success btn-sm">Edit </a>
                                                <a href="<?= site_url('hapusUmkm/' . $row->idUmkm) ?>" class="btn btn-danger btn-sm item-delete">Delete </a>
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