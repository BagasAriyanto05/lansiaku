<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Models\LansiaModel;
use App\Models\PerawatModel;

class Admin extends BaseController
{
    public $tb_lansia;
    public $tb_kegiatan;
    public $tb_perawat;
    public function __construct()
    {
        $this->tb_lansia = new LansiaModel();
        $this->tb_kegiatan = new KegiatanModel();
        $this->tb_perawat = new PerawatModel();
    }

    public function index()
    {
        $data = [
            "perawat" => $this->tb_perawat->getAll(),
            "lansia" => $this->tb_lansia->getAll()
        ];
        return view('admin/index', $data);
    }

    public function adminPerawat()
    {
        $data = [
            "perawat" => $this->tb_perawat->getAll()
        ];

        // dd($data['perawat']);
        return view('admin/perawat', $data);
    }


    function addAdminPerawat()
    {
        $nama = $_POST['nama'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $id = time();

        $data = [
            'id' => $id,
            'nama' => $nama,
            'role' => $role,
            'password' => $password
        ];

        $this->tb_perawat->insertData($data);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dimasukan...</b></div>');
        return redirect()->to('admin/perawat');
    }


    function updateAdminPerawat($id)
    {
        $nama = $_POST['nama'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $id = $id;

        $data = [
            'nama' => $nama,
            'role' => $role,
            'password' => $password
        ];

        $this->tb_perawat->updateData($id, $data);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Diperbarui...</b></div>');
        return redirect()->to('admin/perawat');
    }


    function deleteAdminPerawat($id)
    {
        $this->tb_perawat->deleteData($id);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dihapus...</b></div>');
        return redirect()->to('admin/perawat');
    }

    public function adminLansia()
    {
        $data = [
            "lansia" => $this->tb_lansia->getAll()
        ];
        return view('layout/lansia', $data);
    }

    public function addAdminLansia()
    {
        // if (empty($_POST['nama'] )) {
        //     session()->setFlashdata('message', '<br><div class="alert alert-danger" style="font-color:white"><b>Masukan nama...</b></div>');
        //     return redirect()->to('admin/lansia');
        // } else if(empty($_POST['bb'])){

        // }
        $nama = $_POST['nama'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        $usia = $_POST['usia'];
        $jk = $_POST['jk'];
        $id = time();

        $data = [
            'id' => $id,
            'nama' => $nama,
            'bb' => $bb,
            'tb' => $tb,
            'usia' => $usia,
            'jk' => $jk
        ];
        $this->tb_lansia->insertData($data);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dimasukan...</b></div>');
        return redirect()->to('admin/lansia');
    }

    public function updateAdminLansia($id)
    {
        // if (empty($_POST['nama'] )) {
        //     session()->setFlashdata('message', '<br><div class="alert alert-danger" style="font-color:white"><b>Masukan nama...</b></div>');
        //     return redirect()->to('admin/lansia');
        // } else if(empty($_POST['bb'])){

        // }
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
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Diperbarui...</b></div>');
        return redirect()->to('admin/lansia');
    }

    public function deleteAdminLansia($id)
    {
        $this->tb_lansia->deleteData($id);
        $this->tb_kegiatan->deleteDataKegiatan($id);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dihapus...</b></div>');
        return redirect()->to('admin/lansia');
    }

    public function detailLansia($id)
    {
        $data = [
            "kegiatan" => $this->tb_kegiatan->getAllSpesifik($id),
            "lansia" => $this->tb_lansia->getAllSpesifik($id)
        ];
        return view('layout/detail-lansia', $data);
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
        return redirect()->to("admin/lansia/detail-lansia/$id");
    }

    public function addKegiatanLansia()
    {

        $tanggal = $_POST['tanggal'];
        $mulai = $_POST['mulai'];
        $selesai = $_POST['selesai'];
        $kegiatan = $_POST['kegiatan'];
        $id = time();
        $id_lansia = $_POST['id_lansia'];

        $data = [
            'id' => $id,
            'tanggal' => $tanggal,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'kegiatan' => $kegiatan,
            'id_lansia' => $id_lansia
        ];
        $this->tb_kegiatan->insertData($data);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dimasukan...</b></div>');
        return redirect()->to("admin/lansia/detail-lansia/$id_lansia");
    }


    function editKegiatanLansia($id)
    {
        $tanggal = $_POST['tanggal'];
        $mulai = $_POST['mulai'];
        $selesai = $_POST['selesai'];
        $kegiatan = $_POST['kegiatan'];
        $id = $id;
        $id_lansia = $_POST['id_lansia'];

        $data = [
            'tanggal' => $tanggal,
            'mulai' => $mulai,
            'selesai' => $selesai,
            'kegiatan' => $kegiatan,
            'id_lansia' => $id_lansia
        ];
        $this->tb_kegiatan->updateData($id, $data);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Diperbarui...</b></div>');
        return redirect()->to("admin/lansia/detail-lansia/$id_lansia");
    }


    public function deleteDetailLansia($id, $id_lansia)
    {

        $this->tb_kegiatan->deleteData($id);
        session()->setFlashdata('message', '<br><div class="alert alert-success" style="font-color:white"><b>Data Berhasil Dihapus...</b></div>');
        return redirect()->to("admin/lansia/detail-lansia/$id_lansia");
    }
}
