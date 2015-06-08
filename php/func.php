<?php
	function jshref($url=""){
		return "window.location.href='$url'";
	}
	function sessm($key,$val){
		return (isset($_SESSION[$key]) && $_SESSION[$key]==$val);
	}
	function init_db(){
		global $DB,$db_data;
		if($DB==null){
			$DB = new mysqli( $db_data['host'] , $db_data['user'] , $db_data['pass'] , $db_data['db']);
			Sql::init($DB);
		}
	}
	function closedb(){
		global $DB;
		if($DB!=null)
			$DB->close();
	}
	function getval($key,$arr){
		 return (isset($arr[$key]) ? $arr[$key] : null );
	}
	function post($key){
		return getval($key,$_POST);
	}
	function get($key){
		return getval($key,$_GET);
	}
	function sets($key,$val){
		$_SESSION[$key]=$val;
	}
	function gets($key){
		return $_SESSION[$key];
	}
	function load_view($view,$inp=array()){
		global $view_default;
		if(isset($view_default[$view]))
			$inp=Fun::mergeifunset($inp,$view_default[$view]);
		foreach($inp as $key=>$val){
			$$key=$val;
		}
		$view="php/views/".$view;
		if(file_exists($view))
			include $view;
		else
			echo "MM Error : Unable to load view ".$view." Line ".__LINE__." in file ".__FILE__ ;
	}
	function str2json($inp){
		$temp=json_decode($inp);
		if($temp)
			return (array)$temp;
		else
			return null;
	}

	function arr2option($arr,$type='intval'){
		$outp=array();
		for($i=0;$i<count($arr);$i++){
			$temp=array('disptext'=>$arr[$i],'val'=>( $type=='intval' ? $i+1 : $arr[$i] ));
			$outp[]=$temp;
		}
		return $outp;
	}
	function isvalid_action($post_data){
		global $_ginfo;
		if(isset($_ginfo["action_constrain"][$post_data["action"]])){
			$sarr=$_ginfo["action_constrain"][$post_data["action"]];
			$sarr=Fun::mergeifunset($sarr,array("users"=>"","need"=>array()));
			if($sarr["users"]!="" && strpos($sarr['users'], User::loginType() )===false)
				return -2;
			if(!Fun::isAllSet($sarr["need"], $post_data))
				return -9;
		}
		return true;
	}
	function islset($data,$arr){
		for($i=0;$i<count($arr);$i++){
			if(!isset($data[$arr[$i]]))
				return false;
			$data=$data[$arr[$i]];
		}
		return true;
	}
	function getmyneed($fname){
		global $_ginfo;
		return $_ginfo["action_constrain"][$fname]["need"];
	}

	function handle_request($post_data){
		global $_ginfo;
		$b=new Actions();
		if(User::isloginas('u'))
			$a=new Userc();
		else if(User::isloginas('a'))
			$a=new Admin();
		else
			$a=$b;
		$outp=array("ec"=>-11);
		if(isset($post_data["action"])  ){
			$isvalid=isvalid_action($post_data);
			if(!($isvalid>0))
				$outp["ec"]=$isvalid;
			else{
				$func=$post_data["action"];
				if( method_exists($a,$post_data["action"]))
					$outp=$a->$func($post_data);
				else if( method_exists($b,$post_data["action"]))
					$outp=$b->$func($post_data);
				else if(islset($_ginfo,array("autoinsert",$post_data["action"]))) {
					$action_spec=$_ginfo["autoinsert"][$post_data["action"]];
					$action_spec=Fun::mergeifunset($action_spec,array("fixed"=>array(),"add"=>array()));
					$ins_data=Fun::getflds(getmyneed($post_data["action"]) , $post_data );
					$ins_data=Fun::mergeifunset($ins_data,$action_spec["add"]);
					$fixvalues=array("time"=>time(),"uid"=>User::loginId());
					foreach($action_spec["fixed"] as $i=>$val){
						$ins_data[$val]=$fixvalues[$val];
					}
					$outp["data"]=Sqle::insertVal($action_spec["table"],$ins_data);
					$outp["ec"]=1;
				}
			}
		}
		return $outp;
	}
	function resizeimg($filename,$tosave, $max_width, $max_height){
		$imginfo=getimagesize($filename);
		list($orig_width, $orig_height) = $imginfo;
		$type=$imginfo[2];


		$crop_width=$orig_width;
		$crop_height=$orig_height;
		if($orig_width*$max_height <= $orig_height*$max_width){
			$crop_height=$orig_width*$max_height/$max_width;
		}
		else{
			$crop_width=$orig_height*$max_width/$max_height;
		}

		$image_p = imagecreatetruecolor($max_width, $max_height);
		switch($type){
			case "1": 
				$image = imagecreatefromgif($filename); 
				$transparent = imagecolorallocatealpha($image_p, 0, 0, 0, 127);
				imagefill($image_p, 0, 0, $transparent);
				imagealphablending($image_p, true); 				
				break;
			case "2": $image = imagecreatefromjpeg($filename);break;
			case "3": 
				$image = imagecreatefrompng($filename);
				imagealphablending($image_p, false);
				imagesavealpha($image_p, true);
				break;
			default:  $image = imagecreatefromjpeg($filename);
		}
		imagecopyresampled($image_p, $image, 0, 0, ($orig_width-$crop_width)/2, ($orig_height-$crop_height)/2, $max_width, $max_height, $crop_width, $crop_height);

		$ext=pathinfo($tosave, PATHINFO_EXTENSION);

		switch($ext){
			case "gif": imagegif($image_p,$tosave); break;
			case "jpg": imagejpeg($image_p,$tosave,100); break;
			case "jpeg": imagejpeg($image_p,$tosave,100); break;
			case "png": imagepng($image_p,$tosave,0);break;
			default: imagejpeg($image_p,$tosave,100);
		}
	}
	function genfilearr($name,$len,$start=1){
		$outp=array();
		for($i=$start;$i<$start+$len;$i++){
			$outp[]=str_replace("%d", $i, $name);
		}
		return $outp;
	}
?>