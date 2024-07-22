<?php

namespace App\Controllers\Administrator\Dashboard;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/dashboard/index');
    }
}
