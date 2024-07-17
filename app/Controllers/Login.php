<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home'
        ];
        return view('auth/login', $data);
    }
}
