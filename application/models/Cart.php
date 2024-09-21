<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Model
{


    // ------------ contct insert ----------
    function contact_insert($data)
    {
        // echo "<pre>";print_r($data);die;
        $result = $this->db->insert('contact', $data);
        // echo "<pre>";print_r($result);die;
        return $data;
    }

    // -------- index page direct add to cart ---
    function parent($id)
    {
        // echo "<pre>";print_r($id);die;
        $this->db->where('id', $id);
        $query = $this->db->get('category');        
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;   
        return $result;
    }


    // ------- category pagination -----

    public function get_count()
    {
        return $this->db->count_all("category");
    }
    public function get_students($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("category");
        return $query->result();
    }


    // --------- shopping data insert ---------------- 
    function insert_shopping($data)
    {
        $data = $this->db->insert('order_details', $data);
        $insert_id = $this->db->insert_id();
        // echo "<pre>";print_r($insert_id);die;  
        return $insert_id;
    }

    // --------- shopping product data insert ----------------
    public function order_item($order, $last_id)
    {
        // echo "<pre>";print_r($order);die;

        if ($last_id != '') {
            $file_data = array(
                'order_id' => $last_id,
                'product_id' => $order['product_id'],
                'name' => $order['name'],
                'image' =>  $order['image'],
                'price' => $order['price'],
                'quantity' =>  $order['quantity'],
                'total' => $order['total'],
            );
            $this->db->insert('order_item', $file_data);
        }
    }

    // ------- register insert data ---------
    function register_data($data)
    {
        $array = $this->db->insert('signup', $data);
        // echo "<pre>";print_r($array);die;
        return $array;
    }

    // ------------ signin check -----------
    function login_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('signup');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die; 

        if (empty($result)) {
            redirect('beauty/register_form');
        }
    }
    // ------------ sign in check -----------
    function login_password($email, $password)
    {
        $this->db->where('password', $password);
        $this->db->where('email', $email);
        $query = $this->db->get('signup');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }
    // ------------ sign in check ----------- 
    function login_id($email)
    {
        // echo "<pre>";print_r($email);die;
        $this->db->where('email', $email);
        $query = $this->db->get('signup');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }


    // -------- account details -----------
    function account($id)
    {  
        // echo "<pre>";print_r($id);die;
        $this->db->where('id', $id);
        $query = $this->db->get('signup');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }
    // -------- account details -----------
    function product_history($email)
    {
        // echo "<pre>";print_r($email);die;
        $this->db->where('email', $email);
        $query = $this->db->get('order_details');
        $result = $query->row_array();
        // echo "<pre>";print_r($result);die;
        return $result;
    }
    // -------- account details -----------
    public function history($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }

    // --------- Backend Shop Table  ---------  
    public function getAll($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }
}
