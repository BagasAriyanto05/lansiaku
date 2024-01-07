<?php

namespace App\Models;

use CodeIgniter\Model;

class LansiaModel extends Model
{

    protected $table = 'tb_lansia';
    protected $primaryKey = "id";

    protected $allowedFields = [
        "id",
        "nama",
        "bb",
        "tb",
        "usia",
        "jk",
    ];

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getAll()
    {
        return $this->db->table($this->table)
            ->select('*')
            ->orderBy('id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getAllSpesifik($id)
    {
        return $this->db->table($this->table)
            ->select('*')
            ->where('id', $id)
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
}
