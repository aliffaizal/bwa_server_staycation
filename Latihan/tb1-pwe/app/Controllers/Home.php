<?php

namespace App\Controllers;

use App\Models\TugasBesar1;
use \Mpdf\Mpdf;

class Home extends BaseController
{
    protected $tugasBesar;

    public function __construct()
    {
        $this->tugasBesar = new TugasBesar1();
    }
    public function index()
    {
        $data = [
            'pelanggan' => $this->tugasBesar->getData()
        ];
        return view('/index', $data);
    }

    public function datapdf()
    {
        $mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('TUGAS BESAR 2 PWE
Kelompok 4');
        return redirect()->to($mpdf->Output('filename.pdf','I'));
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data ',
        ];

        return view('/create', $data);
    }

    public function save()
    {
        $this->tugasBesar->save([
            'nomor_pelanggan' => $this->request->getVar('nomor_pelanggan'),
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_keanggotaan' => $this->request->getVar('jenis_keanggotaan'),
            'alamat' => $this->request->getVar('alamat'),
            'telp' => $this->request->getVar('telp')
        ]);

        session()->setFlashdata('pesan', 'Kegiatan berhasil ditambah.');

        return redirect()->to('/home');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Kegiatan',
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->tugasBesar->getData($id)
        ];

        return view('/edit', $data);
    }

    public function update($id)
    {
        $this->tugasBesar->save([
            'id' => $id,
            'nomor_pelanggan' => $this->request->getVar('nomor_pelanggan'),
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'jenis_keanggotaan' => $this->request->getVar('jenis_keanggotaan'),
            'alamat' => $this->request->getVar('alamat'),
            'telp' => $this->request->getVar('telp')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/home');
    }

    public function delete($id)
    {
        $this->tugasBesar->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/home');
    }

    public function grafik()
    {
        return view('/grafik');
    }

}