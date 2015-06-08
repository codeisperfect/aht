<?php
class User extends Sql{
	public static function accountTypes(){
		return array('a','u','e');
	}
	public static function accountNames($t){
		$dataANames=array('a'=>'Admin','u'=>'User','e'=>"Expert");
		return $dataANames[$t];
	}
	public static function isValidType($t){
		return in_array($t, self::accountTypes()  );
	}
	public static function islogin(){
		if ( isset($_SESSION['login']) && isset($_SESSION['login']["id"])  && isset($_SESSION['login']["type"]) &&  (0+$_SESSION['login']["id"]) > 0   && 	self::isValidType($_SESSION["login"]["type"])){
			$_SESSION["login"]["id"]=0+$_SESSION["login"]["id"];
			return $_SESSION['login'];
		}
		else
			return false;
	}
	public static function loginType(){
		$temp=self::islogin() ;
		return ($temp ? $temp['type']:$temp);
	}
	public static function loginId(){
		$temp=self::islogin() ;
		return ($temp ? $temp['id']:$temp);
	}
	public static function logout(){
		$_SESSION['login']=null;
	}
	public static function isloginas($t){
		return (self::islogin() && self::loginType()==$t);
	}
	public static function isUserExist($email){
		$temp=Sqle::selectVal( "users","email,password",array('email'=>$email),1);
		return !($temp==null);
	}
	public static function isValidSignUp($data){
		return (preg_match("/\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b/",$data['email']) && 	$data['password']!="" && self::isValidType($data['type']) );
	}
	public static function isValidSignUpData($data){
		if(!self::isValidSignUp($data))
			return 0;//not valid input
		else if(self::isUserExist($data['email']))
			return -1;//account already exist.
		else
			return 1;//yes, This is valid SignUpable data.
	}
	public static function signUp($data){//email,password,type keys are compulsary !!
		$data['create_time']=$data['update_time']=time();
		if(!self::isValidSignUp($data))
			return 0;//not valid input
		else if(self::isUserExist($data['email']))
			return -1;//account already exist.
		else{
			$data["username"]=$data["email"];
			$ip=$_SERVER['REMOTE_ADDR'];
			$data['last_ip']=$ip;
			$data['profilepic']="photo/human1.png";
			$temp=array('id'=>Sqle::insertVal('users',$data),'type'=>$data['type']);
			$_SESSION['login']=$temp;
			return $temp;
		}
	}
	public static function signIn($email,$password){
		$temp=Sqle::selectVal("users",'id,type,password,conf',array('email'=>$email),1);
		if($temp==null)
			return -1;//account not exist
		else if( $temp['password']!=$password)
			return 0;//password didn't matched !
		else if($temp['conf']=='d')
			return -2;//Your account is deactivated ! 
		else{
			$temp=array('id'=>$temp['id'],'type'=>$temp['type']);
			$_SESSION['login']=$temp;
			return $temp;
		}
	}
	public static function changePassword($oldp,$newp){
		if(self::islogin())
			return Sqle::updateVal('users',array('password'=>$newp),array('id'=>self::loginId(),'password'=>$oldp),1);
		else
			return false;
	}
	public static function userProfile($uid){
		return Sqle::selectVal("users","*",array('id'=>$uid),1);
	}
	public static function myprofile(){
		if(User::islogin())
			return self::userProfile(User::loginId());
		else
			return null;
	}
	public static function updateLoginTime(){
		$timenow=time();
		Sqle::updateVal("users",array('last_login'=>$timenow),array('id'=>User::loginId()));
	}

}
?>