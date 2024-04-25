<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index(): string
    {
        $produk = new ProdukModel();
        $data['produk'] = $produk->findAll();

        return view('v_produk', $data);
    }
}
