<?php

/**
 * @property db $db
 */

class M_User extends CI_Model
{
    private $table = 'tabel_user';

    public function register($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $user = $this->db->get($this->table)->row_array();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
