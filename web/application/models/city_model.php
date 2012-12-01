<?php

class City_model extends CI_Model {

    function get_cities() {
        $this->db->select('*');
        $this->db->from("cities");
        return $this->db->get()->result_array();
    }

    function getThana($city_id) {

        $this->db->select('*');
        $this->db->from("thanas");
        $this->db->where('city_id', $city_id);
        return $this->db->get()->result_array();
    }

    

}

?>