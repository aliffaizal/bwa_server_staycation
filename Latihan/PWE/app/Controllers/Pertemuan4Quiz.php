<?php

namespace App\Controllers;

use App\Models\Pertemuan4QuizModel;

class Pertemuan4Quiz extends BaseController
{
    protected $pertemuan4quiz;

    public function __construct()
    {
        $this->pertemuan4quiz = new Pertemuan4QuizModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pertemuan 4',
            'pelanggan' => $this->pertemuan4quiz->getData()
        ];
        return view('/Pertemuan4/index', $data);
    }
}