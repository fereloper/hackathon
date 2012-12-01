<?php

class subscription_model extends CI_Model {
    
    public function do_subscribe($data){
        $this->db->insert("substriptions",$data);           
    }
    
}
?>
