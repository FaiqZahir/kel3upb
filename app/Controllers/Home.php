<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index');
    }
}
