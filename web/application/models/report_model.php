<?php

class Report_model extends CI_Model {

    public function save_report($report_info, $files) {
        $this->db->insert("reports", $report_info);
        $reporter_id = $this->db->insert_id();
        foreach ($files as $file) {
            $file['report_id'] = $reporter_id;
            print_r($file);
            $this->db->insert("files", $file);
        }
    }
    public function get_reports($city_id=null){
        
            $this->db->select('*');
            $this->db->from("reports");
            $this->db->join("thanas", "thanas.thana_id = reports.thana_id");
            $this->db->join("user","user.user_id=reports.user_id");
            if(isset($city_id)){
                $this->db->where('thanas.city_id', $city_id);
            }
            return $this->db->get()->result_array();        
    }
    public function get_files($report_id){
        $this->db->select("*");
        $this->db->from("files");
        $this->db->where("report_id",$report_id);
        return $this->db->get()->result_array();;
        
    }
    
    public function get_thana(){
    	$this->db->select("*");
    	$this->db->from("thanas");
    	
    	return $this->db->get()->result_array();;
    
    }
    
    public function report_count_by_city(){
    	$this->db->select("thanas.city_id, count(reports.report_id) AS report_count");
    	$this->db->from("reports");
    	$this->db->join("thanas","reports.thana_id=thanas.thana_id");
    	$this->db->group_by("thanas.city_id");
    	return $this->db->get()->result_array();
    	//print_r($this->db->get()->result_array());
    	//die(); 
    	
    }
    

}

?>