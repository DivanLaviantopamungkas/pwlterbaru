<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class layout extends BaseController
{
    public function index()
    {
        //
        $data['judul'] = 'Dashboard';
        return view('layout', $data);
    }

    public function keranjang()
    {
        $data['judul'] = 'Keranjang';
        return view('layout', $data);
    }

    public function produk()
    {
        $data['judul'] = 'Produk';
        return view('layout', $data);
    }
}
