<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cartdata extends CI_Model
{
    // --------- Customer Table use ---------  

    public function getAll($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }

    // -------- backend order detail table ---------
    public function get_count()
    { 
        return $this->db->count_all("order_details");
    }
    public function get_students($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("order_details");
        return $query->result();
    }


    // -------- order item name show cart_product ---------------
    function parent($id)
    {
        // echo "<pre>";print_r($id);die; 
        $this->db->where('id', $id);
        $query = $this->db->get('order_details'); 
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }

    function total($id)
    {
        // echo "<pre>";print_r($id);die; 
        $this->db->where('order_id', $id);
        $query = $this->db->get('order_item');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }

    
}
