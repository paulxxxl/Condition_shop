<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class SegmentsModel extends CI_Model {
	public function __construct () {
		$this->load->database();
	}
    function load($segment){
        $this->db->select('cat_name')->from($segment);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            $loaded = $query->row_array();
        }
        else {
            $loaded['loadcheck']='false';
        }
        return $loaded;
    } 
     function save($segment){
         
     }
    }

 