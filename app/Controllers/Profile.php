<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        $saldo = 100000;

        if ($saldo >= 1000000000) {
            $saldo = number_format($saldo / 1000000000, 1) . 'B';
        } elseif ($saldo >= 1000000) {
            $saldo = number_format($saldo / 1000000, 1) . 'M';
        } elseif ($saldo >= 1000) {
            $saldo = number_format($saldo / 1000, 1) . 'K';
        } else {
            $saldo = number_format($saldo);
        }

        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
            'saldo' => $saldo,
            'gabung' => '30 Januari 2029',
            'email' => 'yogiardiansyahn@gmail.com',
            'nohp' => '085156511123'
        ];
        return view('profile/index', $data);
    }

    public function pengaturan_profile()
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
        ];
        return view('profile/pengaturan_profile', $data);
    }

    public function ubah_password()
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
        ];
        return view('profile/ubah_password', $data);
    }

    public function mutasi_saldo()
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
        ];
        return view('profile/mutasi_saldo', $data);
    }

    public function catatan_aktifitas()
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
        ];
        return view('profile/catatan_aktifitas', $data);
    }

    public function catatan_withdraw()
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile',
            'username' => 'Ahmad Haris',
        ];
        return view('profile/catatan_withdraw', $data);
    }
}
