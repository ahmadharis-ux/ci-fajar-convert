<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home'
        ];
        return view('auth/daftar', $data);
    }
}
