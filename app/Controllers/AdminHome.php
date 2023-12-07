<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminHome extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
}
