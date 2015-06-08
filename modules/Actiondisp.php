<?php
class Actiondisp{
	function conv($data){
		$need=array("aid");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::islogin())
			$ec=-8;
		else{
			$odata=122;
		}
		echo json_encode(array('ec'=>$ec,'data'=>$odata))."\n";
		if($ec<0){
			return;
		}
		Disps::disp_assign_conv($data["aid"]);
	}
	function bidding($data){
		$need=array("aid");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::islogin())
			$ec=-8;
		else{
			$odata=122;
		}
		echo json_encode(array('ec'=>$ec,'data'=>$odata))."\n";
		if($ec<0){
			return;
		}
		$utype=User::loginType();
		$uid=User::loginId();
		$query="select users.name as adminname,questions.* from questions left join users on users.id=questions.adminid where questions.id=? AND (uid=? OR ".($utype=="a"?"1":"0")."  OR ".($utype=="e"?"1":"0")."  )  LIMIT 1";
		$ainfo=Sqle::getRow($query,'ii',array(&$data["aid"],&$uid));
		Disps::disp_bidding_conv($data["aid"],$ainfo);
	}
	function chatting($data){
		$need=array("msgid");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		echo json_encode(array('ec'=>$ec,'data'=>$odata))."\n";
		if($ec<0){
			return;
		}
		Disps::disp_chat_list($data["msgid"]);
	}

}
?>
