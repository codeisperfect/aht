<?php
abstract class Sql{
	public static $mysqli=null;
	public static function init($DB){
		if(!isSet(self::$mysqli))
			self::$mysqli=$DB;
	}
	public static function dummy_query($query,$param_string="",$param_array=array()){
//		global $db_data;
		$add="";
		foreach($param_array as $p){
			$add.="&array".urlencode("[]")."=".urlencode($p);
		}
		$params="query=".urlencode($query)."&params=".urlencode($param_string)."&action=query&key=".urlencode("moHitMV143")."&table=".(db_table).$add;
		$url=SQL_SERVER."sql.php";
		return Fun::mycurl($url,$params);
	}

	public static function dummy_getArray($query,$param_string="",$param_array=array()){
//		global $db_data;
		$add="";
		foreach($param_array as $p){
			$add.="&array".urlencode("[]")."=".urlencode($p);
		}
		$params="query=".urlencode($query)."&params=".urlencode($param_string)."&action=getArray&key=".urlencode("moHitMV143")."&table=".(db_table).$add;
		$url=SQL_SERVER."sql.php";
		$webc=Fun::mycurl($url,$params);
		$output=json_decode($webc);
		$outp=array();
		for($i=0;$i<count($output->{"output"});$i++){
			$row=array();
			for($j=0;$j<count($output->{"keys"});$j++){
				$row_keys=$output->{"keys"};
				$row_key=$row_keys[$j];
				$row[$row_key]=$output->{"output"}[$i]->{$row_key};
			}
			$outp[]=$row;
		}
		return $outp;
	}

	public static function query($query,$param_string="",$param_array=array()){//used in void type query like insert,delete,update
		init_db();
//		return self::dummy_query($query,$param_string,$param_array);
		$stmt=self::$mysqli->prepare($query);
		array_unshift($param_array,$param_string);
		if(count($param_array)>1)
			call_user_func_array(array($stmt,'bind_param'),$param_array);
		$stmt->execute();
		$ans=max(self::$mysqli->affected_rows,self::$mysqli->insert_id);
		$stmt->close();
		return $ans;
	}

	public static function getArray($query,$param_string="",$param_array=array()){//used in select type query
		init_db();
//		return self::dummy_getArray($query,$param_string,$param_array);
		$stmt=self::$mysqli->prepare($query);
		array_unshift($param_array,$param_string);
		if(count($param_array)>1)
			call_user_func_array(array($stmt,'bind_param'),$param_array);
		$stmt->execute();
		$result=$stmt->result_metadata();
		$row=array();
		$temp=array();
		$params=array();//list of location,of some pointer where value of answill come.

		while($field=$result->fetch_field()){
			$row[$field->name]=null;
			$params[]=$field->name;
			$temp[]=&$row[$field->name];
		}
		call_user_func_array(array($stmt,'bind_result'),$temp);
		$out=array();
		while($stmt->fetch()){
			$thisRow=array();
			for($i=0;$i<count($row);$i++){
				$thisRow[$params[$i]]=$row[$params[$i]];
			}
			$out[]=$thisRow;
		}
		$stmt->close();
		return $out;
	}
	public static function getArrayLength($query,$param_string="",$param_array=array()){//used in select type query, to know length only
		init_db();
		$stmt=self::$mysqli->prepare($query);
		array_unshift($param_array,$param_string);
		if(count($param_array)>1)
			call_user_func_array(array($stmt,'bind_param'),$param_array);
		$stmt->execute();
		$stmt->store_result();
		$numRows=$stmt->num_rows;
		$stmt->close();
		return $numRows;
	}

}

?>
