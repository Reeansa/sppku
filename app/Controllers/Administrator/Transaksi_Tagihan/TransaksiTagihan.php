<?php

namespace App\Controllers\Administrator\Transaksi_Tagihan;

use App\Controllers\BaseController;

class TransaksiTagihan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Transaksi Tagihan',
        ];
        return view('administrator/pages/transaksi_tagihan/index', $data);
    }
}
