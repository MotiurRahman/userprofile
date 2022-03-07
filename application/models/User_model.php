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

    public function getEmployeeData($id)
    {

        $query = $this->db->get_where('userinfo', array('id' => $id));
        return $query->result();

    }

    public function updatinfo($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('userinfo', $data);

    }

    public function deleteinfo($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete("userinfo");

    }

    public function login_user($data)
    {

        $query = $this->db->get_where('userinfo', $data);
        return $query->result();

    }

    public function checkinfo($data)
    {

        $this->db->where('employeeID', $data["employeeID"]);
        $this->db->or_where('email', $data["email"]);
        $query = $this->db->get('userinfo');
        return $query->result();

    }

}