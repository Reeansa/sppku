<?php

namespace App\Controllers\Administrator\Kelas;

use App\Controllers\BaseController;

class Kelas extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Kelas',
        ];
        return view('administrator/pages/kelas/index', $data);
    }
}
