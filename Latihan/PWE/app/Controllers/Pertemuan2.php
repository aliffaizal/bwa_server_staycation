<?php

namespace App\Controllers;

use App\Models\Pertemuan2Model;

class Pertemuan2 extends BaseController
{
    protected $pertemuan2;

    public function __construct()
    {
        $this->pertemuan2 = new Pertemuan2Model();
    }

    public function index()
    {
        // $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Pertemuan 2',
            'pelanggan' => $this->pertemuan2->getData()
        ];
        return view('/Pertemuan2/index', $data);
    }
}