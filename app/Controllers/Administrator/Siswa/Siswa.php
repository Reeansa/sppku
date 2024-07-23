<?php

namespace App\Controllers\Administrator\Siswa;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Siswa',
        ];
        return view('administrator/pages/siswa/index', $data);
    }
    
    public function create() {
        return view('administrator/pages/siswa/create');
    }
}
