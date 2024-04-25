<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TranksaksiController extends BaseController
{
    public function index()
    {
        return view('v_keranjang');
    }
}
