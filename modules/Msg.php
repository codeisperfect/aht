<?php
class Msg extends Sql{

	public static function msglist($slist){
		$slist=explode(",",$slist);
		$qtext=array();
		for($i=0;$i<count($slist);$i++){
			if(strlen($slist[$i])>0 && ((0+substr($slist[$i],1))>1) ){
				$num=0+substr($slist[$i],1)  ;
				if($slist[$i][0]=='a')
					$qtext[]="(select sid from apply where cid=".$num.")";
				else if($slist[$i][0]=='d')
					$qtext[]="(select sid from student where deptt=".$num.")";
				else if($slist[$i][0]=='s' or $slist[$i][0]=='c')
					$qtext[]="(select ".$num." as sid)";
			}
		}
		$query=join(" union ",$qtext);
		if(count($qtext)>0)
			return Sql::getArray("select DISTINCT sid from ( ".$query." )temp");
		else
			return array();
	}
	public static function sendmsg($to,$text,$thid,$type){
		if(!User::islogin())
			return -2;//Session expired
		if($to==1)
			$msglist=array(array('sid'=>1));
		else if(User::loginId()==1)
			$msglist=self::msglist($to);
		else
			return -1;//Not valid type of messaging..

		$sender=User::loginId();
		if(count($msglist)==0)
			return -3;//
		for($i=0;$i<count($msglist);$i++){
			$sendto=$msglist[$i]["sid"];
			Sqle::insertVal("msg",array('account'=>$sendto,'sr'=>$sender,'rr'=>$sendto,'thid'=>$thid,'time'=>time(),'type'=>$type,'msgdata'=>$text ));
		}
		Sqle::insertVal("msg",array('account'=>$sender,'sr'=>$sender,'rr'=>$to,'thid'=>$thid,'time'=>time(),'type'=>$type,'msgdata'=>$text ));
		return 1;
	}
	public static function createMsg($to,$sub,$text){
		if(!User::islogin())
			return -2;//Session expired
		if($to==1 or User::loginId()==1){
			$thid=Sqle::insertVal("thread",array('sub'=>$sub,'time'=>time()));
			return self::sendmsg($to,$text,$thid,'o');
		}
		else
			return -1;//Error occured.
	}
	public static function mymsglist(){
		if(!User::islogin())
			return array();//Session expired
		else{
			$id=User::loginId();
			$query="select temp1.*,users.name,users.username from (select temp.*,thread.sub from (select *,count(thid) as numcon from (select * from msg order by time desc)msg where account=? group by thid ) temp left join thread on thread.id=temp.thid) temp1 left join users on users.id=temp1.sr order by time desc ";
			return Sql::getArray($query,'i',array(&$id));
		}
	}
	public static function conversionList($thid){
		if(!User::islogin())
			return array();//Session expired
		else{
			$id=User::loginId();
			$query="select msg.*,thread.sub,users.name,users.username from msg left join thread on thread.id=thid left join users on users.id=sr where thid=? AND account=? order by time ";
			return Sql::getArray($query,'ii',array(&$thid,&$id));
		}
	}
	public static function subjectofthread($thid){
		$temp=Sqle::selectVal("thread","sub",array('id'=>$thid),1);
		if($temp!=null)
			return $temp["sub"];
		else
			return null;
	}
}
?>
