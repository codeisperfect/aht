<?php
class Input{
	public $inps;
	public function __construct($inp=array()){
		$inps=Fun::mergeifunset($inp,array("type"=>"text"));
		if($inps["type"]=="checkbox"){
			$inps=Fun::mergeifunset($inps,Fun::emptydict(array("divstyle","labelstyle","onchange","class","cbid","iclass","name")));
			$inps=Fun::mergeifunset($inps,array("params"=>array(),"ischecked"=>false,"label"=>"check","cc"=>"check-default" ));//cc:Class Check,
		}
		else if($inps["type"]=="text"){
			$inps=Fun::mergeifunset($inps,Fun::emptydict(array("divstyle","labelstyle","onchange","iclass","label","name","symbol")));
			$inps=Fun::mergeifunset($inps,array("isspan"=>true,"class"=>"form-control" ));
		}
		$this->inps=$inps;
	}
	public function __destruct(){
	}

	public function param2str($data){
		$params="";
		$temp=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href");
		$keymap=array("ph"=>"placeholder","dc"=>"data-condition");
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			if( in_array($keys[$i],$temp) || substr($keys[$i],0,5)=="data-" || substr($keys[$i],0,2)=="on" ){
				$params.=(" ".(isset($keymap[$keys[$i]])?$keymap[$keys[$i]]:$keys[$i])."='".$data[$keys[$i]]."' ");
			}
		}
		return $params;
	}


	public function disp_checkbox(){
		$inps=$this->inps;
?>
			<div class="checkbox <?php echo $inps["cc"]." ".$inps["class"]; ?>" style="<?php echo $inps["divstyle"]; ?>" >
				<input id="checkbox<?php echo $inps["cbid"]; ?>" type="checkbox" <?php if($inps["ischecked"]) echo "checked"; ?> onchange='<?php echo $inps["onchange"]; ?>' class="<?php echo $inps["iclass"]; ?>" <?php echo $this->param2str($inps["params"]); ?> >
				<label  for="checkbox<?php echo $inps["cbid"]; ?>" style="" ><?php echo $inps["label"] ?></label>
			</div>
<?php
	}
	public function disp_text(){
		$inps=$this->inps;
?>
		<div class="form-group has-feedback "  style='<?php echo $inps["divstyle"]; ?>' >
			<label style='font-weight:600;' ><?php echo $inps["label"]; ?></label>
			<div class="<?php if($inps["symbol"]!="") echo "input-group"; ?>" >
				<?php
					if($inps["symbol"]!=""){
				?>
				<div class="input-group-addon" ><?php echo $inps["symbol"]; ?></div>
				<?php
					}
				?>
				<input <?php echo $this->param2str($inps); ?> />
			</div>
			<?php
//				opent("input",Fun::mergeifunset($inps["params"], Fun::getflds(array("onchange","class","type","name"),$inps) )  );
				if($inps["isspan"]){
			?>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<?php
				}
			?>
		</div>
<?php
	}
	public function disp(){
		$inps=$this->inps;
		if($inps["type"]=="checkbox"){
			$this->disp_checkbox();
		}
		else if($inps["type"]=="text"){
			$this->disp_text();
		}
	}
}
?>
