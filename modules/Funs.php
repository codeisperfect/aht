<?php
abstract class Funs{
	public static function mailfromfile($to,$mfile,$data,$subject="AHT"){
		return Fun::mail($to,$subject,Fun::rmsg(file_get_contents( $mfile),$data));
	}
	public static function mailtoadmin($mfile,$data){
		global $g_info;
		return Fun::mailfromfile($g_info["adminmail"],$mfile,$data);
	}
	public static function prvnotf($uid,$sid,$mfile,$data,$url){
		$content=Fun::rmsg(file_get_contents($mfile),$data);
		$nid=Sqle::insertVal("notf",array("uid"=>$uid,"sid"=>$sid,"content"=>$content,"time"=>time(),"isr"=>"0","url"=>$url ));
		Sql::query("update notf set url=concat(url,'&notfid=',id) where id=?",'i',array(&$nid));
		return $nid;
	}
	public static function profiletabs(){
		if(User::loginType()=='a')
			$arrtabs=array("curassign"=>"All present Assignment", "urassign"=>"Assigned to you" ,"arcassign"=>"Old Assignment" );
		else
			$arrtabs=array("curassign"=>"current Assignment","arcassign"=>"Old Assignment" );
		return $arrtabs;
	}
	public static function topiclist_to_num($tl){
		global $subt;
		$outp=array();
		foreach($tl as $key1=>$val1){
			foreach($val1 as $key2=>$val2){
				foreach($val2 as $key3=>$val3){
					$fkey1=array_search($key1,array_keys($subt));
					if($fkey1!==false){
						$fkey2=array_search($key2,array_keys($subt[$key1]));
						if($fkey2!==false){
							$fkey3=array_search($val3, $subt[$key1][$key2] );
							if($fkey3!==false){
								$fkey1+=1;
								$fkey2+=1;
								$fkey3+=1;
								if(!isset($outp[$fkey1]))
									$outp[$fkey1]=array();
								if(!isset($outp[$fkey1][$fkey2]))
									$outp[$fkey1][$fkey2]=array();
								$outp[$fkey1][$fkey2][]=$fkey3;
							}
						}
					}
				}
			}
		}
		return $outp;
	}
	public static function topiclistquery(){
		global $subt;
		$nlist=self::topiclist_to_num($subt);
		$subtl=self::dict_to_arrlist($subt);
		$nlistl=self::dict_to_arrlist($nlist);
		$mergedlist=array();
		for($i=0;$i<count($subtl) && $i<count($nlistl) ; $i++){
			$mergedlist[]=array($nlistl[$i][0],$nlistl[$i][1],$nlistl[$i][2],$subtl[$i][0],$subtl[$i][1],$subtl[$i][2] );
		}
		return Fun::makeDummyTableColumns($mergedlist,array('a','b','c','d','e','f'),'iiisss' );
	}
	public static function dict_to_arrlist($tl){//inputs a dict tree of 3 level, converts in array of 3 sized to be pushed in db. style.
		$outp=array();
		foreach($tl as $key1=>$val1){
			foreach($val1 as $key2=>$val2){
				foreach($val2 as $key3=>$val3){
					$outp[]=array($key1,$key2,$val3);
				}
			}
		}
		return $outp;
	}
	public static function services_list(){
		$src=file_get_contents("php/content/services");
		$blocks=explode("\n\n",$src);
		$outp=array();
		for($i=0;$i<count($blocks);$i++){
			$tnb=explode("\n",$blocks[$i]);
			$outp[]=array("title"=>$tnb[0],"body"=>$tnb[1]);
		}
		return $outp;
	}
	public static function features_list(){
		$src=file_get_contents("php/content/features");
		$blocks=explode("\n\n",$src);
		$outp=array();
		for($i=0;$i<count($blocks);$i++){
			$tnb=explode("\n",$blocks[$i]);
			$outp[]=array("title"=>$tnb[0],"body"=>$tnb[1]);
		}
		return $outp;
	}
	public static function my_menu($myf=null){
		$title=array('disp'=>"My profile",'link'=>'profile.php');
		if(User::isloginas('u'))
			$list=array(
				'profile.php'=>"My Profile",
				'submitnew.php'=>"Submit new assignment",
				'myassignments.php'=>"My Assignments",
				'?logout'=>"Logout"
				);
		else if(User::isloginas('e'))
			$list=array(
				'profile.php'=>"My Profile (".User::accountNames(User::loginType()).")",
				'assignments.php?list=my'=>"My Assignments",
				'assignments.php?list=all'=>"All Assignments",
				'?logout'=>"Logout"
				);
		else if(User::isloginas('a')){
			$list=array(
				'profile.php'=>"My Profile (".User::accountNames(User::loginType()).")",
				'chatting.php'=>"Customer support",
				'assignments.php'=>"All Assignments",
				'?logout'=>"Logout"
				);
		}
		else{
			$title=array('disp'=>"More",'link'=>'');
			$list=array(
				'login.php?type=signup'=>"Create an account",
				'content.php?cname=pricing.html'=>"Pricing",
				'content.php?cname=howitworks.html'=>"How it works",
				'content.php?cname=contactus'=>"Contact Us",
				'expjoin.php'=>"Expert join us",
				);
		}
		return array('title'=>$title,'list'=>$list);
	}
	public static function msgallow(){
		$temp=array('u'=>array('a'),'a'=>array('u','e'),'e'=>array('a'));
		if(User::islogin())
			return $temp[User::loginType()];
		else
			return array();
	}
	public static function canbeseen($rtype,$stype){
		if(User::loginType()=='a'){
			echo User::accountNames($stype).",".User::accountNames($rtype);
		}
		else
			return "";
	}
	public static function in_tabs($tabs,$id){
		return isset($tabs["list"][$id] );
	}
	public static function assign_status($qn,$inp=array()){
		if($qn["num_admin_comment"]==0 )
			return 1;
		else if(!$qn["myprice"]>0)
			return 2;
		else if(!($qn["paid"]>0))
			return 3;
		else if(!($qn["num_soln_files"]>0) && $qn["status"]=="")
			return 4;
		else if(!($qn["num_soln_files"]>0) && $qn["status"]==-1)
			return 6;
		else if(($qn["num_soln_files"]>0))
			return 5;
	}
}
?>