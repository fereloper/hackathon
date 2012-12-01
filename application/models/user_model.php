<?php

class User_model extends CI_Model {

    public function save_report($report_info, $files) {
        $this->db->insert("reports", $report_info);
        $reporter_id = $this->db->insert_id();
        foreach ($files as $file) {
            echo "<pre>";
            $file['report_id'] = $reporter_id;
            print_r($file);
//                die();
            $this->db->insert("files", $file);
        }
    }
    public function get_reports(){
        $this->db->select("*");
        $this->db->from("reports");
        return $this->db->get()->result_array();;
    }
    public function get_files($report_id){
        $this->db->select("*");
        $this->db->from("files");
        $this->db->condition("report_id",$report_id);
        return $this->db->get()->result_array();;
        
    }
    public function login_processing($data){
//        print_r($data);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        return $this->db->get()->result_array();         
    }
    public function insert_regData($data){
//        echo "yoo";
        $row = Array(
            'name' => $data['name'],
            'password' => $data['password'],
            'email' => $data['email']
        );
        
//        echo '</pre>'; print_r($row); die();
        $this->db->insert('user', $row);
        return $this->db->affected_rows();
    }
    
    public function getCities(){
        $this->db->select('*');
        $this->db->from('cities');
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>