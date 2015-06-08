<?php

include "includes/app.php";

if(server!='server'){
//	sleep(1);
}

$a=new Actiondisp();



if(isset($_POST["action"])  ){
	$func=$_POST["action"];
	if( method_exists($a,$_POST["action"]))
		$a->$func($_POST);
	else
		echo json_encode(array('ec'=>'-11'));
}
else
	echo json_encode(array('ec'=>'-11'));

closedb();
?>