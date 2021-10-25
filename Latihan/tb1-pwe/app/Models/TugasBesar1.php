<?php

namespace App\Models;

use CodeIgniter\Model;

class tugasbesar1 extends Model
{
    protected $table = 'pelanggan';
    protected $allowedFields = ['nomor_pelanggan', 'nama_pelanggan', 'tgl_lahir', 'jenis_keanggotaan', 'alamat', 'telp'];

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}
