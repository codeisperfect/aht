<?php
include "includes/app.php";

function store_all_topics_query(){
	global $DB;
	$query="insert into alltopics select * from (".Funs::topiclistquery().")temp";
	return $DB->query($query);
}

echo store_all_topics_query();


if(false){
	print_r(User::signUp(array("email"=>"admin@admin.com","password"=>"p","type"=>"a","name"=>"Sanjay")));
}



$DB->close();
?>