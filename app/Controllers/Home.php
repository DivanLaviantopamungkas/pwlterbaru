<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_home');
    }
}
