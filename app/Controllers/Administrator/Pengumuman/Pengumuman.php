<?php

namespace App\Controllers\Administrator\Pengumuman;

use App\Controllers\BaseController;

class Pengumuman extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/pengumuman/index');
    }
}
