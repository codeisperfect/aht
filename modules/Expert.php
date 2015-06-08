<?php
class Expert{
	function bid_apply($data){
		$need=array("price","content","timetaken");
		$ec=1;
		$odata=0;
		if(!Fun::isAllSet($need,$data))
			$ec=-9;
		else if(!User::isloginas('e'))
			$ec=-8;
		else{
		}
		return array('ec'=>$ec,'data'=>$odata);
	}

}
?>
