<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pager extends CI_Controller {
    
    function _remap($method) {
    //страницы, доступные без авторизации
    $allowedPages = array('home','catalog','login', 'about');
    $pars = $this->uri->segment_array();
    if (($method != null) &&(isset($_COOKIE['id'])||in_array($method, $allowedPages))) {
        call_user_func_array(array($this, $method), $pars);
    }
    else {
        echo "<script>console.log('Неудачно')</script>";
        $this->view('home');
    }
}


	public function view($page='home')
	{
        

	$data['title'] = ucfirst($page); // Сделать первую букву заглавной
        
    $this->load->helper('cookie');
	$this->load->view('templates/header2', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
 
}

	}

