<?php

include "includes/app.php";

if(server!='server'){
//	sleep(1);
}

$b=new Actions();

if(User::isloginas('u'))
	$a=new Userc();
else if(User::isloginas('a'))
	$a=new Admin();
else if(User::isloginas('e'))
	$a=new Expert();
else
	$a=$b;

if(isset($_POST["action"])  ){
	$func=$_POST["action"];
	if( method_exists($a,$_POST["action"]))
		echo json_encode($a->$func($_POST));
	else if( method_exists($b,$_POST["action"]))
		echo json_encode($b->$func($_POST));
	else
		echo json_encode(array('ec'=>'-11'));
}
else
	echo json_encode(array('ec'=>'-11'));

closedb();

?>