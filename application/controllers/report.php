<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("report_model");
        $this->load->model("city_model");
    }

    public function index() {
        $this->listing();
    }

    public function submit() {
        $data['baseurl'] = $this->config->item('base_url');
        $data['header'] = $this->load->view("header", $data, TRUE);
        $data['sidebar'] = $this->load->view("sidebar", $data, TRUE);
        if ($repot_info = $this->input->post()) {
            $index = 0;
            $file = array();
            foreach ($_FILES as $file_upload) {
                if ($file_upload['name'] != "") {
                    $extension = explode(".", $file_upload['name']);
                    $file[$index]['filename'] = md5($extension['0'] . now()) . "." . $extension[1];
                    $file[$index]['file_type'] = $file_upload['type'];
                    $file[$index]['size'] = $file_upload['size'];
                    move_uploaded_file($file_upload['tmp_name'], "files/" . $file[$index]['filename']);
                    $index++;
                }
            }
            $this->report_model->save_report($repot_info, $file);
            $data['mssg']="Report Submitted!";                           
        } 
        $data['cities']= $this->city_model->get_cities();
        
        $data['thanas']= $this->report_model->get_thana();
        
        $data['content'] = $this->load->view('Report/reporting-form', $data, TRUE);//$this->load->view("home", $data, TRUE);     
        $this->load->view('index', $data);
    }

    public function listing(){
        $data['baseurl'] = $this->config->item('base_url');
        $data['header'] = $this->load->view("header", $data, TRUE);
        $data['cities']= $this->city_model->get_cities();
        $report_counts=$this->report_model->report_count_by_city();
        foreach($report_counts as $count){
        	$data['report_count'][$count['city_id']]=$count['report_count'];
        	
        }
        
        $data['sidebar'] = $this->load->view("sidebar", $data, TRUE);
        
        
        
        $reports=$this->report_model->get_reports();
        foreach ($reports as $report){
            $files=$this->report_model->get_files($report['report_id']);
            $data['reports'][$report['report_id']]['report_data']=$report;
            foreach($files as $file){
                $data['reports'][$report['report_id']]['files'][]=$file;
            }
        }
        $data['content'] = $this->load->view("Report/report-listing", $data, TRUE);
        $this->load->view('user/index2', $data);
//        $this->load->view('Report/report-listing',$data);
    }
    
    public function getThanas()
    {
        $city_id = $this->input->post('city_id');
        $data['thanas'] = $this->city_model->getThana($city_id);
        echo $this->load->view("Report/thana-list", $data);
    }
    
    public function reportGenerate()
    {
        
        
    }
    
    public function getReportGenerate()
    {
        $city_id = $this->input->post('city_id');
        
        $reports = $this->report_model->get_reports($city_id);
       $data=array();
        foreach ($reports as $report){
            $files=$this->report_model->get_files($report['report_id']);
            $data['result'][$report['report_id']]['report_data']=$report;
            foreach($files as $file){
                $data['result'][$report['report_id']]['files'][]=$file;
            }
        }
        //var_dump($data);
        echo $this->load->view("Report/report-listing-ajx", $data);
    }
}
