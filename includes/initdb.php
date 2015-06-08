<?php
	class mydbsqli{
		function close(){
		}
		function query($str){
			return Sql::query($str);
		}
	}

//	$DB = new mysqli( $db_data['host'] , $db_data['user'] , $db_data['pass'] , $db_data['db']);
//	$DB= new mydbsqli();
//	Sql::init($DB);
	$DB=null;
?>