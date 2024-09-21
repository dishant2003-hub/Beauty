<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');

        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        // $this->load->view('backend/auth_login_cover');
        $this->load->view('backend/layout/header');
        $this->load->view('backend/layout/footer');
    }

    public function logincover()
    {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/layout/footer');
    }

    public function process()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('password');
        // print_r($user);
        // print_r($pass);die;  
        if ($user == 'admin' & $pass == '123'){
            // $this->load->view('backend/layout/header');
            redirect('backend/home/logincover');
        } else {
            echo "Fail";
        }
    }

    
}
