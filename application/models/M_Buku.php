<?php

/**
 * @property db $db
 */

class M_Buku extends CI_Model
{
    private $table = 'tabel_buku';
    
    public function get_buku($search = "", $sort = "")
    {
        $this->db->like('judul', $search);
        $this->db->or_like('penulis', $search);
        if ($sort) {
            $this->db->order_by($sort);
        }
        return $this->db->get($this->table)->result_array();
    }

    public function insert_buku($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_buku($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_buku($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_satu_buku($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row_array();
    }
}
