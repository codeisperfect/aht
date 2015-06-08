<?php
class Store{


	function uploadpics($data){
		$need=array("title","abouttext","price","sale","images","status","aclosedate","addinfo","warranty","deptt");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::isloginas('s'))
			$ec=-8;
		else{
			$temp=Fun::getflds($need,$data);
			$temp['sid']=User::loginId();
			$temp['utime']=time();
			$odata=Sqle::insertVal("products",$temp);
		}
		return array('ec'=>$ec,'data'=>$odata);
	}

}
?>
