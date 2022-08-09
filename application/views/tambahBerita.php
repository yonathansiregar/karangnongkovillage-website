<?php
session_start();
if (empty($_SESSION["username"])) {
    echo "Maaf, anda belum login";
} else {
?>

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?v=<?php time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css?v=<?php time(); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css?v=<?php time(); ?>">

        <!-- Homepage CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css?v=<?php time(); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css?v=<?php time(); ?>">

        <!-- TITLE PAGE -->
        <title><?php echo $title; ?></title><!-- Icon -->
        <link rel="icon" href="assets/images/Logo.png" type="images/png">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?v=<?php time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Slick CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css?v=<?php time(); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css?v=<?php time(); ?>">

        <!-- Homepage CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css?v=<?php time(); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css?v=<?php time(); ?>">
        <!-- TITLE PAGE -->
        <title>Website Desa Karangnongko Poncokusumo - Tambah Berita</title>
        <script>
            function getFile(filePath) {
                return filePath.substr(filePath.lastIndexOf('\\') + 1);
            }

            function getoutput() {
                gambarBerita.value = getFile(gambar.value);
                extension.value = gambar.value.split('.')[1];
            }
        </script>
    </head>

    <body>
        <div class="container pt-5">
            <h3><?= $title ?></h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="<?php echo base_url('simpanBerita'); ?>" method="post">
                                <div class="form-group row mb-2">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" id="tanggal" name="tanggal" required value="<?= set_value('tanggal'); ?><?=date('Y-m-d'); ?>">
                                        <input type="hidden" class="form-control" id="gambarBerita" name="gambarBerita" required value="<?= set_value('gambarBerita'); ?>">
                                        <input type="text" class="form-control" id="judul" name="judul" required value="<?= set_value('judul'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('judul') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" required rows="10"><?= set_value('deskripsi'); ?></textarea>
                                        <small class="text-danger">
                                            <?php echo form_error('deskripsi') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="gambar" name="gambar" accept=".jpg,.png" onChange='getoutput()'>
                                        <small class="text-danger">
                                            <?php echo form_error('gambar') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <div class="col-sm-10 offset-md-2">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>