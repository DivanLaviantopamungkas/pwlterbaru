<?php
$hlm = "keranjang";
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
    Ini Halaman Keranjang
    <?= $this->endSection() ?>
</body>

</html>