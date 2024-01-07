<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{

    protected $table = 'tb_kegiatan';
    protected $primaryKey = "id";

    protected $allowedFields = [
        "id",
        "tanggal",
        "kegiatan",
        "mulai",
        "selesai",
        "created_at",
        "id_lansia"
    ];

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getAllSpesifik($id)
    {
        return $this->db->table($this->table)
            ->select('*')
            ->orderBy('id', 'DESC')
            ->where('id_lansia', $id)
            ->get()
            ->getResultArray();
    }

    public function updateData($id, $data)
    {

        return $this->db->table($this->table)
            ->where('id', $id)
            ->set($data)
            ->update();

        // return $this->db->table($this->table)
        //     ->where('kategori', $kategori)
        //     ->update($data);
    }

    public function deleteData($id)
    {
        return $this->db->table($this->table)
            ->where('id', $id)
            ->delete();
    }

    public function deleteDataKegiatan($id)
    {
        return $this->db->table($this->table)
            ->where('id_lansia', $id)
            ->delete();
    }
}
