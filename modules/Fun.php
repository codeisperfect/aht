<?php
abstract class Fun{
	public static  function max($a,$b){
		return ($a>$b?$a:$b);
	}
	public static function encode($pass){
		$shift=0;
		$outp="";
		for($i=0;$i<strlen($pass);$i++){
			$val=ord(($pass[$i]+$shift)%256);
			$outp.=(chr( ord('a') + floor($val/16) ).chr( ord('a') + ($val%16) ));
		}
		return $outp;
	}
	public static function decode($epass){
		$shift=0;
		$outp="";
		$st=0;
		for($i=0;$i<strlen($epass);$i++){
			if($i%2==0){
				$st= ( ord($epass[$i])-ord('a') )*16 ;
			}
			else{
				$st+=( ord($epass[$i])-ord('a') ) ;
				$outp.=chr( ($st+256-$shift)%256);
			}
		}
		return $outp;
	}
	public static function encode1($inp){
		return substr(md5( self::encode("MOHIT143MANSI".$inp) ),0,9);
	}
	public static function encode2($inp){
		global $sec;
		return substr(md5( $sec['encode1'].substr(md5($inp),10,10)),0,9);
	}

	public static function oneToN($n,$m=1,$incorder=true){
		$outp=array();
		for($i=$m;$i<=$n;$i++){
			$outp[]=$incorder?$i:($n-$i+$m);
		}
		return $outp;
	}
	public static function isAllSet($alist,$data){
		for($i=0;$i<count($alist);$i++)
			if( ! isset($data[ $alist[$i] ]) )
				return false;
		return true;
	}
	public static function isSetG(){
		global $_GET;
		return self::isAllSet( func_get_args() , $_GET );
	}
	public static function isSetP(){
		global $_POST;
		return self::isAllSet( func_get_args() , $_POST );
	}
	public static function issetlogout(){
		if(isset($_GET['logout'])) {
			closedb();
			$_SESSION['login']=null;
			header("Location: ".HOST);
			exit(0);
		}
	}
	public static function redirect($url){
		closedb();
		header("Location: ".$url);
		exit(0);
	}
	public static function getcururl($protocol='http://'){
		return $protocol. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
	public static function redirectinv(){
		Fun::redirect(HOST."invalid.php?url=".rawurlencode(self::getcururl()));
	}
	public static function gotohome($typec='',$force=false){
		if( $force || ( !User::islogin() || ($typec!='' && $typec!=User::loginType()) )  ) {
			closedb();
			$cururl='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$rto=HOST."?url=".rawurlencode($cururl);
			header("Location: ".$rto);
			exit(0);
		}
	}
	public static function getflds($arr,$data){
		$temp=array();
		for($i=0;$i<count($arr);$i++){
			$k=$arr[$i];
			if(isset($data[$k]))
				$temp[$k]=$data[$k];
			else
				return null;
		}
		return $temp;
	}
	public static function timetostr($time){//Opposite of strtotime
		return date("d-m-Y h:i a",$time);
	}
	public static function timetodate($time){//Opposite of strtotime
		return date("d-m-Y",$time);
	}
	public static function timepassed($s){
		if($s<5)
			return "few second ago";
		else if($s<60)
			return $s." second ago";
		else if($s<60*45)
			return floor($s/60)." minutes ago";
		else if($s<60*(60+45))
			return "about 1 hour ago";
		else if($s<60*60*24)
			return floor($s/3600)." hours ago";
		else if($s<60*60*24*5)
			return floor($s/(60*60*24))." days ago";
		else
			return self::timetostr(time()-$s);
	}
	public static function time_remaining($s){
		if($s<0)
			return "Time over";
		else if($s<5)
			return "Just now";
		else if($s<60)
			return $s." sec.";
		else if($s<60*45)
			return floor($s/60)." min.";
		else if($s<60*60*24)
			return floor($s/3600)." hour";
		else
			return floor($s/(60*60*24))." day";
	}

	public static function maxspace($inp,$len){
		$inp=self::displayMsgBody($inp);
		if(strlen($inp)>$len)
			return substr($inp,0,$len-3).".. ";
		else
			return $inp;
	}
	public static function displayMsgBody($inp){
		$inp=htmlspecialchars($inp);
		$inp=str_replace("\n","<br>",$inp);
		$inp=str_replace("  ","&nbsp;&nbsp;",$inp);
		$inp=str_replace("\t","&nbsp;&nbsp;&nbsp;&nbsp;",$inp);
		return $inp;
	}
	public static function mergeifunset($a,$b){
		$keys=array_keys($b);
		for($i=0;$i<count($keys);$i++){
			if(!isset($a[$keys[$i]]))
				$a[$keys[$i]]=$b[$keys[$i]];
		}
		return $a;
	}
	public static function allfileexist($files){
		foreach($files as $f){
			if(!file_exists($f))
				return false;
		}
		return true;
	}
	public static function setifunset($data,$key,$val){
		if(!isset($data[$key]))
			$data[$key]=$val;
		return $data;
	}
	public static function capName($name){
		if(strlen($name)>0 && ord('a')<=ord($name[0]) && ord($name[0])<=ord('z') )
			return chr( ord($name[0])-ord('a')+ord('A')  ).substr($name,1);
		else
			return $name;
	}
	public static function getuploadfilename($ext='file',$change=''){
		$timenow=time();
		$fn=$timenow."_".(User::loginId())."_".Fun::encode2(User::loginId()).$change.".".$ext;
		return $fn;
	}
	public static function uploadfile($data,$const,$change='') {
		$outp=array();
		$ext=pathinfo($data['name'],PATHINFO_EXTENSION);
		if(isset($const["maxsize"]) && $data["size"]>$const["maxsize"])
			$outp['ec']=-1;
		else if(isset($const["ext"]) && in_array($ext,$const["ext"]) )
			$outp['ec']=-3;
		else if($data['size']==0){
			$outp["ec"]=2;//no file uploaded, but this is not an error.
			$outp["fn"]="";
		}
		else{
			$fn="data/files/".Fun::getuploadfilename($ext,$change);
			move_uploaded_file($data["tmp_name"],$fn);
			chmod($fn,0777);
			$outp['ec']=1;
			$outp['fn']=$fn;
		}
		return $outp;
	}
	public static function uploadfiles($data,$const){
		$outp=array();
		$ec=1;
		if( isset($const["maxfile"]) && count($data["size"] > $const["maxfile"] )){
			$ec=-4;//Maximum number of file allowed exeed.
		}
		else if(!(count($data['size'])==1 && $data['size'][0]==0 )){
			for($i=0;$i<count($data["tmp_name"]) && $data["tmp_name"][0]!="";$i++){
				$temp=Fun::uploadfile(array('name'=>$data['name'][$i],"size"=>$data["size"][$i],"tmp_name"=>$data["tmp_name"][$i]),$const,$i);
				if($temp['ec']<0){
					$ec=$temp['ec'];
					break;
				}
				else
					$outp[]=$temp['fn'];
			}
		}
		else
			$ec=-2;//Not file uploaded
		return array('ec'=>$ec,'outp'=>$outp);
	}
	public static function resizeimage($curimage,$tosave,$w,$h){
		$cmd="convert $curimage -resize '$w"."x"."$h^' -gravity Center -crop '$w"."x"."$h+0+0' $tosave ; chmod 777 $tosave";
		shell_exec($cmd);
	}
	public static function myexplode($n,$st){
		$temp=explode($n,$st);
		return (count($temp)==1 && $temp[0]=="") ? array() : $temp;
	}
	public static function assign_status($s,$ainfo){
		$temp=array("Waiting for Quote","Waiting for Admin","Solving..","Solved","Deadline passed","Unable to solve","Client not happy");
		if($s==3)
			if($ainfo["adminid"]==User::loginId())
				return "You are solving ..";
			else
				return $ainfo["adminname"]." is solving ..";
		else
			return $temp[$s-1];
	}
	public static function assign_status_code($ainfo){
		$code=4;//Solved.
		if(!($ainfo["quote"]>0))
			$code=1;//Waiting for quote
		else if(!($ainfo["adminid"]>0))
			$code=2;//Waiting for Admin
		else if(!($ainfo["sid"]<0) && $ainfo["deadline"]>time())
			$code=3;///Solving...
		else if($ainfo["sid"]<0)
			$code=7;
		else if($ainfo["deadline"]<time())
			$code=5;//Deadline passed
		else if($ainfo["sid"]==10)
			$code=6;//Admin unable to solve it.
		return $code;
	}
	public static function timeleft($t){
		return $t." Seconds";
	}
	public static function rmsg($msg,$data){
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			$msg=str_replace("<".$keys[$i].">",$data[$keys[$i]],$msg);
		}
		return $msg;
	}
	public static function dummymail($to,$sub,$body){
		$cont="To : ".$to."\nSub : ".$sub."\nTime : ".(Fun::timetostr(time()))."\n\n".$body."\n\n----------------------------------------------------\n";
		$mailfile="data/mailf";
		file_put_contents($mailfile, (file_exists($mailfile) ? file_get_contents("data/mailf"):"").$cont);
		return chmod("data/mailf",0777);
	}
	public static function mail($to,$sub,$body){
		return Fun::dummymail($to,$sub,$body);
	}
	public static function mycurl($url,$post_params=''){
//		return file_get_contents($url);
		$lc="curl -s -k --no-progress-bar -d '$post_params' '$url'";
 		$lc="wget -O- --post-data='$post_params' '$url' -o  /tmp/null";
		return shell_exec($lc);
//		return shell_exec("python check_plogin.py '".$url."'");
	}
	public static function get_key_values($arr){
		$outp=array();
		foreach($arr as $key=>$val){
			$outp[]=$val;
		}
		return $outp;
	}
	public static function mailfromfile($to,$mfile,$data,$subject="AHT"){
		return Fun::mail($to,$subject,Fun::rmsg(file_get_contents( $mfile),$data));
	}
	public static function mailtoadmin($mfile,$data){
		global $g_info;
		return Fun::mailfromfile($g_info["adminmail"],$mfile,$data);
	}
	public static function prvnotf($uid,$sid,$mfile,$data,$url,$totype='a', $notftype=0){
		$content=Fun::rmsg(file_get_contents($mfile),$data);
		$nid=Sqle::insertVal("notf",array("uid"=>$uid,"sid"=>$sid,"content"=>$content,"time"=>time(),"isr"=>"0","url"=>$url,'notftype'=>$notftype,'utype'=>$totype ));
		Sql::query("update notf set url=concat(url,'&notfid=',id) where id=?",'i',array(&$nid));
		return $nid;
	}
	public static function profiletabs(){
		if(User::loginType()=='a')
			$arrtabs=array("curassign"=>"Under Review", "urassign"=>"Processing" ,"arcassign"=>"Delivered" );
		else
			$arrtabs=array("curassign"=>"current Assignment","arcassign"=>"Old Assignment" );
		return $arrtabs;
	}
	public static function addselect($oparr,$text='Select'){
		array_unshift ($oparr,array('disptext'=>$text,'val'=>''));
		return $oparr;
	}
	public static function arrtooption($arr,$type='intval'){
		$outp=array();
		for($i=0;$i<count($arr);$i++){
			$temp=array('disptext'=>$arr[$i],'val'=>( $type=='intval' ? $i+1 : $arr[$i] ));
			$outp[]=$temp;
		}
		return $outp;
	}
	public static function rquery($msg,$data){
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			$msg=str_replace("{".$keys[$i]."}",$data[$keys[$i]],$msg);
		}
		return $msg;
	}
	public static function makeDummyTableQuery($arr,$key){
		if(count($arr)==0)
			return "select * from (select 1 as ".$key." ) temp_".$key." where 1=2 ";
		$temp=array();
		$temp[]="select ".(0+$arr[0])." as ".$key;
		for($i=1;$i<count($arr);$i++){
			$temp[]="select ".(0+$arr[$i]);
		}
		$query=implode(" union ", $temp);
		return $query;
	}
	public static function keyind($arr,$key){//starts from 1
		$fkey=array_search($key,array_keys($arr));
	}
	public static function makeDummyTableColumns($arr,$flds,$params=''){
		if(count($arr)==0){
			return "select 1 as id limit 0";
		}
		else{
			$qtexts=array();
			foreach($arr as $i=>$val){
				$qtext="(select ";
				$farr=array();
				foreach($val as $j=>$val1){
					$farr[]=( ($params!='' && $params[$j]=='s') ? "'".$val1."'" : (0+$val1)).($i==0?( " as ".$flds[$j] ):"" );
				}
				$qtext.=implode(" , ", $farr ).")";
				$qtexts[]=$qtext;
			}
			$query=implode(" union ", $qtexts );
			return $query;
		}
	}
	public static function emptydict($arr){
		$outp=array();
		foreach($arr as $key){
			$outp[$key]="";
		}
		return $outp;
	}
	public static function smilymsg($data){
		$data=str_replace("<3", ":heart:",$data );
		$data=htmlspecialchars($data);
		$exp=array(':)'=>'smile.png',':-)'=>'smile.png',':p'=>'p.png',':P'=>'p.png',':/'=>'angry.png',';)'=>'eye.png',':('=>'sad.png',':o'=>'question.png',':O'=>'question.png','<3'=>'heart.png',':*'=>'kiss.png',':-*'=>'kiss.png',':heart:'=>'heart.png');
		$exp1=array("\n"=>"<br>", "  "=>"&nbsp;&nbsp;", "\t"=>"&nbsp;&nbsp;&nbsp;");
		foreach($exp1 as $key=>$val){
			$data=str_replace($key, $val ,$data);
		}
		foreach($exp as $key=>$val){
			$data=str_replace($key,"<img  style='margin-bottom:-4px;' src='photo/usefull/".$val."' />"  ,$data);
		}
		return $data;
	}

}

?>