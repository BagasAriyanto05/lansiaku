<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\LansiaModel;

class Lansia extends BaseController
{
    public $tb_lansia;
    public $tb_kegiatan;
    public function __construct()
    {
        $this->tb_lansia = new LansiaModel();
        $this->tb_kegiatan = new KegiatanModel();
    }

    public function detailLansia($id)
    {
        $data = [
            "kegiatan" => $this->tb_kegiatan->getAllSpesifik($id),
            "lansia" => $this->tb_lansia->getAllSpesifik($id)
        ];
        return view('/lansia/detail-lansia', $data);
    }

    function updateDetailLansia($id)
    {
        $nama = $_POST['nama'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        $usia = $_POST['usia'];
        $jk = $_POST['jk'];
        $id = $id;

        $data = [
            'nama' => $nama,
            'bb' => $bb,
            'tb' => $tb,
            'usia' => $usia,
            'jk' => $jk
        ];
        $this->tb_lansia->updateData($id, $data);
        session()->setFlashdata('message', '<div class="alert alert-success" style="font-color:white"><b>Data Berhasil Diperbarui...</b></div>');
        session()->setFlashdata('hal', 'biodata');
        return redirect()->to("lansia/$id");
    }
}
