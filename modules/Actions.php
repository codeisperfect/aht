<?php
class Actions{

	function comment($data){
		$need=array("text","pid");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::islogin())
			$ec=-8;
		else{
			$temp=array('ctext'=>$data['text'],'pid'=>$data["pid"]);
			$temp['uid']=User::loginId();
			$temp['time']=time();
			$odata=Sqle::insertVal("comments",$temp);
		}
		return array('ec'=>$ec,'data'=>$odata);
	}

	function like($data){
		$need=array("pid","type","at");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::islogin())
			$ec=-8;
		else{
			$temp=Fun::getflds(array("pid","type"),$data);
			$temp["time"]=time();
			$temp["uid"]=User::loginId();
			if($data["at"]=="l"){
				$odata=Sqle::insertVal("likes",$temp);
			}
			else{
				$odata=Sql::query("delete from likes where pid=? and uid=? and type=?",'iis',array(&$data["pid"],&$temp["uid"],&$data["type"]));
			}
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
	function msg($data){
		$need=array("aid","content","rtype");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::islogin())
			$ec=-8;
		else{
			$ainfo=Sqle::selectVal("questions","uid,adminid",array("id"=>$data["aid"]),1);
			$sender_info=Sqle::selectVal("users","name,type",array("id"=>User::loginId()),1);
			if($ainfo==null || $sender_info==null )
				$ec=-21;
			else if($data["content"]==""){
			}
			else{
				$temp=Fun::getflds($need,$data);
				$temp["time"]=time();
				$temp["sid"]=User::loginId();
				$odata=Sqle::insertVal("conv",$temp);

				$to=($sender_info['type']=='a'?$ainfo["uid"]:1);
				if($to){
					Fun::prvnotf(  $to, User::loginId(), "php/notf/n2.txt",array("name"=>$sender_info["name"] ) , "assignment.php?aid=".(0+$data["aid"]) , $data["rtype"] , 5 );
				}
			}
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
	function teacherreg($data){
		$need=array('sec','name','email','phone','password','type', 'experience','addinfo','iit','degree',"sel_topics");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::isValidSignUp($data))
			$ec=-3;
		else if(User::isUserExist($data['email']))
			$ec=-16;
		else{
			$data['otp']=rand(1000000,9999999);
			$_SESSION["signupdata"]=$data;
			Fun::mailfromfile($data["email"],"php/mails/otp.txt" , array("name"=>$data["name"],"otp"=>$data["otp"] )  );
			$odata=$data["sel_topics"];
		}
		return array('ec'=>$ec,'data'=>$odata);
	}

	function fillotp($data){
		$need=array('otp');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else{
			if(isset($_SESSION["signupdata"]) && $_SESSION["signupdata"]["otp"]==$data["otp"]){
				$info=$_SESSION["signupdata"];
				$edata=User::signUp( Fun::getflds( array("name","email","phone","password","type"),$info ) );
				if($edata>0){
					$ins_data=Fun::getflds(array('experience','addinfo','iit','degree' ),$info);
					$ins_data["eid"]=$edata['id'];
					$ins_data["isselected"]="0";
					Sqle::insertVal("expert",$ins_data);
					$_SESSION["login"]=$edata;
					if(isset($info["sel_topics"]["list"])){
						$arr_list=Funs::dict_to_arrlist($info["sel_topics"]["list"]);
						$select_query=Fun::makeDummyTableColumns($arr_list,array("a","b","c"));
						$tid=User::loginId();
						$query="insert into mytopics select ".(0+$tid)." as p,temp.* from (".$select_query.") temp where (a,b,c) in (select sid,topicid,subtid from alltopics)";
						$odata=Sql::query($query);
					}
				}
				else
					$ec=-18;
			}
			else
				$ec=-17;
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
	function bidding($data){
		$need=array('content','aid','price');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!(User::isloginas('a') || User::isloginas('e'))){
			$ec=-8;
		}
		else{
			$ins_data=Fun::getflds($need,$data);
			$ins_data["time"]=time();
			$ins_data["btype"]=User::loginType();
			$ins_data["uid"]=User::loginId();
			$odata=Sqle::insertVal("bidding",$ins_data);
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
	function delete_soln($data){
		$need=array( 'solnid');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!(User::isloginas('a') || User::isloginas('e') )){
			$ec=-11;
		}
		else{
			$adminid=User::loginId();
			$odata=Sql::query("delete from soln where id=? AND adminid=? ",'ii',array(&$data["solnid"],&$adminid));
		}
		return array('ec'=>$ec,'data'=>$odata);
	}

	function sendchatmsg($data){
		$need=array( 'msg');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if($data["msg"]!=""){
			if(!($_SESSION["chatthid"]>0)){
				$_SESSION["chatthid"]=Sqle::insertVal("chattingthread",array("ip"=>$_SERVER['REMOTE_ADDR'],"time"=>time(),"uid"=>User::loginId(),"isclosed"=>"f"));
			}
			$odata=array("msgid"=>Help::sendchatmsg($data["msg"],$_SESSION["chatthid"]) );
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
}
?>
