<?php
class Subs extends Sql{
	public static function isSusc($email){//Is it subscribed.
		$temp=Sqle::selectVal("subs",'id',array('email'=>$email,'unsubs'=>array('f','=' ) ),1);
		return $temp;
	}
	public static function addInList($email){//Make it subscribed !
		$timenow=time();
		$temp=Sqle::selectVal("subs",'id,unsubs',array('email'=>$email ),1);
		if($temp){
			if($temp['unsubs']=='t'){
				Sqle::updateVal("subs",array('time'=>$timenow,'unsubs'=>'f'),array('email'=>$email),1);
				return true;
			}
			else
				return false;//Already Subscrbed !
		}
		else{
			$data=array( 'time'=>$timenow,'unsubs'=>'f','email'=>$email);
			Sqle::insertVal('subs',$data );
			return true;
		}
	}
	public static function removeFromList($email){
		return Sqle::updateVal("subs",array( 'unsubs'=>'t'),array('email'=>$email),1);
	}
	public static function getSubsList(){
		$temp=Sqle::selectVal("subs",'email',array( 'unsubs'=>array('f','=' ) ) );
		return $temp;
	}


}
?>
