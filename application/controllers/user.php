<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->config->item('base_url');
        $this->load->model("user_model");
        $this->load->library('session');
    }

    public function index() {
        $data['baseurl'] = $this->config->item('base_url');

        $data['header'] = $this->load->view("header", $data, TRUE);
        
        $data['content'] = $this->load->view("home", $data, TRUE);

        $this->load->view('index', $data);
        //$this->loginData();
    }

    public function loginData() {

        $data['baseurl'] = $this->config->item('base_url');

        $data['header'] = $this->load->view("header", $data, TRUE);
        $data['sidebar'] = $this->load->view("sidebar", $data, TRUE);
        $data['content'] = $this->load->view("user/login", $data, TRUE);

        $this->load->view('index', $data);
//        $this->load->view('user/login');
    }

    public function loginInputs() {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $user_data = $this->user_model->login_processing($data);
        if ($user_data) {
            var_dump($this->session->set_userdata($user_data));
            var_dump($this->session->userdata('user_id'));
            die();
            $this->index();
        }
        else{
            $this->loginData();
        }
    }

    public function regData() {
        $data['baseurl'] = $this->config->item('base_url');

        $data['header'] = $this->load->view("header", $data, TRUE);
        $data['sidebar'] = $this->load->view("sidebar", $data, TRUE);
        $data['content'] = $this->load->view("user/registration", $data, TRUE);

        $this->load->view('index', $data);
//        $this->load->view('user/registration');
    }

    public function regInputs() {
        $data['name'] = $this->input->post('name');
        $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');

//        echo "</ pre>";        print_r ($data);        die();
        $ret = $this->user_model->insert_regData($data);
        if ($ret) {
            $this->loginData();
        }
        else{
            echo "Registration failed !!! ";
        }
    }

    

}
