<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cartdata');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function customer_detail()
    {
        $this->load->view('backend/layout/header');

        $config["base_url"]  = base_url() . 'backend/cart/customer_detail';
        $config["total_rows"] = $this->cartdata->get_count();
        // echo "<pre>";print_r($config["total_rows"]);die;    
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['student'] = $this->cartdata->get_students($config["per_page"], $page);
       
        //  echo "<pre>";print_r($data);die;

        $this->load->view('backend/cart/customer', $data);
        $this->load->view('backend/layout/footer');
    }

    public function customer_order($id)
    {
        // print_r($id);die;
 
        $this->load->view('backend/layout/header');

        $result['arrow'] = $this->cartdata->getAll('order_details', array('id' => $id));
        // echo "<pre>";print_r($result);die;   

        $result['order'] = $this->cartdata->getAll('order_item', array('order_id' => $id));
        // echo "<pre>";print_r($result);die;

        $this->load->view('backend/cart/cart_product', $result);
        $this->load->view('backend/layout/footer');
    }

    public function cart($id)
    {
        // print_r($id);die;
        $result['arrow'] = $this->cartdata->getAll('order_details', array('id' => $id));
        // echo "<pre>";print_r($result);die;

        $result['order'] = $this->cartdata->getAll('order_item', array('order_id' => $id));
        // echo "<pre>";print_r($result);die;

        $this->load->view('backend/cart/cart_print', $result);
    }
}
