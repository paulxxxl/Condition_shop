<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Green-комфорт</title>

	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }	
	</style>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="/css/mysite2.css">  
    <style>
    #temp{
    display:none;
    opactity: 0;
    position:absolute;
    width:100%;
    bottom:0;
    height:0px;
    color:white;
    text-align:center;
    line-height:40px;
        }
    </style>
</head>
<body>
    <button onclick="Temperature()">pUUSShh Meee</button>
    <div id='temp'><img src="img/temp.png"></div>
      <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.4.min.js"); ?>"></script>    
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQueryRotate.js"); ?>"></script>  
 <script>
    
     function Temperature(){
      $("#temp").fadeIn(600).animate({
      opacity: 1.0,
      height: "40px",
      display:"toggle",
 }, { duration: 3500, queue: false });
 }    

</script>
  
</body>
</html> 
