<?php
	function param2str($data){
		$params="";
		$temp=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href","method");
		$keymap=array("ph"=>"placeholder","dc"=>"data-condition");
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			if( in_array($keys[$i],$temp) || substr($keys[$i],0,5)=="data-" || substr($keys[$i],0,2)=="on" ){
				$params.=(" ".(isset($keymap[$keys[$i]])?$keymap[$keys[$i]]:$keys[$i])."='".$data[$keys[$i]]."' ");
			}
		}
		return $params;
	}


	function paramdict_to_str($data){//Same Function as Above.Kept for Backward Compability.
		$params="";
		$temp=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled","align","valign","action","autofocus","style","rel","type","href","method");
		$keymap=array("ph"=>"placeholder","dc"=>"data-condition");
		$keys=array_keys($data);
		for($i=0;$i<count($keys);$i++){
			if( in_array($keys[$i],$temp) || substr($keys[$i],0,5)=="data-" || substr($keys[$i],0,2)=="on" ){
				$params.=(" ".(isset($keymap[$keys[$i]])?$keymap[$keys[$i]]:$keys[$i])."='".$data[$keys[$i]]."' ");
			}
		}
		return $params;
	}
	function getparams($data=null){//Dict Array of parameters , return parameters string
		if($data==null)
			$data=array();
		if(!isset($data["class"]))
			$data["class"]="form-control";
		return paramdict_to_str($data);
		// $params="";
		// $temp=array("name","value","style","class","id","type","ph","onclick","dc",'rows',"disabled");
		// $keymap=array("ph"=>"placeholder","dc"=>"data-condition");
		// $keys=array_keys($data);
		// for($i=0;$i<count($keys);$i++){
		// 	if( in_array($keys[$i],$temp) || substr($keys[$i],0,5)=="data-" || substr($keys[$i],0,2)=="on" ){
		// 		$params.=(" ".(isset($keymap[$keys[$i]])?$keymap[$keys[$i]]:$keys[$i])."='".$data[$keys[$i]]."' ");
		// 	}
		// }
		// return $params;
	}
	function dict_to_dataparams($inp){
		$outp=array();
		foreach($inp as $key=>$val){
			$outp["data-".$key]=$val;
		}
		return $outp;
	}
	function input($data=null){
?>
		<input <?php echo getparams($data); ?> />
<?php
	}
	function textarea($data=null){
		$data=Fun::setifunset($data,"html","");
?>
		<textarea <?php echo getparams($data); ?> ><?php echo $data["html"]; ?></textarea>
<?php
	}
	function button($data=null){
		if($data==null)
			$data=array();
		if(!isset($data["html"]))
			$data["html"]="Mohit-Button";
		if(!isset($data["class"]))
			$data["class"]="btn btn-default";
		if(!isset($data["type"]))
			$data["type"]="button";
	?>
		<button <?php echo getparams($data); ?> ><?php echo $data["html"]; ?></button>
	<?php
	}
	function select(){
	}
	function popupalert($data){
		if(!isset($data["title"]))
			$data["title"]="Alert";
		if(!isset($data["body"]))
			$data["body"]="";
		if(!isset($data["footer"]))
			$data["footer"]="";

	?>
		<div class="modal fade" id="alertPopupId" tabindex="-1" role="dialog" aria-labelledby="alertPopup" aria-hidden="true" style='' >
			<div class="modal-dialog" style='min-width:200px;' >
				<div class="modal-content" style='overflow-y:hidden' >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id='alertTitle' ><?php echo $data["title"]; ?></h4>
					</div>
					<div class="modal-body" style='' id='alertText' align=left >
						<?php echo $data["body"]; ?>
					</div>
					<div class="modal-footer">
						<?php echo $data["footer"]; ?>
						<button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
					</div>
				</div>
			</div>
		</div>
	
	<?php
	}
	function popupconfirm(){
		if(!isset($data["title"]))
			$data["title"]="Confirmation";
		if(!isset($data["body"]))
			$data["body"]="";
		if(!isset($data["footer"]))
			$data["footer"]="";

	?>
		<div class="modal fade" id="confirmPopupId" tabindex="-1" role="dialog" aria-labelledby="confirmPopup" aria-hidden="true" style='' >
			<div class="modal-dialog" style='min-width:200px;' >
				<div class="modal-content" style='overflow-y:hidden' >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id='confirmTitle' ><?php echo $data["title"]; ?></h4>
					</div>
					<div class="modal-body" style='' id='confirmText' align=left >
						<?php echo $data["body"]; ?>
					</div>
					<div class="modal-footer">
						<?php echo $data["footer"]; ?>
						<button type="button" class="btn btn-default"  data-dismiss="modal" onclick='' id='confirmconfirm' >yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	function popup($data){
		$data=Fun::mergeifunset($data,array('title'=>'Popup','body'=>'','footer'=>'','name'=>'','stylebody'=>'','stylemain'=>'min-width:200px;'));
?>
		<div class="modal fade" id="<?php echo $data["name"]; ?>PopupId" tabindex="-1" role="dialog" aria-labelledby="<?php echo $data["name"]; ?>Popup" aria-hidden="true" style='' >
			<div class="modal-dialog" style='<?php echo $data["stylemain"]; ?>' >
				<div class="modal-content" style='overflow-y:hidden;' >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id='<?php echo $data["name"]; ?>Title' ><?php echo $data["title"]; ?></h4>
					</div>
					<div class="modal-body" style='<?php echo $data['stylebody']; ?>' id='<?php echo $data["name"]; ?>Text' align=left >
						<?php echo $data["body"]; ?>
					</div>
					<div class="modal-footer">
						<?php echo $data["footer"]; ?>
						<button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
					</div>
				</div>
			</div>
		</div>

<?php		
	}
	function attributeneed($needs,$data,$map=array()){
		$outp="";
		foreach($needs as $i){
			if(isset($map[$i]))
				$val=$data[$map[$i]];
			else
				$val=$data[$i];
			$outp.=" data-".$i.'="'.$val.'" ';
		}
		return $outp;
	}
	function setdefaultform_input($data){
		if($data==null)
			$data=array();
		$data=Fun::setifunset($data,"onkeyup","checkValid(this,event);");
		$data=Fun::setifunset($data,"dc","simple");
		$data=Fun::setifunset($data,"divs","");//Style of outer DIV
		$data=Fun::setifunset($data,"lname","");//Style of outer DIV
		return $data;
	}
	function form_input($data,$setdata=null){
		$data=setdefaultform_input($data);
		if($setdata!=null && isset($data["name"]) && isset($setdata[$data["name"]]))
			$data["value"]=$setdata[$data["name"]];
?>
			<div class="form-group  has-feedback "  style='<?php echo $data["divs"]; ?>' >
				<label style='font-weight:600;' ><?php echo $data["lname"]; ?></label>
				<?php
					input($data);
				?>
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
<?php		
	}
	function form_textarea($data,$setdata=null){
		$data=setdefaultform_input($data);
		$data=Fun::setifunset($data,"style","");
		$data["style"]="resize:none;".$data["style"];
		if($setdata!=null && isset($data["name"]) && isset($setdata[$data["name"]]))
			$data["html"]=$setdata[$data["name"]];
?>
			<div class="form-group  has-feedback "  style='<?php echo $data["divs"]; ?>' >
				<label style='font-weight:600;' ><?php echo $data["lname"]; ?></label>
				<?php
					textarea($data);
				?>
				<span style='display:none;' aria-hidden="true"></span>
			</div>
<?php
	}
	function heading($data){
?>
	<p style='margin:5px;font-size:25px;' align=center ><?php echo $data["text"]; ?></p>
<?php
	}
	function label($data,$setdata=null){
		$data=Fun::setifunset($data,"id","");
		$data=Fun::setifunset($data,"label","Check mohit");
		$data=Fun::setifunset($data,"style","float:left;margin-top:10px;");
		$data=Fun::setifunset($data,"class","");
		$data=Fun::setifunset($data,"checked","t");
		if($setdata!=null && isset($data["name"]) && isset($setdata[$data["name"]]))
			$data["checked"]=$setdata[$data["name"]];
		
?>
	<div>
		<input <?php if($data["checked"]=="t") echo "checked";  ?> type="checkbox"  onchange="changelabelcolor(this);" <?php echo getparams($data); ?> >
		<label <?php if($data['id']!='') echo "for='".$data["id"]."'";   ?> style='float:left;margin:5px;color:gray;' ><?php echo $data["label"]; ?></label>
		<div style='clear:both;' ></div>
	</div>
<?php		
	}
	function maketab($data){
		if($data==null)
			$data=array();
		$data=Fun::setifunset($data,'page','');
		$data=Fun::setifunset($data,'pa','home');//Page Active
		$data=Fun::setifunset($data,'name','Home');
		$data=Fun::setifunset($data,'href',HOST);
?>
<li role="presentation" class="<?php if($data['pa']==$data["page"]) echo "active"; ?>" ><a href="<?php echo $data['href']; ?>"><?php echo $data['name']; ?></a></li>
<?php
	}
	function dispTableTitle($ttitle){
		?>
			<tr>
			<?php
				for($i=0;$i<count($ttitle);$i++){
			?>
				<td style='padding:10px;' ><?php echo $ttitle[$i]; ?></td>
			<?php
				}
			?>
			</tr>
		<?php
	}
	function get_checkbox($text,$cbid='',$data=array()){
		$data=Fun::mergeifunset($data,array("divstyle"=>"","labelstyle"=>"","onchange"=>"","class"=>"","dataparams"=>array(),"ischecked"=>false ));
//		return "<div style='cursor:pointer;color:rgb(255,255,255);font-weight:900;' ><input id='select_checkbox".$cbid."' type='checkbox' style='float:left;margin-top:10px;' ><label for='select_checkbox".$cbid."' style='float:left;margin:5px;' >".$text."</label><div style='clear:both;' ></div></div>";
//		return '<div class="checkbox check-default" style="'.$data["divstyle"].'"  ><input id="select_checkbox'.$cbid.'" type="checkbox" checked ><label for="'.$text.'</label></div>';

		return "<div style='cursor:pointer;color:rgb(255,255,255);font-weight:900;".$data["divstyle"]."' ><input id='select_checkbox".$cbid."' type='checkbox' style='' onchange='".$data["onchange"]."' class='".$data["class"]."' ".  paramdict_to_str(dict_to_dataparams($data["dataparams"]))  ."  >&nbsp;&nbsp;<label for='select_checkbox".$cbid."' style='cursor:pointer;".$data["labelstyle"]."'  >".$text."</label></div>";
	}






	function opent($tag,$params=array()){
		echo "<".$tag." ".paramdict_to_str($params)." >";
	}
	function closet($tag){
		echo "</".$tag.">";
	}
	function ocloset($tag,$content='',$params=array()){
		opent($tag,$params);
		echo $content;
		closet($tag);
	}
	function hinp($name,$val){
		return "<input type=hidden name='$name' value='$val' />";
	}
	function hidinp($name,$val){
		print hinp($name,$val);
	}
	function print_name_link($name,$link=HOST,$attrs=array()){
		return "<a href='$link' ".paramdict_to_str($attrs)." >$name</a>";
	}
	function span($inp,$attrs=array()){
		$attrs=Fun::setifunset($attrs,"lname","span");
		opent($attrs["lname"],$attrs);
		echo Fun::displayMsgBody($inp);
		closet($attrs["lname"]);
	}

	function draw($obj,$depth=0){
		if(gettype($obj)=='array'){
			$obj=Fun::mergeifunset($obj,array('tag'=>'div','params'=>array(),'cl'=>array()));
			echo str_repeat(" ",$depth);
			opent($obj['tag'],$obj['params']);
			echo "\n";
			foreach($obj["cl"] as $newc){
				draw($newc,$depth+1);
				echo "\n";
			}
			echo str_repeat(" ",$depth);
			closet($obj['tag']);
		}
		else{
			echo str_repeat(" ",$depth);
			$obj->disp();
		}
	}


	function clear(){
?>
	<div class='clear' ></div>
<?php
	}
	function csslink($href){
?>
<link type="text/css" rel="stylesheet" href="<?php echo $href; ?>" />
<?php
	}


?>
