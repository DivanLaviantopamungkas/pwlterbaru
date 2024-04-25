<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function inputdata(): string
    {
        return view('v_tambahproduk');
    }
}
