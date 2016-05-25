<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {    
        

    function validation (){                                             //метод валидации юзера
     $login=$this->input->post('username');                             //читаем переменные, проверяем их
     $pass=$this->input->post('password');
     $patternus="/^[a-zA-Z0-9-_]{2,20}$/";
     $patternpass="/^[a-zA-Z0-9-_]{6,20}$/";    
      if (preg_match ($patternus,$login))
      {
          if (preg_match ($patternpass,$pass))
          {
              $this->load->model('login_mod');                           //связываемся с базой, проверяем связку
              $logdata=$this->login_mod->check($login,$pass);    
              if ($logdata['logcheck']){
                $stayon=$_POST['stayon'];                                 //запомнить юзера?
                $this->setCook($stayon,$logdata);                         //ставим куки          
                echo ($logdata['is_admin'] ? 'admin' : 'true');           //проверка на админа с возвратом в log_check.  
              }else {
                echo 'false';                                              //возврат неправильной связки лог/пар  
              }
          }else{
        echo 'incorrect';                                                 //неверный формат введеных данных  
          }   
      }
    }
        
      function setCook($stayon,$logdata){                                       //функция выставления куки 
        if ($stayon){
                setcookie('id',$logdata['salt'],time()+(86400*365),'/');
                setcookie('name',$logdata['name'],time()+(86400*365),'/');
                if ($logdata['is_admin']) setcookie('admin','true',time()+(86400*365),'/');
            }else{
                setcookie('id',$logdata['salt'],0,'/');
                setcookie('name',$logdata['name'],0,'/');
                if ($logdata['is_admin']) setcookie('admin','true',0,'/');
            }
        }
}