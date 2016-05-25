<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }	
	</style>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />   
</head>
<body>
<div id="container">
	<h1>Welcome to CodeIgniter+Bootstrap!</h1>

	<div id="body">
        <p><?php echo $page?></p>   
    </div>
<a class="btn btn-default" href="/index.php/page<?php echo $pnum+1?>" role="button">Перейти на страницу <?php echo $pnum+1?></a>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.1.4.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> 
</body>
</html>