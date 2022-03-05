<?php
class User_model extends CI_Model
{

    public function insertinfo($data)
    {

        return $this->db->insert('userinfo', $data);

    }

    public function getAllEmployee()
    {

        $query = $this->db->get('userinfo');
        return $query->result();

    }

}