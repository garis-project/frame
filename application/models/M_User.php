<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class M_User extends CI_Model
{
    private $table = "tb_user";

    public function select()
    {
        return $this->db->select('*')
            ->get($this->table)->result();
    }
}
