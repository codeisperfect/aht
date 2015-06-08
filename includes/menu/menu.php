<?php
	if(User::islogin() && ((!isset($myf) || $myf!=null ) ) )
		$myf=User::myprofile();
	else
		$myf=null;
	if(User::isloginas('a'))
		include "includes/menu/logina.php";
	else if(User::isloginas('e'))
		include "includes/menu/logine.php";
	else if(User::isloginas('u'))
		include "includes/menu/loginu.php";
	else
		include "includes/menu/nlogin.php";
?>
<div style='height:100px;' ></div>