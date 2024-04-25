<?php
$hlm = "Home";
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

    <a href="<?= base_url('produk') ?>"><button type="button" class="btn btn-primary mb-2">Produk</button></a>
    <a href="<?= base_url('keranjang') ?>"><button type="button" class="btn btn-primary mb-2">Keranjang</button></a>
    <?= $this->endSection() ?>
</body>

</html>