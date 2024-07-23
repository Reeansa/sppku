<?php

namespace App\Controllers\Administrator\Reminder_Tagihan;

use App\Controllers\BaseController;

class ReminderTagihan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Reminder Tagihan',
        ];
        return view('administrator/pages/reminder_tagihan/index', $data);
    }
}
