<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'menu'
        ];
        return view('menu/menu', $data);
    }
}
