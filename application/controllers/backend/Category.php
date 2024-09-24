<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }
     
    // --------- Category Form ---------
    public function category_add()
    {
        $this->load->view('backend/layout/header');

        $sql = "SELECT * FROM `category` WHERE Parent = 0";   
        $test = $this->db->query($sql);
        $row['datares'] = $test->result_array();

        $this->load->view('backend/category/add', $row);
        $this->load->view('backend/layout/footer');
    }

    // -------- Category Table ---------
    public function category_table() 
    {  
        $this->load->view('backend/layout/header');

        $config["base_url"]  = base_url() . 'backend/category/category_table';
        $config["total_rows"] = $this->models->countAll('category');
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links(); 
        $data['student'] = $this->models->get_students($config["per_page"], $page);

        $this->load->view('backend/category/table', $data);
        $this->load->view('backend/layout/footer');
    }

    //  --------- insart --------------
    public function add_insert($id = "")
    {   
        if ($this->input->post('submit')) {

            $id = $this->input->post('id');
            $data['parent'] = $this->input->post('parent');
            $data['name'] = $this->input->post('name');

            if (!empty($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $temp_file = $_FILES['image']['tmp_name'];
                $img_name = "image_" . mt_rand(10000, 999999999) . time();
                $path = $_FILES['image']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $data['image'] = $img_name . "." . $ext;
                $fileurl = UPLOAD . $data['image'];
                if (isset($data['image']) && $data['image'] != "" && file_exists(PRODUCT . $data['image'])) {
                    unlink(PRODUCT . $data['image']);
                }
            }
            move_uploaded_file($temp_file, $fileurl);
        
            $data['price'] = $this->input->post('Productprice');
            $data['description'] = $this->input->post('description');
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            
            if ($id != "") {
                $this->db->where('id', $id);
                $this->db->update('category', $data);
            } else {
                $response = $this->models->insert($data);
            }
           
        } 
        redirect('backend/category/category_table');
    }

    // --------- update ----------   
    public function update($id = "")   
    {
        $row['result'] = $this->models->getRow('category', array('id' => $id));

        $sql = "SELECT * FROM `category` WHERE Parent = 0";
        $test = $this->db->query($sql);
        $row['datares'] = $test->result_array();

        $this->load->view('backend/layout/header');
        $this->load->view('backend/category/add', $row);
        $this->load->view('backend/layout/footer');
    }


    // ----- delete --------
    public function delete($id)
    {
        $this->models->deleted($id);
        redirect('backend/category/category_table');
    }

    // -------- ajax ------------
    public function update_cat_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $result = $this->models->active($id, $status);
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
