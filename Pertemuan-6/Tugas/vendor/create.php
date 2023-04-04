<?php
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses.php">
    <div class="form-group row mt-2">
        <label for="kode" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <input id="kode" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tmp_lahir" name="kota" value="" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="tmp_lahir" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tmp_lahir" name="kontak" value="" class="form-control">
            </div>
        </div>
    </div>


    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>