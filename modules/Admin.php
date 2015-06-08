<?php
class Admin {
	function assign_me($data){
		$need=array( 'aid');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else{
			$adminid=User::loginId();
			Sqle::updateVal("questions",array("adminid"=>User::loginId()),array("id"=>$data["aid"]));
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
	function assign_exp($data){
		$need=array('eid','aid');
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else{
			Sqle::updateVal("questions",array("expid"=>$data["eid"]),array("id"=>$data["aid"]));
		}
		return array('ec'=>$ec,'data'=>$odata);
	}
}
?>
