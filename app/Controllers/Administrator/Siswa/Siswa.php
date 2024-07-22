<?php

namespace App\Controllers\Administrator\Siswa;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/siswa/index');
    }
    
    public function create() {
        return view('administrator/pages/siswa/create');
    }
}
