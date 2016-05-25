<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Green-комфорт</title>

	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }	
	</style>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jasny-bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="/css/mysite2.css">  
</head>
<body>
<header>     
 <! Шапка с лого, контактами и пр>
<div class="row">  
  <! Первый столбец с лого>    
  <div class="col-sm-4 col-md-4 col-lg-3"> 
   <table class='logo'> 
    <tr>
      <td><img src="img/logo.png" class='shadow' width='310px' height='80px' alt='Logo'></td>
    </tr>    
    <tr>
        <td class='comfort'>COMFORT</td>
    </tr>    
    <tr>
        <td>Продажа Монтаж Сервис</td>
    </tr>
   </table>   
   </div> 
  <! Второй столбец с лого2>
  <div class="col-sm-2 col-md-2 col-lg-2 sec_block">
      <img src='img/10let.png' id='10let' class='blueshdw'>
  </div>    
  <! Третий столбец с контактами>    
  <div class="col-sm-4 col-md-4 col-lg-4 thrd_block">
        <table class='contacts'> 
            <tr>
              <td class='font1'>Наши контакты:</td>    
            </tr>
            <tr>
              <td><a href ="tel:(048) 735-61-91"> <span class="glyphicon glyphicon-phone-alt"></span>(048) 735-61-91</a></td>
            </tr>
            <tr>
              <td><a href ="tel:(067) 687-91-69"> <img src="img/kvst.png"> (067) 687-91-69</a></td>
            </tr>
            <tr>
              <td><a href ="tel:(050) 111-11-11"> <img src="img/mts.png"> (050) 111-11-11</a></td>
            </tr>
            <tr>
              <td><a href ="tel:(063) 735-61-91"> <img src="img/life.png"> (063) 735-61-91</a></td>
            </tr>    
        </table>    
    </div>
  <! Блок регистрации\корзины>    
  <div class="col-sm-2 col-md-2 col-lg-3">
    <! Код прорисовки аноним\регестр-ый юзер>  
    <div class='anonim'>
        <a href="#modal" role="button" class="btn btn-log" data-toggle="modal">Вход/Регистрация</a>
        <div id="modal" class="modal fade" role="dialog">
            <div class="modal-dialog  modcolor">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">x</button>
                        <h3>Вход на сайт.</h3>
                    </div>
                    <div class="modal-body modcolor">
                        <form role="form" method="post" action="<?php echo site_url('login/validation');?>">
                            <div class="form-group">
                                <label for="text">Логин</label>
                                <input type="text" class="form-control" name="username" placeholder="Введите логин" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{2,20}$">
                            </div>
                            <div class="form-group">
                                <label for="pass">Пароль</label>
                                <input type="password" class="form-control" name="password" placeholder="Пароль" required="required" pattern="^[A-Za-z0-9]{6,20}$">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="stayon"> Запомнить меня</label>
                            </div>
                            <button type="submit" class="btn btn-success">Войти</button>
                            <button type="button" class="btn btn-info" onclick="location.href = 'register'">Регистрация</button>
                            <button type="button" class="btn btn-danger posright" data-dismiss='modal'>Отмена</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <! Блок для зарегистрированого юзера>  
    <div class='regin'>
        <table class='userinfo'>
            <tr class='tbl_tr'>
                <td><a class='usrname' href='#'><span class="glyphicon glyphicon-user"></span></td>
                <td class='logout'><a href='#'>/Выйти</a></td>
            </tr>
        </table>
    </div>  
    <div class='basket'>
        <a href="#mod1" role="button" class="btn" data-toggle="modal">
            <img src='img/shp-bskt.png' width='50px' ; height='50px'> Корзина
        </a>
    </div>
</div>
</div>
<div class="row">   <!--Колонка меню-->
  <div class="col-sm-12 col-md-12">
    <ul class="nav nav-tabs nav-menu">
      <li class="active"><a href="#">Главная</a></li>
      <li><a href="#">Каталог оборудования</a></li>
      <li><a href="#">Новости</a></li>
      <li><a href="#">Монтаж/Сервис</a></li>
      <li><a href="#">О компании/Наше портфолио</a></li>
      <li><a href="#">Контакты</a></li>
     </ul>  
  </div>
</div>    
    
</header>
 <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.4.min.js"); ?>"></script>    
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQueryRotate.js"); ?>"></script>    
<script src="<?php echo base_url("assets/js/jasny-bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.cookie.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/condition.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/log_check.js"); ?>"></script>