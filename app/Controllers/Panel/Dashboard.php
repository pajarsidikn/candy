<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => "Dashboard",
            'isi' => "panel/v_dashboard",
        ];
        echo view('layout/v_wrapper', $data);
    }
}
