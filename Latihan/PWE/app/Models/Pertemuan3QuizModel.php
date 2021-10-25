<?php

namespace App\Models;

use CodeIgniter\Model;

class Pertemuan3QuizModel extends Model
{
    var $warna = "Hitam  ";
    var $merk = "HP  ";
    var $harga = "100000$  ";

    function tampilWarna(){
        echo "warna laptop : " . $this->warna;
    }
    function tampilMerk(){
        echo "merk laptop : " . $this->merk;
    }
    function tampilHarga(){
        echo "harga laptop : " . $this->harga;
    }

}
