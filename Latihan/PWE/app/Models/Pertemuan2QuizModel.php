<?php

namespace App\Models;

use CodeIgniter\Model;

class Pertemuan2QuizModel extends Model
{

    public function getData()
    {
        $stok = array('15');
        $builder = $this->db->table('inventory');
        $builder->where('stok_barang >' , $stok);
        $data = $builder->get()->getResult();
        return $data;
    }
}
