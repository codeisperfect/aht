<?php
class Valid extends Sql{
	public static function accountTypes(){
		return array('a','u');
		//a:Admin
		//u:user
	}
	public static function accountNames($t){
		$dataANames=array('a'=>'Admin','u'=>'User');
		return $dataANames[$t];
	}
	public static function isValidType($t){
		return in_array($t, self::accountTypes()  );
	}
	public static function isValidEmail($email){
		return preg_match("/\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}\b/",$data['email']);
	}
	public static function isValidPassword($password){

	}
	public static function isValidSignUp($data){//Check just be formatting of data.
		return ( isValidEmail($data['email']) && $data['password']!="" && self::isValidType($data['type']) );
	}


///For Users...
	public static function apply_position($p){
		$positions=array('m','s','d','vi','fs');
		return in_array($p,$positions);
	}
}
?>
