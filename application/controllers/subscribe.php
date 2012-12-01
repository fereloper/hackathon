<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscribe extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("subscription_model");
        $this->load->model("city_model");
    }
    public function index(){
        $this->subsciption_form();
    }
    public function subsciption_form($mssg=null) {

        $data['cities'] = $this->city_model->get_cities();
        $data['baseurl'] = $this->config->item('base_url');
        $data['header'] = $this->load->view("header", $data, TRUE);
        $data['sidebar'] = $this->load->view("sidebar", $data, TRUE);
        if(isset($mssg)){
            $data['mssg']=$mssg;
        }
        $data['content'] = $this->load->view("user/subscription", $data, TRUE);

        $this->load->view('index', $data);
    }
    public function subscribe_post(){
        if($subscription_data=  $this->input->post()){
            $this->subscription_model->do_subscribe($subscription_data);
            $this->subsciption_form("Subscription Done!");
            

            
        }
    }

}