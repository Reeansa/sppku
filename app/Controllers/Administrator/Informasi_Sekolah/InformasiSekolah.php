<?php

namespace App\Controllers\Administrator\Informasi_Sekolah;

use App\Controllers\BaseController;

class InformasiSekolah extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Informasi Sekolah',
        ];
        return view('administrator/pages/informasi_sekolah/index', $data);
    }
}
