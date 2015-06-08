<?php
include "includes/app.php";



function dt($tn){
	echo Sql::query("drop table ".$tn);
}


function drop_table(){
	$tl=array("users","questions","conv","notf","sol","solndb","expert","mytopics","soln","subs","alltopics");
	foreach($tl as $i=>$val){
		dt($val);
	}
}

function drop_all(){
	$allt=Sql::getArray("show tables");
	foreach($allt as $i=>$val){
		dt($val["Tables_in_mohit"]);
	}
}

function make_table(){
	echo Sql::query("CREATE TABLE users (id int NOT NULL AUTO_INCREMENT,username varchar(100), password varchar(100) , email varchar(100) ,  name varchar(100) , address varchar(500) , phone varchar(13) , type varchar(3) , create_time int,update_time int , last_login int,last_ip varchar(20),conf varchar(1),econf varchar(1), PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE users add profilepic varchar(100) NULL ");
	echo Sql::query("ALTER TABLE users add dob int NULL ");


	echo Sql::query("CREATE TABLE questions (id int NOT NULL AUTO_INCREMENT,subject int,time int,content varchar(5000) , PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE questions add ufile varchar(100) NULL ");
	echo Sql::query("ALTER TABLE questions add uid int NULL ");
	echo Sql::query("ALTER TABLE questions add sid int NULL ");
	echo Sql::query("ALTER TABLE questions add status int NULL ");
	echo Sql::query("ALTER TABLE questions add quote int NULL ");
	echo Sql::query("ALTER TABLE questions add deadline int NULL ");
	echo Sql::query("ALTER TABLE questions add paid int NULL ");
	echo Sql::query("ALTER TABLE questions add adminid int NULL ");//Id if admin, to which we have assigned it.
	echo Sql::query("ALTER TABLE questions add myprice int NULL ");
	echo Sql::query("ALTER TABLE questions add expid int NULL ");
	//Status => -1 : failed


	echo Sql::query("CREATE TABLE conv (id int NOT NULL AUTO_INCREMENT,aid int,sid int,rid int,time int,content varchar(1000) , rtype varchar(1), PRIMARY KEY ( id) ) ");



	echo Sql::query("CREATE TABLE subs (id int NOT NULL AUTO_INCREMENT,email varchar(100),  time int,  unsubs char(1) , PRIMARY KEY ( id) ) ");
	//unsusb : 't' or 'f'

	echo Sql::query("CREATE TABLE notf (id int NOT NULL AUTO_INCREMENT, uid int, content varchar(1000),time int,isr varchar(1), url varchar(100), PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE notf add sid int NULL ");
	echo Sql::query("ALTER TABLE notf add notftype int NULL ");
	echo Sql::query("ALTER TABLE notf add utype varchar(1) NULL ");



	echo Sql::query("CREATE TABLE soln (id int NOT NULL AUTO_INCREMENT,qid int,adminid int,time int,filename varchar(200),PRIMARY KEY ( id) ) ");


	echo Sql::query("CREATE TABLE solndb (id int NOT NULL AUTO_INCREMENT, catgid int, subjid int,topicid int, filename varchar(200),uid int,time int,title varchar(200),PRIMARY KEY ( id) ) ");



	echo Sql::query("CREATE TABLE expert (eid int NOT NULL,iit varchar(50),  degree varchar(100), experience varchar(1000), addinfo varchar(1000), mytopics varchar(1000), isselected varchar(1) ) ");



	echo Sql::query("CREATE TABLE mytopics (tid int,subject varchar(200),topic varchar(200),subtopic varchar(200))");

	echo Sql::query("CREATE TABLE alltopics (sid int,topicid int,subtid int,subject varchar(200),topic varchar(200),subtopic varchar(200))");

	echo Sql::query("CREATE TABLE bidding (id int NOT NULL AUTO_INCREMENT, content varchar(1000), aid int, uid int, price int,time int,btype varchar(1),PRIMARY KEY ( id) ) ");

	echo Sql::query("CREATE TABLE chatting (id int NOT NULL AUTO_INCREMENT, msg varchar(1000), time int ,PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE chatting add thid int NULL ");
	echo Sql::query("ALTER TABLE chatting add stype varchar(1) NULL ");
	echo Sql::query("ALTER TABLE chatting add sid int NULL ");
	echo Sql::query("ALTER TABLE chatting add ip varchar(20) NULL ");
	echo Sql::query("CREATE TABLE chattingthread (id int NOT NULL AUTO_INCREMENT, ip varchar(20), time int, uid int, isclosed varchar(1), feedback varchar(1000), helpfull varchar(1), PRIMARY KEY ( id) ) ");
}




//drop_table();
//dt("questions");
//dt("conv");
//dt("expert");
make_table();
//drop_all();

closedb();

?>
<br>