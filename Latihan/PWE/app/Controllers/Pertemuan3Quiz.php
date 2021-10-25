<?php

namespace App\Controllers;

use App\Models\Pertemuan3QuizModel;

class Pertemuan3Quiz extends BaseController
{
    protected $pertemuan3quiz;

    public function __construct()
    {
        $this->pertemuan3quiz = new Pertemuan3QuizModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pertemuan 3 Quiz',
            'tampil' => $this->pertemuan3quiz->tampilWarna(),
            'tampil1' => $this->pertemuan3quiz->tampilMerk(),
            'tampil2' => $this->pertemuan3quiz->tampilHarga()
        ];
        return view('/Pertemuan3/index', $data);
    }
}