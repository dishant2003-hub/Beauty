<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    // change event and ajax call
    public function __construct()
    {
        parent::__construct();
        $this->load->model('select');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function Productadd()   
    {
        $this->load->view('backend/layout/header');

        $sql = "SELECT * FROM `product` WHERE category = 0";
        $test = $this->db->query($sql);
        $row['result'] = $test->result_array();
        // echo '<pre>'; print_r($row);die;                 

        $this->load->view('backend/product/add', $row);
        $this->load->view('backend/layout/footer');
    }
 
    // --------- table --------------
    public function Productlist()
    {    
        $this->load->view('backend/layout/header');        

        $config["base_url"]  = base_url() . 'backend/product/Productlist';
        $config["total_rows"] =  $this->select->countAll('product');
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2))? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['student'] = $this->select->get_students($config["per_page"], $page);
       
        //  echo "<pre>";print_r($data);die;

        $this->load->view('backend/product/list', $data);
        $this->load->view('backend/layout/footer');
    }

    public function add_insert($id = "")
    {
        if ($this->input->post('submit')) { 
            // echo "<pre>";
            // print_r($_POST);
            // print_r($_FILES);
            // die;

            $id = $this->input->post('id');
  
            $data = array(
                'category' => $this->input->post('Category'),
                'subcategory' => $this->input->post('Subcategory'),
                'productname' => $this->input->post('Pname'),
                'price' => $this->input->post('Productprice'), 
                'description' => $this->input->post('Description'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            if ($id != "") {
                $this->db->where('id', $id);
                $this->db->update('product', $data);
                $last_id = $id;
            } else {
                $last_id = $this->select->insert($data);
            }

            if (!empty($last_id)) {
                // echo "<pre>";
                // print_r($_POST);
                // print_r($_FILES);
                // die;

                if (!empty($_FILES['images']['name'])) {

                    $nama_array = array();
                    $count = count($_FILES["images"]["size"]);

                    // print_r($count);die;

                    foreach ($_FILES as $key => $value) {

                        for ($i = 0; $i <= $count - 1; $i++) {
                            if ($_FILES['images']['error'][$i] == 0 ) {
                              
                                $nama = $value["name"][$i];
                               
                                $config = array(
                                    'upload_path' => PRODUCT . $id,
                                    'allowed_types' => "jpg|png|jpeg",
                                    'overwrite' => true,
                                    'remove_spaces' => true,
                                    'max_size' => 600,
                                    'max_width' => 800,
                                    'max_height' => 600,
                                );

                                $this->upload->initialize($config);

                                foreach ($_FILES['images'] as $key => $val) {
                                    $i = 1;
                                    foreach ($val as $v) {
                                        $field_name = "file_" . $i;
                                        $_FILES[$field_name][$key] = $v;
                                        $i++;
                                    }
                                }
                                // ($_FILES['images']);
                                $img_data = $_FILES['images']['name'];
                                // echo "<pre>";print_r($img_data);die;

                                $this->select->img_insert($img_data, $last_id);  // 67
                            }
                        }
                    }
                }
            }
            redirect('backend/product/Productlist');
        }
    }

    public function update($id = "")
    {
            // print_r($id);die;
        $this->load->view('backend/layout/header');

        $row['result'] = $this->select->getRow('product', array('id' => $id));
        // echo "<pre>";print_r($row);die;

        $sql = "SELECT * FROM `product` WHERE category = 0";
        $test = $this->db->query($sql);
        $row['datares'] = $test->result_array();
        // echo '<pre>'; print_r($row);die;

        $this->load->view('backend/product/add', $row);

        if ($id != "") {
            //  echo "<pre>";print_r($id);die;

            if (!empty($_POST)) {
                // echo '<pre>';
                // print_r($_POST);
                // print_r($_FILES);
                // die;
                $updateData = array(
                    'Category' => $this->input->post('category'),
                    'Subcategory' => $this->input->post('subcategory'),
                    'Pname' => $this->input->post('productname'),
                    'Productprice' => $this->input->post('price'),
                    'Description' => $this->input->post('description'),
                );

                $this->select->update_data($id, $updateData);

                redirect('backend/product/Productlist');
            }  
        }
        $this->load->view('backend/layout/footer');
    }

    // ----------- Delete --------------
    public function delete($id)
    {
        // print_r($id);die;
        $this->select->deleted($id);
        redirect('backend/product/Productlist');
    }

    // -------- Image Delete---------
    public function deleteimage()
    {
        $deleteid  = $this->input->post('id');
        if ($this->db->delete('product_img', array('id' => $deleteid))) {
            return true;
        } else {
            return false;
        }
    }

    // -------- ajax Checkbox ------------
    public function update_cat_status()
    {
        $id = $this->input->post('id');  
        $status = $this->input->post('status');
        $result = $this->select->active($id, $status);
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

    // -------- sub category ---------
    public function sub_menu_change() 
    {
        $id = $this->input->post('id');
        $data = $this->select->actived($id);
        echo json_encode($data);
    }
}
