<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Model
{
    function insert($data)
    {
        // echo "<pre>";print_r($data);die;
        $result = $this->db->insert('support', $data);
        // echo "<pre>";print_r($result);die;
        return $data;
    }

    // --------- Support Table ---------  

    public function getAll($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }

    // -------- backend detail table ---------
    public function get_count()
    {
        return $this->db->count_all("support");
    }
    public function get_students($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("support");
        return $query->result();
    }

    // --------- Support delete ---------  
    public function delete($id)
    {
        return $this->db->delete('support', ['id' => $id]);
    }

    // --------- Support update ---------  
    public function get_counts()
    {
        return $this->db->count_all("contact");
    }
    public function get_student($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("contact");
        return $query->result();
    }
}
