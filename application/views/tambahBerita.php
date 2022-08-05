<?php
session_start();
if (empty($_SESSION["username"])) {
echo "Maaf, anda belum login";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container pt-5">
        <h3><?= $title ?></h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        //create form
                        $attributes = array('id' => 'FrmAddTiket', 'method' => "post", "autocomplete" => "off");
                        echo form_open('', $attributes);
                        ?>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" value=" <?= set_value('judul'); ?>">
                                <small class="text-danger">
                                    <?php echo form_error('judul') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="7"><?= set_value('deskripsi'); ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('deskripsi') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar" value=" <?= set_value('gambar'); ?>">
                                <small class="text-danger">
                                    <?php echo form_error('gambar') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
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