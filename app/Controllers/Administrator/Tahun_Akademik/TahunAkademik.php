<?php

namespace App\Controllers\Administrator\Tahun_Akademik;

use App\Controllers\BaseController;

class TahunAkademik extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/tahun_akademik/index');
    }
}
