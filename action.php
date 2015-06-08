<?php
include "includes/app.php";

if(server!='server'){
//	sleep(1);
}


if(Fun::isSetP("signup","email","name","password")){//For direct create account..
	$_POST['type']='u';
	$_POST["name"]=Fun::capName($_POST["name"]);
	$temp=User::signUp( array('email'=>$_POST['email'],'password'=>$_POST['password'],'type'=>'u', 'name'=>$_POST['name'])   );
	if($temp>0)
		echo $temp['id'];
	else
		echo $temp;//Problem in creating account.
}
else if(Fun::isSetP("login","email","password")){//For login..
	$temp=User::signIn($_POST['email'],$_POST['password']);
	if($temp>0)
		echo $temp['id'];
	else
		echo $temp;//problem in login.(0=>password not matched , -1 -> account doesn't exist)
}
else if(Fun::isSetP("forgetpassword","email")){//For Re-set password
	if(!User::isUserExist($_POST['email'])){
		echo -2;//No Such email address is registered.
	}
	else{
		$_SESSION['prl']="mohit".$_POST['email'];
		echo 1;//Password reset link have been mailed.
	}
}
else if(Fun::isSetP("cpassword","opassword","npassword")){
	echo User::changePassword($_POST['opassword'],$_POST['npassword']);
}
else if(Fun::isSetP("load_allcomment","aid")){
	$aid=$_POST["aid"];
	$allc=Sql::getArray("select conv.*,users.name,users.profilepic from conv left join users on users.id=conv.sid where aid=? order by time desc","i",array(&$aid));
	for($i=0;$i<count($allc);$i++){
		$allc[$i]["uid"]=$allc[$i]["sid"];
		$allc[$i]["ctext"]=$allc[$i]["content"];
		Disp::comment($allc[$i]);
	}
}




else
	echo "invalid Arguments.";


$DB->close();

?>
