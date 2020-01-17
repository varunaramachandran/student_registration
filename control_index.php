<?php 
	class control_index{
		public function __construct(){
			include_once('view/index.php');
		}
		public function login(){
			include_once('view/login.php');
		}
		public function registration(){
			include_once('view/registration.php');
		}
	}
 ?>