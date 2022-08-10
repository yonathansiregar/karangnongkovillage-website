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
        <title>Website Desa Karangnongko Poncokusumo - Daftar Perangkat Desa</title>
    </head>

    <body>
        <div class="container pt-5">
            <h3><?= $title ?></h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">
                        <a class="btn btn-secondary mb-2" style="margin-right: 10px;" href="<?= base_url('modification'); ?>">Kembali</a>
                        <a class="btn btn-primary mb-2" href="<?= base_url('tambahPD'); ?>">Tambah</a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tablePesanan">
                                    <thead>
                                        <tr class="table-success">
                                            <th style="width: 50px;">ID</th>
                                            <th>GAMBAR</th>
                                            <th>PERANGKAT DESA</th>
                                            <th style="width: 150px;">MODIFIKASI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($semua_PD as $row) : ?>
                                            <tr>
                                                <td><?= $row->idPD ?></td>
                                                <td width="300">
                                                    <img src="<?php echo base_url(); ?>assets/images/village-profile/<?= $row->gambarPD; ?>" class="card-img-top p-3 myImages" alt="Card Image">
                                                    <!-- The Modal -->
                                                    <div id="myModal" class="modal">
                                                        <span class="close">&times;</span>
                                                        <img class="modal-content" id="modal">
                                                    </div>
                                                    <p style="text-align:center;"><?= $row->gambarPD; ?></p>
                                                </td>
                                                <td><b><?= $row->namaPD ?></b><br><?= $row->jabatanPD ?></td>
                                                <td>
                                                    <a href="<?= site_url('editPD/' . $row->idPD) ?>" class="btn btn-success btn-sm">Edit </a>
                                                    <a href="<?= site_url('hapusPD/' . $row->idPD) ?>" class="btn btn-danger btn-sm item-delete">Hapus </a>
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
        <script src="assets/js/global.js?v=<?php time(); ?>"></script>

    </body>

    </html>

<?php
}
?>