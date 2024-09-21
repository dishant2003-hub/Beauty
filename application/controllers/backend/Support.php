<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Support extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('information');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function supports()
    {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/information/support');
        $this->load->view('backend/layout/footer');
    }
    public function support_insert($id = "")
    {
        if ($this->input->post('submit')) {  
            // echo "<pre>";print_r($_POST);die;
            $data = array(
                'heading' => $this->input->post('name'),
                'description' => $this->input->post('description'),
            );
            // echo "<pre>";print_r($data);die;

            if ($id != "") {
                $this->db->where('id', $id);
                $this->db->update('support', $data);
            } else {
                $this->information->insert($data);
            }
            //    echo "<pre>";print_r($id);die;

            redirect('backend/support/support_table');
        }
    }
    public function support_table()
    {
        $this->load->view('backend/layout/header');

        $config["base_url"]  = base_url() . 'backend/support/support_table';
        $config["total_rows"] = $this->information->get_count();
        // echo "<pre>";print_r($config["total_rows"]);die;    
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['student'] = $this->information->get_students($config["per_page"], $page);
       
        //  echo "<pre>";print_r($data);die;

        $this->load->view('backend/information/table', $data);
        $this->load->view('backend/layout/footer');
    }
    public function delete($id)
    {
        // echo "<pre>";print_r($id);die;

        $this->information->delete($id);

        redirect('backend/support/support_table');
    }

    public function update($id = "")
    {
        // echo "<pre>";print_r($id);die;

        $row['result'] = $this->information->getRow('support', array('id' => $id));
        // echo "<pre>";print_r($row);die;

        $this->load->view('backend/layout/header');
        $this->load->view('backend/information/support', $row);
        $this->load->view('backend/layout/footer');
    }

    public function contacts()
    {
        $this->load->view('backend/layout/header');

        $config["base_url"]  = base_url() . 'backend/support/contacts';
        $config["total_rows"] = $this->information->get_counts();
        // echo "<pre>";print_r($config["total_rows"]);die;    
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['student'] = $this->information->get_student($config["per_page"], $page);
       
        //  echo "<pre>";print_r($data);die;

        $this->load->view('backend/information/contact_table', $data);
        $this->load->view('backend/layout/footer');
    }
}
