<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class login_mod extends CI_Model {
	public function __construct () {
		$this->load->database();
	}
    function check ($login,$pass) {
        $pass=md5(md5($pass));
         $this->db->select('*')->from('users')->where('login', $login)->where('password',$pass);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            $logdata = $query->row_array();
            $logdata['logcheck']='true';
        }
        else {
            $logdata['logcheck']='false';
        }
        return $logdata;
    } 
    public function get($login){        
        $this->db->select('*')->from('users')->where('login', $login);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
            $logdata['name']=$row['name'];
            $logdata['id']=$row['salt'];
        }
    return $logdata;       
	}	
 }
 