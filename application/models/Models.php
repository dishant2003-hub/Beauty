<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{

    public function insert($data)    
    {
        $date = $this->db->insert('category', $data);
        // echo "<pre>";
        // print_r($data);die;
        return $date;
    }

    // --------- Table ---------  
    public function countAll($table)
    {
        $this->db->select($table . '.*,dd.name as parent');
        $this->db->from($table);
        $this->db->join('category as dd', 'dd.id = category.parent', 'left'); 
        // echo "<pre>";print_r($this->db->last_query());die;  
        return $this->db->count_all($table);   
    }

    // ------- category pagination -----
    public function get_students($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->select("category.*,dd.name as parent_name")
        ->join('category as dd', 'dd.id = category.parent', 'left')->get("category");
        return $query->result();
    }
 
    // --------- join parent --------
    public function getCategory()
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->join('category as dd', 'dd.id = category.parent');
        $query = $this->db->get();
        $query->result();
    }
  
    // -------- Edit data display -----------

    public function getRow($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);
        if (!empty($where)) {
            $this->db->where($where);   
        }
        return $this->db->get()->row_array();
    }


    function deleted($id)
    {
        return $this->db->delete('category', ['id' => $id]);
    }

    function active($id, $status)
    {
        $sql = $this->db->query("UPDATE category SET `is_active`=" . $status . " WHERE id = " . $id);
    }


  

   






}
