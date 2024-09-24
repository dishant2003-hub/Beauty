<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beauty extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart');
        $this->load->model('models');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->load->view('frontend/layout/header');

        $userdata = $this->session->userdata('user');

        $sql = "SELECT * FROM `category` WHERE Parent = 0";
        $test = $this->db->query($sql);
        $row['datares'] = $test->result_array();

        $sql1 = "SELECT * FROM category";
        $test = $this->db->query($sql1);
        $row['get_all_category'] = $test->result_array();

        $this->load->view('frontend/index', $row);
        $this->load->view('frontend/layout/footer');
    }

    // --------- pagination category ------------
    public function category()
    {
        $this->load->view('frontend/layout/header');
  
        $config["base_url"]  = base_url() . 'beauty/category';  
        $config["total_rows"] =  $this->cart->get_count();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['student'] = $this->cart->get_students($config["per_page"], $page);

        $this->load->view('frontend/category', $data);
        $this->load->view('frontend/layout/footer');
    }


    public function support()
    {
        $this->load->view('frontend/layout/header');

        $data['result'] = $this->cart->getAll('support');

        $this->load->view('frontend/support', $data);
        $this->load->view('frontend/layout/footer');
    }
    public function contact()
    {
        $this->load->view('frontend/layout/header'); 
        $this->load->view('frontend/contact_us');
        $this->load->view('frontend/layout/footer');
    }

    public function contact_form()
    {
        if ($this->input->post('submit')) {

            $data = array(
                'fname' => $this->input->post('firstname'),
                'lname' => $this->input->post('lastname'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'subject' => $this->input->post('subject'),
                'description' => $this->input->post('message'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $contact = $this->cart->contact_insert($data);
        }
        redirect('beauty/contact');
    }

    public function vision()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/vision');
        $this->load->view('frontend/layout/footer');
    }
    public function privacypolicy()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/privacy_policy');
        $this->load->view('frontend/layout/footer');
    }
    public function cookiepolicy()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/cookie_policy');
        $this->load->view('frontend/layout/footer');
    }
    public function refundpolicy()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/refund_policy');
        $this->load->view('frontend/layout/footer');
    }
    public function termsservices()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/terms_services');
        $this->load->view('frontend/layout/footer');
    }
    public function shipping()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/shipping');
        $this->load->view('frontend/layout/footer');
    }

    // ------ index page direct add to cart ------------
    public function direct_cart($id)
    {
        $result = $this->cart->parent($id);

        $id = $result['id'];
        $image = $result['image'];
        $name = $result['name'];
        $price = $result['price'];
        $quantity = '';
        $total = $result['price'];

        $cart_productadd = array(
            'id' => $id,
            'image' => $image,
            'name' => $name,
            'price' => $price,
            'quantity' => 1,
            'total' => $total,
        );

        $is_product_exist = 0;
        $total = 0;

        $cartdata = $this->session->userdata('cartdata');  // session get data

        if (!empty($cartdata)) {
            foreach ($cartdata as $key => $row) {
                if ($cart_productadd['id'] == $row['id']) {
                    $quantity = ($row['quantity'] + 1);
                    $total = ($row['total'] + $row['price']);
                    $_SESSION['cartdata'][$key]['quantity'] = $quantity;
                    $_SESSION['cartdata'][$key]['total'] = $total;
                    $is_product_exist = 1;
                }
            }
        }
        if ($is_product_exist == 0) {
            if (!empty($cartdata)) {
                $cartdata = array_push($_SESSION['cartdata'], $cart_productadd);
            } else {
                $this->session->set_userdata('cartdata', array($cart_productadd));
            }
        }

        redirect('beauty/cart');
    }


    // ---------- category page select, add to cart ------------
    public function product($id)
    {
        $this->load->view('frontend/layout/header');

        $sql = "SELECT * FROM `category` WHERE id = $id";
        $test = $this->db->query($sql);
        $row['datares'] = $test->row_array();

        $sql1 = "SELECT * FROM category";
        $test = $this->db->query($sql1);
        $row['get_all_category'] = $test->result_array();

        $this->load->view('frontend/product', $row);
        $this->load->view('frontend/layout/footer');
    }

    // --------- cart data ------------
    public function cart()
    {
        if (!empty($this->input->post('submit'))) {

            $id = $this->input->post('id');
            $image = $this->input->post('image');
            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $quantity = $this->input->post('qty');
            $total = $this->input->post('price');

            // unset($_SESSION['cartdata']); die();    
            $cart_product = array(
                'id' => $id,
                'image' => $image,
                'name' => $name,
                'price' => $price,
                'quantity' => 1,
                'total' => $total,
            );

            $is_product_exist = 0;
            $total = 0;

            $cartdata = $this->session->userdata('cartdata');  // session get data

            if (!empty($cartdata)) {
                foreach ($cartdata as $key => $row) {
                    if ($cart_product['id'] == $row['id']) {
                        $quantity = ($row['quantity'] + 1);
                        $total = ($row['total'] + $row['price']);
                        $_SESSION['cartdata'][$key]['quantity'] = $quantity;
                        $_SESSION['cartdata'][$key]['total'] = $total;
                        $is_product_exist = 1;
                    }
                }
            }
            if ($is_product_exist == 0) {
                if (!empty($cartdata)) {
                    $cartdata = array_push($_SESSION['cartdata'], $cart_product);
                } else {
                    $this->session->set_userdata('cartdata', array($cart_product));
                }
            }
        }

        if (!empty($this->input->post('submit_cart'))) {

            $proceed = $this->session->userdata('data');
            $this->session->set_userdata('data', array($proceed));
        }

        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/cart');
        $this->load->view('frontend/layout/footer');
    }

    // ---------  image delete cart ---------
    function remove($id)
    {
        $this->session->userdata('cartdata');
        unset($_SESSION['cartdata']);
        redirect('beauty/cart');
    }


    // --------- shopping data insert ----------------
    public function shopdata($id = "")
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');

            $data = array(
                'name' => $this->input->post('Name'),
                'email' => $this->input->post('Email'),
                'phone' => $this->input->post('Phone'),
                'address' => $this->input->post('Address'),
                'city' => $this->input->post('City'),
                'zipcode' => $this->input->post('Zipcode'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
            if ($id != "") {
                $last_id = $id;
            } else {
                $last_id = $this->cart->insert_shopping($data);
            }

            if (!empty($last_id)) {

                $cartdata = $this->session->userdata('cartdata');
                foreach ($cartdata as $orderitem) {

                    $order = array(
                        'product_id' => $orderitem['id'],
                        'name' => $orderitem['name'],
                        'image' => $orderitem['image'],
                        'price' => $orderitem['price'],
                        'quantity' => $orderitem['quantity'],
                        'total' => $orderitem['total'],
                    );
                    $this->cart->order_item($order, $last_id);
                }
            }
        }
        redirect('');
    }


    // -------- Sign-in-register ------------------

    public function signin()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/auto_signin');
        $this->load->view('frontend/layout/footer');
    }

    public function register_form()
    {
        $this->load->view('frontend/layout/header');
        $this->load->view('frontend/registration_form');
        $this->load->view('frontend/layout/footer');
    }

    // ------- register insert data ---------
    public function register()
    {
        if ($this->input->post('submit')) {

            $data = array(
                'fname' => $this->input->post('Firstname'),
                'lname' => $this->input->post('Lastname'),
                'email' => $this->input->post('Email'),
                'dob' => $this->input->post('Dob'),
                'phone' => $this->input->post('Mobile'),
                'password' => $this->input->post('Password'),
                'gender' => $this->input->post('Gender'),
                'address' => $this->input->post('Address'),
                'zipcode' => $this->input->post('Zipcode'),
                'city' => $this->input->post('City'),
            );
            $this->cart->register_data($data);
        }
        redirect('beauty/signin');
    }

    // ------------ signin check -----------
    public function signin_data()
    {
        if ($this->input->post('submit')) {

            $email = $this->input->post('Email');
            $password = $this->input->post('Password');

            if (!empty($email)) {
                $this->cart->login_email($email);  
            }

            if (!empty($email) && !empty($password)) {
                $result = $this->cart->login_password($email, $password);
            }

            if (!empty($email)) {
                $data = $this->cart->login_id($email);
                $id = $data['id'];
            }

            $data = array(
                'id' => $id,
                'email' => $email,
                'password' => $password,
            );

            $this->session->set_userdata('user', $data);
            $userdata = $this->session->userdata('user');

            if (!empty($result)) {
                redirect('');
            } else {
                redirect('beauty/signin');
            }
        }
    }

    // -------- account details -----------
    public function my_account()
    {
        $this->load->view('frontend/layout/header');

        $userdata = $this->session->userdata('user');

        if (empty($userdata)) {
            redirect('');
        }

        $id = $userdata['id'];
        $result['array'] = $this->cart->account($id);

        $email = $userdata['email'];
        $arrow = $this->cart->product_history($email);
        $id = $arrow['id'];

        $result['order'] = $this->cart->history('order_item', array('order_id' => $id));

        $this->load->view('frontend/myaccount', $result);
        $this->load->view('frontend/layout/footer');
    }

    // ------ log out ---------
    public function logout()
    {
        $this->session->userdata('user');
        unset($_SESSION['user']);
        redirect('');
    }

    // -------- profile ------------
    public function profile()
    {
        $this->load->view('frontend/layout/header');

        $userdata = $this->session->userdata('user');
        $id = $userdata['id'];
        $result['array'] = $this->cart->account($id);

        $this->load->view('frontend/profile', $result);
        $this->load->view('frontend/layout/footer');
    }

    // -------- Address ------------
    public function address()
    {
        $this->load->view('frontend/layout/header');

        $userdata = $this->session->userdata('user');
        $id = $userdata['id'];
        $result['array'] = $this->cart->account($id);

        $this->load->view('frontend/address', $result);
        $this->load->view('frontend/layout/footer');
    }
}
