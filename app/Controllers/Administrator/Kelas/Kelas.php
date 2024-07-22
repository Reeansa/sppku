<?php

namespace App\Controllers\Administrator\Kelas;

use App\Controllers\BaseController;

class Kelas extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/kelas/index');
    }
}
