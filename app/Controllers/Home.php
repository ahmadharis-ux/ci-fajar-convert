<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'home'
        ];
        return view('home/home', $data);
    }

    public function account()
    {
        $data = [
            'title' => 'account'
        ];
        return view('accounts/account', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'profile'
        ];
        return view('accounts/profile', $data);
    }
}
