<?php

namespace App\Models;

use CodeIgniter\Model;

class Pertemuan4QuizModel extends Model
{
    protected $table = 'pelanggan';
    protected $allowedFields = ['nomor_pelanggan', 'nama_pelanggan', 'tgl_lahir', 'jenis_keanggotaan', 'alamat', 'telp'];

    public function getData()
    {
        return $this->findAll();
    }

}
