<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'tajuk' => 'Beranda',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('layouts/sidebar', $data);
        echo view('beranda_view', $data);
        echo view('layouts/footer');
    }
}
