<?php
$hlm = "Tambah";
if (uri_string() != "") {
    $hlm = ucwords(uri_string());
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Muria Tani</title>
</head>

<body>
    <?= $this->extend('layout') ?>
    <?= $this->section('content') ?>

    <form class="row g-3">
        <div class="col-12">
            <label for="inputNanme4" class="form-label">Id produk</label>
            <input type="text" class="form-control" id="inputNanme4">
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form><!-- Vertical Form -->

    <?= $this->endSection() ?>
</body>

</html>