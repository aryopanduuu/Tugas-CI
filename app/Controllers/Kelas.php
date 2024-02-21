<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'tajuk' => 'Pertemuan',
            'subtajuk' => 'Jadwal Pertemuan',
            'MatkulName' => 'Nama Mata Kuliah',
            'DosenName' => 'Nama Dosen',
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar');
        echo view('layouts/sidebar', $data);
        echo view('kelas_view', $data);
        echo view('layouts/footer');
    }
}
