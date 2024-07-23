<?php

namespace App\Controllers\Administrator\Atur_Item_Tagihan;

use App\Controllers\BaseController;

class AturItemTagihan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Atur Item Tagihan',
        ];
        return view('administrator/pages/atur_item_tagihan/index', $data);
    }

    public function show() {
        $data = [
            'title' => 'Atur Item Tagihan',
        ];
        return view('administrator/pages/atur_item_tagihan/show', $data);
    }
}
