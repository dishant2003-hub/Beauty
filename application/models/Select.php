<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Select extends CI_Model
{

    // ---------- insert data ------------
    public function insert($data)
    {
        $data = $this->db->insert('product', $data);
        $insert_id = $this->db->insert_id();
        // echo "<pre>";  
        // print_r($insert_id);die;
        return $insert_id; 
    }

      // ------- product pagination -----
 
      public function get_students($limit, $start) 
      {
          $this->db->limit($limit, $start);
          $query = $this->db->select("product.*,dd.productname as category, hi.productname as subcategory, pi.image as pi_image")
          ->join('product as dd', 'dd.id = product.category', 'left') 
          ->join('product as hi', 'hi.id = product.subcategory', 'left')
          ->join('product_img as pi', 'pi.product_id = product.id', 'left')
          ->group_by('product.id')
          ->get("product"); 
          return $query->result();
      }


    // -------- multiple image insert data  ----------      
    public function img_insert($img_data, $id)
    {
        if ($id != '') {
            foreach ($img_data as $file) {
                // echo "<pre>";print_r($file);die;
                $file_data = array( 
                    'image' => $file,
                    "product_id" => $id,
                );
                $this->db->insert('product_img', $file_data);
            }
        }
    }

    // ---------- image update  ---------
    public function image_add($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->result_array();
    }

    // ------------ table list ------------          
    public function getAll($table, $where = "",$count = false)
    {
        $this->db->select($table . '.*, dd.productname as category, hi.productname as subcategory, pi.image as pi_image');
        $this->db->from($table);
        $this->db->join('product as dd', 'dd.id = product.category', 'left');
        $this->db->join('product as hi', 'hi.id = product.subcategory', 'left');
        $this->db->join('product_img as pi', 'pi.product_id = product.id', 'left');
        $this->db->group_by('product.id'); // table ma single image ave multiple image no ave
    
        if (!empty($where)) {
            $this->db->where($where);
        }
        // print_r($count);die;
        if($count){
            return $this->db->count_all();     
        }else{
            return $this->db->get()->result_array(); 
        }
    } 
    public function countAll($table, $where = "") 
    {
        $this->db->select($table . '.*, dd.productname as category, hi.productname as subcategory, pi.image as pi_image');
        $this->db->from($table);
        $this->db->join('product as dd', 'dd.id = product.category', 'left');
        $this->db->join('product as hi', 'hi.id = product.subcategory', 'left');
        $this->db->join('product_img as pi', 'pi.product_id = product.id', 'left');
        $this->db->group_by('product.id'); // table ma single image ave multiple image no ave
        // echo "<pre>";print_r($this->db->last_query());die;  

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->count_all($table);     
    }
   
    // --------- join parent --------
    public function getproduct()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product as dd', 'dd.id = product.category');
        $this->db->join('product as na', 'na.id = product.subcategory');
        $this->db->join('product_img as pi', 'pi.product_id = product.id');
        $query = $this->db->get();
        $query->result();
    }

    // -------- Form Edit data display -----------
    public function getRow($table, $where = "")
    {
        $this->db->select('*');
        $this->db->from($table);

        if (!empty($where)) {
            $this->db->where($where);
        }
        return $this->db->get()->row_array(); // row_array single data ave
    }

    // ---------- update data--------
    public function update_data($id, $updateData)
    {
        $this->db->where('id', $id);
        $this->db->update('product', $updateData);
    }

    // -------- delete ----------   
    public function deleted($id)
    {
        return $this->db->delete('product', ['id' => $id]);
    }

    // -------- ajax Checkbox ------------
    function active($id, $status)
    {
        $sql = $this->db->query("UPDATE product SET `is_active`= " . $status . " WHERE id = " . $id);
    }

    // -------- sub category ---------
    function actived($sub)
    {
        $this->db->where('category', $sub);
        return $this->db->get('product')->result_array();
    }

    // public function get_All_record($table, $where = "")     
    // {
    //     $this->db->select($table . '.*,dd.name as parent');
    //     $this->db->from($table);
    //     $this->db->join('category as dd', 'dd.id = category.parent', 'left');
        
    //     if (!empty($where)) {
    //         $this->db->where($where);
    //     }
    // return $this->db->get()->result_array();
    // }
}
