<?php

namespace App\Controllers\Administrator\Auth;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index(): string
    {
        return view('administrator/pages/auth/register');
    }
}
