<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Lainnya extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lainnya',
            'active' => 'lainnya',
            'username' => 'Ahmad Haris',
            'saldo' => 100000,
            'transaksi' => 2500000,
        ];
        return view('lainnya/index', $data);
    }

    public function withdraw()
    {
        $list_bank = [
            'BMD01' => 'Bank Mandiri',
            'BRC02' => 'Bank Rakyat Indonesia (BRI)',
            'BCA03' => 'Bank Central Asia (BCA)',
            'BNI04' => 'Bank Negara Indonesia (BNI)',
            'DAN05' => 'Bank Danamon',
            'CIM06' => 'Bank CIMB Niaga',
            'PER07' => 'Bank Permata',
            'MEG08' => 'Bank Mega',
            'BTP09' => 'Bank BTPN',
            'PAN10' => 'Bank Panin',
            'BSI11' => 'Bank Syariah Indonesia (BSI)',
            'MUA12' => 'Bank Muamalat',
            'BTN13' => 'Bank Tabungan Negara (BTN)',
            'IOI14' => 'Bank of India',
            'JAB15' => 'Bank Jabar Banten',
            'SUL16' => 'Bank SulutGo',
            'KAL17' => 'Bank Kalbar',
            'JAT18' => 'Bank Jatim',
            'SUM19' => 'Bank Sumut',
            'NTT20' => 'Bank NTT',
            'SUL21' => 'Bank Sulteng',
            'NTB22' => 'Bank NTB',
            'LAM23' => 'Bank Lampung',
            'RIA24' => 'Bank Riau Kepri',
            'BEN25' => 'Bank Bengkulu',
            'KAL26' => 'Bank Kaltimtara',
            'MAL27' => 'Bank Maluku Malut',
            'PAP28' => 'Bank Papua',
            'BRI29' => 'Bank BRI Syariah',
            'BNI30' => 'Bank Negara Indonesia Syariah',
            'KEK31' => 'Bank Kesejahteraan Ekonomi',
            'JAT32' => 'Bank Jateng',
            'JAB33' => 'Bank Jabar',
            'CCB34' => 'Bank CCB',
            'ACE35' => 'Bank Aceh',
            'SIN36' => 'Bank Sinarmas',
            'ART37' => 'Bank Artha Graha',
            'JAS38' => 'Bank Jasa Jakarta',
            'BAL39' => 'Bank Bali',
            'PDJ40' => 'Bank Pembangunan Daerah Jawa Timur',
            'PDJ41' => 'Bank Pembangunan Daerah Jawa Barat',
            'PDK42' => 'Bank Pembangunan Daerah Banten',
            'PDS43' => 'Bank Pembangunan Daerah Sumatera Utara',
            'PDS44' => 'Bank Pembangunan Daerah Sumatera Selatan',
            'PDK45' => 'Bank Pembangunan Daerah Kalimantan Timur',
            'PDK46' => 'Bank Pembangunan Daerah Kalimantan Selatan',
            'PDS47' => 'Bank Pembangunan Daerah Sulawesi Selatan',
            'PDS48' => 'Bank Pembangunan Daerah Sulawesi Utara',
            'PDP49' => 'Bank Pembangunan Daerah Papua',
            'PDN50' => 'Bank Pembangunan Daerah Nusa Tenggara Timur',
        ];

        $data = [
            'title' => 'New Withdraw',
            'active' => 'lainnya',
            'username' => 'Ahmad Haris',
            'saldo' => 100000,
            'transaksi' => 2500000,
            'list_bank' => $list_bank
        ];
        return view('withdraw/create', $data);
    }
    public function setor()
    {
        $data = [
            'title' => 'New Withdraw',
            'active' => 'lainnya',
            'username' => 'Ahmad Haris',
            'saldo' => 100000,
            'transaksi' => 2500000,
        ];
        return view('setor/create', $data);
    }

    public function cari_metode_withdraw()
    {
        // Original list of banks
        $list_bank = [
            'BMD01' => 'Bank Mandiri',
            'BRC02' => 'Bank Rakyat Indonesia (BRI)',
            'BCA03' => 'Bank Central Asia (BCA)',
            'BNI04' => 'Bank Negara Indonesia (BNI)',
            'DAN05' => 'Bank Danamon',
            'CIM06' => 'Bank CIMB Niaga',
            'PER07' => 'Bank Permata',
            'MEG08' => 'Bank Mega',
            'BTP09' => 'Bank BTPN',
            'PAN10' => 'Bank Panin',
            'BSI11' => 'Bank Syariah Indonesia (BSI)',
            'MUA12' => 'Bank Muamalat',
            'BTN13' => 'Bank Tabungan Negara (BTN)',
            'IOI14' => 'Bank of India',
            'JAB15' => 'Bank Jabar Banten',
            'SUL16' => 'Bank SulutGo',
            'KAL17' => 'Bank Kalbar',
            'JAT18' => 'Bank Jatim',
            'SUM19' => 'Bank Sumut',
            'NTT20' => 'Bank NTT',
            'SUL21' => 'Bank Sulteng',
            'NTB22' => 'Bank NTB',
            'LAM23' => 'Bank Lampung',
            'RIA24' => 'Bank Riau Kepri',
            'BEN25' => 'Bank Bengkulu',
            'KAL26' => 'Bank Kaltimtara',
            'MAL27' => 'Bank Maluku Malut',
            'PAP28' => 'Bank Papua',
            'BRI29' => 'Bank BRI Syariah',
            'BNI30' => 'Bank Negara Indonesia Syariah',
            'KEK31' => 'Bank Kesejahteraan Ekonomi',
            'JAT32' => 'Bank Jateng',
            'JAB33' => 'Bank Jabar',
            'CCB34' => 'Bank CCB',
            'ACE35' => 'Bank Aceh',
            'SIN36' => 'Bank Sinarmas',
            'ART37' => 'Bank Artha Graha',
            'JAS38' => 'Bank Jasa Jakarta',
            'BAL39' => 'Bank Bali',
            'PDJ40' => 'Bank Pembangunan Daerah Jawa Timur',
            'PDJ41' => 'Bank Pembangunan Daerah Jawa Barat',
            'PDK42' => 'Bank Pembangunan Daerah Banten',
            'PDS43' => 'Bank Pembangunan Daerah Sumatera Utara',
            'PDS44' => 'Bank Pembangunan Daerah Sumatera Selatan',
            'PDK45' => 'Bank Pembangunan Daerah Kalimantan Timur',
            'PDK46' => 'Bank Pembangunan Daerah Kalimantan Selatan',
            'PDS47' => 'Bank Pembangunan Daerah Sulawesi Selatan',
            'PDS48' => 'Bank Pembangunan Daerah Sulawesi Utara',
            'PDP49' => 'Bank Pembangunan Daerah Papua',
            'PDN50' => 'Bank Pembangunan Daerah Nusa Tenggara Timur',
        ];

        $cari = $this->request->getVar('cari', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Initialize an empty array to hold the transformed data
        $results = [];

        // Perform case-insensitive search
        foreach ($list_bank as $code => $bank_name) {
            if (stripos($bank_name, $cari) !== false) {
                $results[] = [
                    'code_bank' => $code,
                    'name_bank' => $bank_name
                ];
            }
        }

        // Prepare response
        if (!empty($results)) {
            $response = [
                'status' => 'success',
                'results' => $results
            ];
            return view('withdraw/cari_list_bank', $response);
        } else {
            $response = [
                'status' => 'errors',
                'data' => '',
                'message' =>  $cari . ' tidak dapat ditemukan'
            ];
        }

        // Return or use the transformed list
        return $this->response->setJSON($response);
    }

    public function riwayat_withdraw()
    {
        $data = [
            'title' => 'Lainnya',
            'active' => 'lainnya',
            'username' => 'Ahmad Haris',
            'saldo' => 100000,
            'transaksi' => 2500000,
        ];
        return view('withdraw/riwayat', $data);
    }
    public function riwayat_setor()
    {
        $data = [
            'title' => 'Lainnya',
            'active' => 'lainnya',
            'username' => 'Ahmad Haris',
            'saldo' => 100000,
            'transaksi' => 2500000,
        ];
        return view('setor/riwayat', $data);
    }
}
