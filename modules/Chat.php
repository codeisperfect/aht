<?php
class Chat extends Sql{
	public static function startchat($data){
		$thid=Sqle::insertVal("chattingthread",array("ip"=>$_SERVER['REMOTE_ADDR'],"time"=>time(),"uid"=>User::loginId(),"isclosed"=>"f"));
		Sqle::insertVal("chatting",array("msg"=>$data["msg"],"thid"=>$thid,"time"=>time()));
	}
}
?>
