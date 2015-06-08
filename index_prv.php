<?php
$page="home";
$title="AHT";
include "includes/app.php";
Fun::issetlogout($DB);


if(User::islogin())
	$myf=User::myprofile();


if(!(User::isloginas('e') || User::isloginas('a') ))
	$bgimg="background-image:url('photo/nature2.jpg');";


$page_type="normal";
$msg="";

if(Fun::isSetP("csubject","question","quote","deadline")  ){
	if (isset($_FILES["uploadfile"]))
		$fn=Fun::uploadfile($_FILES["uploadfile"],array(),"_".$_ginfo["ip"]);
	else
		$fn=array("ec"=>4,"fn"=>"");
	if($fn["ec"]>0){
		$_POST["quote"]=0+$_POST["quote"];
		$insdata=array( "subject" => $_POST["csubject"] , "content" => $_POST["question"] ,"time"=>time() ,"ufile"=>$fn['fn'],"status"=>($_POST["quote"]<=0?1:2),"quote"=>$_POST["quote"],"deadline"=>strtotime( $_POST["deadline"]) );
		if(User::islogin())
			$insdata["uid"]=User::loginId();
		$iid=Sqle::insertVal("questions",$insdata);
		if(!User::islogin()){
			$_SESSION["submitedfile"]=$iid;
			$page_type="login";
		}
		else{
			Help::assignuploadaction(array("student name"=>$myf["name"],"aid"=>$iid));
			Fun::redirect($DB,HOST."profile.php");
		}
	}
	else
		$msg="Unable to upload file";
}

include "includes/top.php";
include "includes/menu/menu.php";

?>


<?php

if(User::isloginas('a')){

}
else if(User::isloginas('e')){
	Disps::expert_profile();
}
else
	Disps::home_page($page_type,$msg);


include "includes/bottom.php";
$DB->close();

?>