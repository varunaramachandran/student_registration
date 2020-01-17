<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>
</title>
<style>
	.img{background-image:url('../img/stud.jpg');
	background-size: cover;
	background-repeat: no-repeat; }
</style>
</head>
<body class="img">
<div class="menubar">
<ul>
<li>
	<b><a href="/MVC?id=0">HOME</a></b>
</li>

<li>
	<b><a href="/MVC?id=1">REGISTRATION</b>
</li>
<li>
	<b><a href="appoinment.php">CONTACT</a></b>
</li>
<li>
	<b><a href="/MVC?id=2">LOGIN</a></b>
</li>
</ul>
</div>

<?php 
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		if($id==0){
			$con=new control_index();
		}if($id==2){
			$con=new control_index();
			$con->login();
		}
		if($id==1){
			$con=new control_index();
			$con->registration();
		}
	}
 ?>
