<?php

namespace App\Controllers;

class Keranjang extends BaseController
{
    public function index(): string
    {
        return view('v_keranjang');
    }
}
