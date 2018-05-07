<?php
	session_start();
	include "Config/config.php";
	include "Model/Model.class.php";
	include "Libs/Vcode/Vcode.class.php";
	
	
	$contro=$_GET['c'] ?? 'Index';
	$action=$_GET['a'] ?? 'index';
	
	error_reporting(E_ALL ^ E_NOTICE);
//	include "./Controller/".$contro."Controller.class.php";
	
	function __autoload($className){
		
		if(file_exists('./Libs/'.$className.'/'.$className.'.class.php')){
			include './Libs/'.$className.'/'.$className.'.class.php';
			
		}else if(file_exists('./Model/'.$className.'.class.php')){
			include './Model/'.$className.'.class.php';
			
		}else if(file_exists('./Controller/'.$className.'.class.php')){
			include './Controller/'.$className.'.class.php';
			
		}else if(file_exists('./Controller/'.$className.'Controller.class.php')){
			include './Controller/'.$className.'Controller.class.php';
		}
		
		
	}
	
	$controller=$contro."Controller";
	
	
	
	$user=new $controller();
	
	$user->$action();
	
?>