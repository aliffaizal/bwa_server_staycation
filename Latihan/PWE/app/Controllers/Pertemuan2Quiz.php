<?php

namespace App\Controllers;

use App\Models\Pertemuan2QuizModel;

class Pertemuan2Quiz extends BaseController
{
    protected $pertemuan2quiz;

    public function __construct()
    {
        $this->pertemuan2quiz = new Pertemuan2QuizModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pertemuan 2 Quiz',
            'barang' => $this->pertemuan2quiz->getData()
        ];
        return view('/Pertemuan2/quiz', $data);
    }
}