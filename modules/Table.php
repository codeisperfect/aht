<?php

class Td{
	public $params;
	public $html;
	public $tag;
	public function __construct($inp=array()){
		$inp=Fun::mergeifunset($inp,array('params'=>array(),'html'=>new Text(""),'tag'=>"td"));
		$this->params=$inp['params'];
		$this->html=$inp['html'];
		$this->tag=$inp['tag'];
	}
	public function disp(){
		opent($this->tag,$this->params);
		$this->html->disp();
		closet($this->tag);
	}
}


class Row{
	public $params;
	public $tdlist;
	public function __construct($inp=array()){
		$inp=Fun::setifunset($inp,"type","stud");
		$inp=Fun::mergeifunset($inp,array('params'=>array(),'tdlist'=>array()));
		if($inp["type"]=="simple"){
			foreach($inp["tdlist"] as $key=>$tdelm ){
				$inp["tdlist"][$key]=new Td(array('html'=>$tdelm));
			}
		}
		$this->params=$inp["params"];
		$this->tdlist=$inp["tdlist"];
	}
	public function disp(){
		opent("tr",$this->params);
		foreach($this->tdlist as $tdelm){
			$tdelm->disp();
		}
		closet("tr");
	}
}

class Table{
	public $trlist;
	public $params;
	public function __construct($inp=array()){
		$inp=Fun::mergeifunset($inp,array('params'=>array(),'trlist'=>array()));
		$this->trlist=$inp['trlist'];
		$this->params=$inp['params'];
	}
	public function __destruct(){
	}
	public function disp(){
		opent("table",$this->params);
		foreach($this->trlist as $trelm){
			$trelm->disp();
		}
		closet("table");
	}
}

class Text{
	public $content;
	public function __construct($content=''){
		$this->content=$content;
	}
	public function disp(){
		echo $this->content;
	}
}



?>
