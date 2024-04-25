<?php
$hlm = "Produk";
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
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Satuan</th>
                <th scope="col">jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $data) {
            ?>
                <tr>
                    <th scope="row"><?= $data('id'); ?></th>
                    <td><?= $data('nama_produk'); ?></td>
                    <td><?= $data('satuan'); ?></td>
                    <td><?= $data('jumlah'); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url('tambah') ?>"><button type="button" class="btn btn-primary mb-2">Tambah Produk</button></a>
    <?= $this->endSection() ?>
</body>

</html>