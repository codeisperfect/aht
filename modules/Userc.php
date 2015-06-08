<?php
class Userc {
	function applyforpos($data){
		$need=array('pos','comment');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!Valid::apply_position($data['pos']))
			$ec=-12;
		else{
			$timenow=time();
			$uinfo=User::myprofile();
			$name=$uinfo==null?"":$uinfo["name"];
			$notfm=$name.' Applied for '.Help::appliedfor($data["pos"]);//."\n".Fun::maxspace($data["comment"],0);
			$url=HOST."app.php?pos=".$data['pos']."&uid=".(User::loginId());
//			$url.="&host=".rawurlencode($url);
			Sqle::insertVal("notf",array("uid"=>1,'text'=>$notfm,'time'=>$timenow,'isr'=>'0','url'=>$url ));
			$odata=Sqle::insertVal("apply",array('uid'=>User::loginId(),'pos'=>$data["pos"],'time'=>$timenow,'comment'=>$data["comment"]));
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
}
?>
