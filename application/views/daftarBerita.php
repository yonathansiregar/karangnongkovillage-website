<?php
session_start();
if (empty($_SESSION["username"])) {
echo "Maaf, anda belum login";
} else {
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
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
  <title>Website Desa Karangnongko Poncokusumo - Daftar Berita</title>
</head>
<body>
    <div class="container pt-5">
        <h3><?= $title ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a class="btn btn-secondary mb-2" style="margin-right: 10px;" href="<?= base_url('modification'); ?>">Kembali</a>
                    <a class="btn btn-primary mb-2" href="<?= base_url('tambahBerita'); ?>">Tambah</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tablePesanan">
                                <thead>
                                    <tr class="table-success">
                                        <th style="width: 50px;">ID</th>
                                        <th>GAMBAR</th>
                                        <th>BERITA</th>
                                        <th style="width: 150px;">MODIFIKASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($semua_berita as $row) : ?>
                                        <tr>
                                            <td><?= $row->idBerita ?></td>
                                            <td width="300">
                                                <img src="<?php echo base_url(); ?>assets/images/news/<?= $row->gambarBerita;?>" class="card-img-top p-3" alt="Card Image">
                                                <p style="text-align:center;"><?= $row->gambarBerita;?></p>
                                            </td>
                                            <td><b><?= $row->judul ?></b><br><?= tgl_indo($row->tanggal) ?><br><br><?= substr($row->deskripsi,0,99) ?>...</td>
                                            <td>
                                                <a href="<?= site_url('editBerita/' . $row->idBerita) ?>" class="btn btn-success btn-sm">Edit </a>
                                                <a href="<?= site_url('hapusBerita/' . $row->idBerita) ?>" class="btn btn-danger btn-sm item-delete">Hapus </a>
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