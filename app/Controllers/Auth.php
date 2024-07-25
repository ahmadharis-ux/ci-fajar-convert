<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        $data = [
            'title' => 'home'
        ];
        return view('auth/login', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'home'
        ];
        return view('auth/daftar', $data);
    }

    public function lupa_password()
    {
        $data = [
            'title' => 'home'
        ];
        return view('auth/lupa_password', $data);
    }

    

}
