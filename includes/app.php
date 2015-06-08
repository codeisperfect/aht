<?php
	include_once( 'includes/setting.php' ) ;
	include_once( 'includes/data.php' ) ;
	include_once( 'includes/secret.php' ) ;
	ini_set('display_errors', 'on');
	ini_set('error_reporting', E_ALL);
	date_default_timezone_set('Asia/Calcutta');

	function loadModule($className){
		$inside=array('Td'=>'Table','Row'=>'Table','Text'=>'Table' ) ;
		if(isset($inside[$className]))
			$className=$inside[$className];
		if(file_exists(ROOT.'modules/'.$className.'.php'))
			require_once(ROOT.'modules/'.$className.'.php');
	}
	@session_start();
	spl_autoload_register('loadModule');
	include_once('includes/initdb.php');

	if(!isset($page))
		$page="home";
	if(!isset($tab))
		$tab="";

	if(!isset($_SESSION["chatthid"]))
		$_SESSION["chatthid"]=0;

	include "php/display.php";
	include "php/specf_display.php";
	include "php/func.php";

?>