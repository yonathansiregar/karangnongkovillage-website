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
        <title>Website Desa Karangnongko Poncokusumo - Tambah UMKM</title>
        <script>
            function getFile(filePath) {
                return filePath.substr(filePath.lastIndexOf('\\') + 1);
            }

            function getoutput() {
                const today = new Date();
                gambarUmkm.value = <?php date("d-m-Y H:i:s")?>+' '+getFile(gambar.value);
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
                            <form enctype="multipart/form-data" action="<?php echo base_url('simpanUmkm'); ?>" method="post">
                                <div class="form-group row mb-2">
                                    <label for="namaUmkm" class="col-sm-2 col-form-label">Nama UMKM</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" id="gambarUmkm" name="gambarUmkm" required value="<?= set_value('gambarUmkm'); ?>">
                                        <input type="text" class="form-control" id="namaUmkm" name="namaUmkm" required value="<?= set_value('namaUmkm'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('namaUmkm') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="namaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" required value="<?= set_value('namaProduk'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('namaProduk') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="pemilikUmkm" class="col-sm-2 col-form-label">Pemilik UMKM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pemilikUmkm" name="pemilikUmkm" required value="<?= set_value('pemilikUmkm'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('pemilikUmkm') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="jenisProduk" class="col-sm-2 col-form-label">Jenis Produk</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenisProduk" name="jenisProduk" required value="<?= set_value('jenisProduk'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('jenisProduk') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="lokasi" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lokasi" name="lokasi" required value="<?= set_value('lokasi'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('lokasi') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="nomorWa" class="col-sm-2 col-form-label">Nomor WA (+62) - </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomorWa" name="nomorWa" required value="<?= set_value('nomorWa'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('nomorWa') ?>
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row mb-2">
                                    <label for="olshop" class="col-sm-2 col-form-label">Tautan Online Shop</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="olshop" name="olshop" value="<?= set_value('olshop'); ?>">
                                        <small class="text-danger">
                                            <?php echo form_error('olshop') ?>
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