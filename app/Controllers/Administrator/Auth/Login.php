<?php

namespace App\Controllers\Administrator\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/auth/login');
    }
}
