<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Segments extends CI_Controller {
    
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


	function load(){
        function ins_tab($arrlength){                   //прорисовка второй таблицы с боковыми кнопками в режиме редактирования
             echo "<div class='edit-table'>";
             echo "<table>";
             for ($i=0;$i<$arrlength;$i++){
                echo "<tr>";   
                echo "<td><button class='round_btn sm f5_btn'></button>"; 
                echo "<button class='round_btn sm plus_btn'></button>";
                echo "<button class='round_btn sm del_btn'></button></td>"; 
                echo "</tr>";        
               }
            echo "</table>";
            echo "</div>";
        }
        $segment=(isset($_POST['data'])) ? $_POST['data'] : NULL;
        $edit=(isset($_POST['edit'])) ? $_POST['edit'] : NULL;
        
        $this->load->model('SegmentsModel');                           //связываемся с базой, заугружаем список
        $loaded=$this->SegmentsModel->load($segment);
        $arrlength=count($loaded);
         //формируем HTML для отправки
        if  ($segment=='category'){                                     //если это категории -> ПРОРИСОВКА основных пунктов меню  
            echo "<div class='menu-edit'>";
            echo "<ul>";
            foreach($loaded as $value){
                echo "<li class='vert_menu_item vmi'><a href='#'>".$value."</a></li>"; 
            }
            echo "</ul>";
            echo "<div class='catplus' align='center'><button class='round_btn lg plus_btn'></button></div>";
            echo "</div>";
           if ($edit) ins_tab($arrlength);
               
        }
    }
}