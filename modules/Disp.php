<?php
class Disp extends Sql{
	public static function takeinp($label,$name='',$data=null,$val="",$ph="",$type='text',$cond='simple',$id='', $style='',$style1='',$o='',$ver=1 ){
		if($ver==1){
			if($type=='select'){
				$listo=$val['options'];
				$defaultv=isset($val['default']) ? $val['default']:'' ;
				$mselect=isset($val['mselect']) ? $val['mselect']:'' ;
				$selectVal=($data!=null && $name!='' && isset($data[$name])) ? $data[$name]:$defaultv;
				?>
				<div class="form-group has-feedback  " style='<?php echo $style1; ?>' >
					<label style='' ><?php echo $label; ?></label>
					<select <?php echo $mselect; ?>  data-condition='<?php echo $cond; ?>' onchange='checkValid(this,event);' class=form-control name='<?php echo $name; ?>' <?php if($id!='') echo "id=".$id; ?> style='<?php echo $style; ?>' ><?php
					for($i=0;$i<count($listo);$i++){
						if(gettype($listo[$i])!='array'){
							$val=$disptext=$listo[$i];
						}
						else{
							$val=$listo[$i]['val'];
							$disptext=$listo[$i]['disptext'];
						}
						?><option <?php if($val==$selectVal) echo 'selected';  ?> value='<?php echo $val; ?>' ><?php echo $disptext; ?></option><?php
					}
					?></select>
					<span class="glyphicon form-control-feedback  " aria-hidden="true"></span>
				</div>
				<?php
			}
			else{
				$pholder=$ph==""?"Enter the ".$label:$ph;
				?>
				<div class="form-group  has-feedback "  style='<?php echo $style1; ?>' >
					<label style='font-weight:600;' ><?php echo $label; ?></label>
					<input <?php echo $o; ?> data-condition='<?php echo $cond; ?>' onkeyup='checkValid(this,event);'  name='<?php echo $name; ?>' value='<?php if($data!=null && $name!='' && isset($data[$name] )) echo $data[$name];  else echo $val; ?>'  style='<?php echo $style; ?>' type="<?php echo $type; ?>" class="form-control" <?php if($id!='') echo "id=".$id; ?>  placeholder="<?php echo $pholder; ?>"   >
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
<?php
			}
		}
	}


	public static function takeinp_v2($inp){
		$inp=Fun::setifunset($inp,"label","");
		$inp=Fun::setifunset($inp,"name","");
		$inp=Fun::setifunset($inp,"data",null);
		$inp=Fun::setifunset($inp,"val","");
		$inp=Fun::setifunset($inp,"ph","");
		$inp=Fun::setifunset($inp,"type","text");
		$inp=Fun::setifunset($inp,"cond","simple");
		$inp=Fun::setifunset($inp,"id","");
		$inp=Fun::setifunset($inp,"id","");
		$inp=Fun::setifunset($inp,"style","");
		$inp=Fun::setifunset($inp,"onchange","");
		$inp=Fun::setifunset($inp,"class","form-control");


		$inp=Fun::setifunset($inp,"style1","");
		$inp=Fun::setifunset($inp,"o","");
		$inp=Fun::setifunset($inp,"ver",1);


		$label=$inp["label"];
		$name=$inp["name"];
		$data=$inp["data"];
		$val=$inp["val"];
		$ph=$inp["ph"];
		$type=$inp["type"];
		$cond=$inp["cond"];
		$id=$inp["id"];
		$id=$inp["id"];
		$style=$inp["style"];
		$style1=$inp["style1"];
		$o=$inp["o"];
		$ver=$inp["ver"];


		if($ver==1){
			if($type=='select'){
				$listo=$val['options'];
				$defaultv=isset($val['default']) ? $val['default']:'' ;
				$mselect=isset($val['mselect']) ? $val['mselect']:'' ;
				$selectVal=($data!=null && $name!='' && isset($data[$name])) ? $data[$name]:$defaultv;
				?>
				<div class="form-group has-feedback  " style='<?php echo $style1; ?>' >
					<label style='' ><?php echo $label; ?></label>
					<select <?php echo $mselect; ?>  data-condition='<?php echo $cond; ?>' onchange='checkValid(this,event);<?php echo $inp["onchange"]; ?>' class=form-control name='<?php echo $name; ?>' <?php if($id!='') echo "id=".$id; ?> style='<?php echo $inp["style"]; ?>' ><?php
					for($i=0;$i<count($listo);$i++){
						if(gettype($listo[$i])!='array'){
							$val=$disptext=$listo[$i];
						}
						else{
							$val=$listo[$i]['val'];
							$disptext=$listo[$i]['disptext'];
						}
						?><option <?php if($val==$selectVal && $selectVal!='') echo 'selected';  ?> value='<?php echo $val; ?>' ><?php echo $disptext; ?></option><?php
					}
					?></select>
					<span class="glyphicon form-control-feedback  " aria-hidden="true"></span>
				</div>
				<?php
			}
			else{
				$pholder=$ph==""?"Enter the ".$label:$ph;
				?>
				<div class="form-group  has-feedback "  style='<?php echo $style1; ?>' >
					<label style='font-weight:600;' ><?php echo $label; ?></label>
					<input <?php echo $o; ?> data-condition='<?php echo $cond; ?>' onkeyup='checkValid(this,event);'  name='<?php echo $name; ?>' value='<?php if($data!=null && $name!='' && isset($data[$name] )) echo $data[$name];  else echo $val; ?>'  style='<?php echo $style; ?>' type="<?php echo $type; ?>" class="<?php echo $inp["class"]; ?>" <?php if($id!='') echo "id=".$id; ?>  placeholder="<?php echo $pholder; ?>"   >
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
<?php
			}
		}
	}

	public static function inpAccountTypes($data){
		$accounts=array(array('val'=>'','disptext'=>'Select Account Type') );
		$accounts=array_merge($accounts,User::accountTypes());
		for($i=1;$i<count($accounts);$i++){
			$type=$accounts[$i];
			$accounts[$i]=array('val'=>($type),'disptext'=>User::accountNames($type) );
		}
		Disp::takeinp("Account Type","type",$data,array('options'=> $accounts  ),"","select"  );
	}
	public static function signUpForm($action=''){
	?>
		<div style='width:250px;' >
			<form method=post onsubmit='if(submitForm(this)){request.signup(this);};return false;' action='<?php echo $action; ?>' >
				<div>
					<p class="text-success" ></p>
					<p class="text-danger" ></p>
				</div>
			<?php
			self::takeinp("Full name","name",$_POST,"","","text","simple");
			self::takeinp("Email","email",$_POST,"","","email","email");
			self::takeinp("Password","password",$_POST,"","","password","simple","password");
			self::takeinp("Re-Password","repassword",$_POST,"","ReEnter your password","password","password" );
			?>
			<button type="submit" class="btn btn-default" name=signup >SignUp</button>
			</form>
		</div>
	<?php
	}
	public static function loginForm($action=''){
		?>
		<div style='width:250px;' >
			<form id='loginForm' method=post onsubmit='if(submitForm(this)){request.login(this);};return false;' action='<?php echo $action; ?>' >
				<div>
					<p class="text-success" ></p>
					<p class="text-danger" ></p>
				</div>
			<?php
				self::takeinp("Email","email",$_POST,"","Enter email address","text","email","login_email",'','',' autofocus ');
				self::takeinp("Password","password",$_POST,"","","password","simple","login_password");
			?>
			<button type="submit" class="btn btn-default" name=login >Login</button>
			</form>
		</div>
		<?php
	}
	public static function forgetPassword($action=''){
		?>
		<div style='width:250px;' >
			<form method=get onsubmit='if(submitForm(this)){request.forget(this);};return false;' action='<?php echo $action; ?>' >
				<div>
					<p class="text-success" ></p>
					<p class="text-danger" ></p>
				</div>
			<?php
				self::takeinp("Email","email",$_GET,"","Enter email address","text","email");
			?>
			<button type="submit" class="btn btn-default" name=forget >Reset password</button>
			</form>
		</div>
		<?php
	}

	public static function enterOTP($action=''){
		?>
		<div style='width:250px;' >
			<form method=get onsubmit='if(submitForm(this)){form.sendreq(this,$(this).find("button[type=submit]")[0]);};return false;' data-action="fillotp" data-res='window.location.href="<?php echo HOST."expert.php"; ?>";' >
				<div>
					<p class="text-success" ></p>
					<p class="text-danger" ></p>
				</div>
			<?php
				self::takeinp("One Time password","otp",$_GET,"","Enter one time password","text","otp");
			?>
			<button type="submit" class="btn btn-default" name=forget >Submit</button>
			</form>
		</div>
		<?php
	}
	public static function dispButton($name,$text,$extra=''){
?>
		<button <?php echo $extra; ?> type="submit" class="btn btn-default" name="<?php echo $name; ?>"  ><?php echo $text; ?></button>
<?php
	}
	public static function disp_apply_button($pos){//Required => isloginas('u')
?>
	<?php
		if(User::isloginas('u')) {
			if(!Help::hasapplied($pos) ){
?>
		<textarea id='applycomment' class=form-control placeholder="You want to say something ? " style='resize:none;margin-bottom:5px;' ></textarea>
		<p><button data-waittext='Appling..' data-res='ab.disabled=true;$("#applycomment").hide();' data-restext='Applied' class="btn btn-primary" role="button" data-action='applyforpos' data-params='{"pos":"<?php echo $pos; ?>","comment":$("#applycomment").val(),"action":"applyforpos"}' data-pos='<?php echo $pos; ?>' onclick='ab=this;mohit.confirm(conftext,"button.sendreq(ab);");' >Apply</button></p>
		<?php
			}
			else{
		?>
		<p><button  data-toggle="tooltip" data-placement="right" title="You have already applied for it."  class='btn btn-primary'  >Applied !! </button></p>
		<?php
			}
		}
		else{
		?>
		<p><button data-toggle="modal" data-target="#loginPopupId" aria-hidden="true" class='btn btn-primary'  >Apply</button></p>
		<?php
		}
		?>
<?		
	}
	public static function dispTableTitle($ttitle){
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
	public static function dispTableTitle1($ttitle){
		?>
			<tr>
			<?php
				for($i=0;$i<count($ttitle);$i++){
			?>
				<td style='padding:2px;' ><?php echo $ttitle[$i]; ?></td>
			<?php
				}
			?>
			</tr>
		<?php
	}
	public static function activedeactive($id,$data){
		$data=Fun::setifunset($data,"ad",true);
?>
		<ul id="activedeactive_<?php echo $id; ?>" class="nav nav-tabs" style='border:solid gray 0px;' >
			<li role="presentation" style='padding:0px;border:solid gray 0px;' ><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:5px;border:solid gray 0px;' ><span class='glyphicon glyphicon-wrench' aria-hidden="true" ></span> <span class='caret' ></span></a>
				<ul class="dropdown-menu" role="menu" data-closeonclick='true' >
					<?php
						$arrtext=array("Active Product","Deactive product");
						$correct=array($data["ad"],!$data["ad"]);
						for($i=0;$i<count($arrtext);$i++){
					?>
					<li><a onclick='$(this).parent().parent().find("span").css("visibility","hidden");  $(this).children("span").css("visibility","");' > <span class='glyphicon glyphicon-ok' aria-hidden="true" style='<?php if(!$correct[$i]) echo "visibility:hidden;";  ?>' ></span> <?php echo $arrtext[$i]; ?></a></li>
					<?php
						}
					?>
				</ul>
			</li>
		</ul>
<?php
	}
	public static function dispproduct1(){
?>
				<div class='leftinfo' >
					<div style='height:50px;' >
						<div style='float:right;' >
							<div style='padding-left:10px;' >
								<ul class="nav nav-tabs" style='border:solid gray 0px;' >
									<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
										<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
										<ul class="dropdown-menu pull-right" role="menu" role="menu">
											<li><a  >Change Auto Active Date</a></li>
											<li><a  >Turn on Notifications</a></li>
											<li><a  >Edit</a></li>
											<li><a  >Delete</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div style='float:left;margin-right:5px;' >
							<img src='photo/mohit.jpg' width='38' class='img-circle' />
						</div>
						<div style='float:left;' >
							<div>
								<a>Mohit Saini</a>
							</div>
							<table><tr>
								<td>
									<span class='timepassed' >12 min ago.</span>
								</td>
								<td style='padding-left:10px;' >
									<?php Disp::activedeactive("uploadpic",array()); ?>
								</td>
							</tr></table>
						</div>
						<div class='clear'></div>
					</div>
					<div class='linedevider'></div>
					<div style='margin-bottom:10px;' >
						Saini Mohit.....
						<img src='photo/upics/photo1.jpg' width='100%' class='uploadpic' >
						<img src='photo/upics/photo1.jpg' width='100%' class='uploadpic' >
					</div>

					<div style='background-color:#FEFEFE;' >
						<a>Like</a> &nbsp; <a>Comment</a> &nbsp; <a>Share</a>

						<div class='linedevider'></div>
						<div style='margin-top:2px;' >
							<a>Mohit Saini</a> , <a>Rohit Saini</a> Likes it.
						</div>
						<div class='linedevider'></div>
						<div class=comments  style='margin-top:10px;' >
							<?php
								for($i=0;$i<3;$i++){
							?>
							<div class=comment >
								<div style='float:left;margin-right:5px;' >
									<img src='photo/mohit.jpg' width='38' class='img-circle' />
								</div>
								<div style='padding-left:10px;float:right;' >
									<ul class="nav nav-tabs" style='border:solid gray 0px;' >
										<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
											<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
											<ul class="dropdown-menu pull-right" role="menu" role="menu">
												<li><a  >Edit</a></li>
												<li><a  >Delete</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div style='float:left;width:446px;' >
									<div>
										<a>Mohit Saini</a> Mohit sd sd sd sd sd sd sd sd sd sd sd sd sd hs dhs gdh sgd hs gd sd sd g shd gsh dgs hdg s dh sd gs hdg sh dgs hd g sh d
									</div>
									<table><tr>
										<td>
											<span class='timepassed' >3 Dec. 2012 3:34 PM</span>
										</td>
										<td style='padding-left:10px;' >
											<a>Like</a>
										</td>
										<td style='padding-left:10px;' >
											<a><span class='glyphicon glyphicon-thumbs-up' ></span> 12</a>
										</td>
									</tr></table>
								</div>
								<div class='clear'></div>
							</div>
							<?php
								}
							?>
						</div>
					</div>
				</div>
<?php
	}
	public static function dispproduct($data){
?>
				<div class='leftinfo' >
					<div style='height:50px;' >
						<div style='float:right;' >
							<div style='padding-left:10px;' >
								<?php
									if(User::loginId()==$data["sid"]){
								?>
								<ul class="nav nav-tabs" style='border:solid gray 0px;' >
									<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
										<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
										<ul class="dropdown-menu pull-right" role="menu" role="menu">
											<li><a  >Change Auto Active Date</a></li>
											<li><a  >Turn on Notifications</a></li>
											<li><a  >Edit</a></li>
											<li><a  >Delete</a></li>
										</ul>
									</li>
								</ul>
								<?php
								}
								?>
							</div>
						</div>
						<div style='float:left;margin-right:5px;' >
							<img src='photo/mohit.jpg' width='38' class='img-circle' />
						</div>
						<div style='float:left;' >
							<div>
								<a href='<?php echo HOST."sprofile.php?sid=".$data["sid"]; ?>' ><?php echo $data["name"]; ?></a>
							</div>
							<table><tr>
								<td>
									<a href='<?php echo HOST."sproduct.php?pid=".$data["id"]; ?>' ><span class='timepassed' ><?php echo Fun::timepassed(time()-$data["utime"]); ?></span></a>
								</td>
								<?php
									if(User::loginId()==$data["sid"]){
								?>
									<td style='padding-left:10px;' >
										<?php Disp::activedeactive("uploadpic",array('ad'=>($data['status']=='a')  )); ?>
									</td>
								<?php
									}
								?>
							</tr></table>
						</div>
						<div class='clear'></div>
					</div>
					<div class='linedevider'></div>
					<div style='margin-bottom:10px;' >
						<div  >
							<span  ><?php echo htmlspecialchars($data['abouttext']); ?></span><br>
							<span style='font-weight:600;' >Rs. <?php echo ceil($data['price']*(100-$data['sale'])/100.0); ?></span>
							<span style='text-decoration:line-through;' >Rs. <?php echo $data['price'] ?></span>  
							Flat <span style='color:green;font-weight:600;' ><?php echo  $data['sale'] ; ?></span> % Off
						</div>
						<?php
							$img=Fun::myexplode(',',$data["images"]);
							for($i=0;$i<count($img);$i++){
						?>
							<img src='<?php echo HOST.$img[$i]; ?>' width='100%' class='uploadpic' >
						<?php
							}
						?>
					</div>

					<div style='background-color:#FEFEFE;' >
						<div>
							<div style='float:left;width:70px;' align=center >
								<a data-action='like' onclick='button.sendreq(this);' data-waittext="Liking .." data-at="l" data-res='onres.like(obj);' data-pid="<?php echo $data["id"]; ?>" data-type="p" >Like</a>
							</div>
							<div style='float:left;width:70px;' align=center >
								<a onclick='others.review(<?php echo $data["id"]; ?>);' >Reviews</a>
							</div>
							<?php if(User::loginId()!=$data["sid"]){ ?>
							<div style='float:left;' ><a>Buy it now</a></div>
							<?php }?>
							<div class='clear' ></div>
						</div>

						<div class='linedevider'></div>
						<div style='margin-top:2px;' >
							<a>Mohit Saini</a> , <a>Rohit Saini</a> Likes it.
						</div>
						<div class='linedevider'></div>
						<?php
						$loadtop5=5;
						$top5comments=Sqle::getArray("select * from (select comments.*,users.name,users.profilepic from comments left join users on users.id=comments.uid where pid=? order by id desc limit ".($loadtop5+1).")temp  order by id asc","i",array(&$data["id"]));
						?>
						<?php
							if(count($top5comments)==$loadtop5+1){
								$totalcomments=Sqle::getArray("select count(*) as num from comments where pid=?",'i',array(&$data["id"]));
								$totalcomments=$totalcomments[0]["num"];
								?>
						<div>
							<div style='float:left;' ><a data-isbusy="false" onclick='request.loadoldercomment(this,<?php echo $data["id"]; ?>,"o");' >Load  Older Reviews</a></div>
							<div style='float:right;' >
								<a style='color:black;' id='comment_loaded_<?php echo $data["id"]; ?>' ><?php echo count($top5comments)-1; ?></a> of <a style='color:black;' ><?php echo $totalcomments; ?></a>
							</div>
							<div class=clear ></div>
						</div>
								<?php
							}
						?>
						<div class=comments data-productid="<?php echo $data["id"]; ?>" id="post_<?php echo $data["id"]; ?>" style='margin-top:10px;' data-totalcomment="<?php echo $totalcomments; ?>" >
							<?php
								for($i=0;$i<$loadtop5 && $i<count($top5comments);$i++){
									$ind=(count($top5comments)==6?$i+1:$i);
									$top5comments[$ind]["puid"]=$data["sid"];
									Disp::comment($top5comments[$ind]);
								}
							?>
						</div>
						<?php
							Disp::disp_comment(array('pid'=>$data['id']));
						?>
					</div>
				</div>
<?php
	}
	public static function disp_upload_product(){
?>
				<div class='leftinfo' style='padding:0px;' >
					<ul class="nav nav-tabs" style='background-color:white;padding-left:10px;margin-top:-10px;' >
						<li role="presentation" class="" style='border-left:solid red 0px;' onclick='showextend("uploadextendedinfo","uploadextendedta",3);$("#uploadextendedta").focus();' ><a >Upload Product</a></li>
					</ul>
					<form method=post  enctype="multipart/form-data" onsubmit="return submitForm(this);" >

 						<?php
							form_textarea(array("class"=>"form-control status","ph"=>"Details of your product","rows"=>1,"data-maxrows"=>10,"onkeydown"=>"textarea.resize(this);","onkeyup"=>"textarea.resize(this);","onclick"=>'showextend("uploadextendedinfo","uploadextendedta",3);',"id"=>"uploadextendedta","name"=>"abouttext" ));
						?>
						<div id='uploadextendedinfo' style='display:none;' >
							<?php
								Disp::takeinp_v2(array('ph'=>'Title of product','style'=>'margin-bottom:-10px;','name'=>'title' ));
							?>
							<table><tr>
								<td style='padding-right:10px;' >
									<?php form_input(array('ph'=>'Price of product',"name"=>"price",'dc'=>"pnumber" )); ?>
								</td>
								<td style='padding-left:10px;' >
									<?php 
									form_input(array('ph'=>'Sale % of product',"name"=>"sale",'dc'=>"bound100"));
									 ?>
								</td>
								<td style='padding-left:10px;' >
									<?php Disp::activedeactive("uploadpic",array('ad'=>false)); ?>
								</td>
							</tr></table>
							<?php
								textarea(array('ph'=>"Additional remarks","rows"=>3,"data-maxrows"=>5,"name"=>"addinfo","onkeydown"=>"textarea.resize(this);","onkeyup"=>"textarea.resize(this);" )) ;
							?>
							<input type=file name='uploadpics[]' style='margin-top:5px;margin-left:5px;' multiple  />
							<div style='padding:5px;' >
								<button type=submit class='btn btn-default' style='margin:4px;' >Submit</button>
								<button type=button class='btn btn-default' style='margin:4px;' onclick='cancel("uploadextendedinfo","uploadextendedta");$(this).parent().parent().parent()[0].reset();' >Cancel</button>
							</div>
						</div>
					</form>
				</div>
<?
	}

	public static function comment1($data){
?>
		<div class=comment >
			<div style='float:left;margin-right:5px;' >
				<img src='photo/mohit.jpg' width='38' class='img-circle' />
			</div>
			<div style='padding-left:10px;float:right;' >
				<ul class="nav nav-tabs" style='border:solid gray 0px;' >
					<li role="presentation" style='padding:0px;border:solid gray 0px;' class='pull-left' >
						<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style='padding:3px 6px;border:solid gray 0px;' ><span class='caret' ></span></a>
						<ul class="dropdown-menu pull-right" role="menu" role="menu">
							<li><a  >Edit</a></li>
							<li><a  >Delete</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div style='float:left;width:446px;' >
				<div>
					<a>Mohit Saini</a> Mohit sd sd sd sd sd sd sd sd sd sd sd sd sd hs dhs gdh sgd hs gd sd sd g shd gsh dgs hdg s dh sd gs hdg sh dgs hd g sh d
				</div>
				<table><tr>
					<td>
						<span class='timepassed' >3 Dec. 2012 3:34 PM</span>
					</td>
					<td style='padding-left:10px;' >
						<a>Like</a>
					</td>
					<td style='padding-left:10px;' >
						<a><span class='glyphicon glyphicon-thumbs-up' ></span> 12</a>
					</td>
				</tr></table>
			</div>
			<div class='clear'></div>
		</div>
<?php
	}


	public static function comment($data){
?>
		<div class=comment data-cid='<?php echo $data["id"]; ?>' style='border-bottom:solid #dddddd 1px;' align=left >
			<div style='float:left;margin-right:5px;' >
				<img src='<?php echo $data["profilepic"]; ?>' width='38' class='img-circle' />
			</div>
			<div style='float:left;width:510px;' >
				<div>
					<?php 
						echo disp_sprofilename($data);
						echo " ".Fun::smilymsg($data["ctext"]);
					 ?>
				</div>
				<table><tr>
					<td>
						<span class='timepassed' ><?php echo Fun::timepassed(time()-$data['time']); ?></span>
					</td>
				</tr></table>
			</div>
			<div class='clear'></div>
		</div>
<?php
	}

	public static function disp_comment($data){
		global $myf;
?>
		<div class=comment >
			<div style='float:left;margin-right:5px;' >
				<img src='<?php echo $myf["profilepic"]; ?>' width='38' class='img-circle' />
			</div>

			<div style='float:left;width:515px;' >
				<div>
					<?php textarea(array('rows'=>1,'data-maxrows'=>4,'onkeyup'=>'textarea.resizeorg(this);', 'ph'=>"Reply here","onkeydown"=>"textarea.resizeorg(this);request.load_comment(event,this,".$data["pid"].",\"n\"".");","id"=>"inpcomment_".$data["pid"] ,"style"=>"resize:none;")); ?>
				</div>
			</div>
			<div style='float:left;margin-left:4px;' ><img  id="comment_loadingimg_<?php echo $data["pid"]; ?>" src='photo/icons/loading2.gif' style='display:none;' /></div>
			<div class='clear'></div>
		</div>
<?php
	}
	public static function disp_n_comment($data,$ltn){//$pid: Post Id , $ltn : loaded till now.
		$newecomments=Sqle::getArray("select comments.*,users.name,users.profilepic from comments left join users on users.id=comments.uid where pid=? AND comments.id > ? order by comments.id asc","ii",array(&$data["pid"],&$ltn));
		for($i=0;$i<count($newecomments);$i++){
			$newecomments[$i]["puid"]=$data["sid"];
			Disp::comment($newecomments[$i]);
		}
	}
	public static function disp_o_comment($data,$lai){//$pid: Post Id , $ltn : loaded After it.
		$newecomments=Sqle::getArray("select * from (select comments.*,users.name,users.profilepic from comments left join users on users.id=comments.uid where pid=? AND comments.id<? order by comments.id desc limit 5)temp  order by id asc","ii",array(&$data["pid"],&$lai));
		for($i=0;$i<count($newecomments);$i++){
			$newecomments[$i]["puid"]=$data["sid"];
			Disp::comment($newecomments[$i]);
		}
	}

	public static function expert_join_form(){
		global $degrees;
		$iitjoinyears=Fun::oneToN(date("Y"),1950,false);
		?>
		<style>
			table.expertregform > tbody > tr  > td {
				padding: 10px;
				min-width:250px;
			}
		</style>
		<div style='width:250px;' >
			<form method=get onsubmit='if(submitForm(this)){expert.createaccount(this);};return false;' data-action="teacherreg" data-res='hideshowdown("elogin","otp");' data-param='{"sel_topics":{"list":expert.selected_topics()["dict"],"add":"mohit"}}' >
				<div>
					<p class="text-success" ></p>
				</div>
				<input type=hidden name="sec" value="<?php echo ((isset($_GET["key"]) && $_GET["key"]=="mohItMv341")?1:0);   ?>" />
				<table class='expertregform' >
					<tr>
						<td>
							<?php self::takeinp("Full name","name",$_POST,"","","text","simple"); ?>
						</td>
						<td>
							<?php self::takeinp("Email Id","email",$_POST,"","","email","email"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php 
							$newinp=new Input(array("type"=>"text","label"=>"From which colleage you passed","name"=>"iit"));
							$newinp->disp();
//							"From which colleage you passed";
//							self::takeinp("","email",$_POST,"","","email","email");
							//self::selectinp( Fun::addselect(Fun::arrtooption(array("mohit","saini"))) , array('label'=>"From which colleage you passed", "name"=>'iit')); ?>
						</td>
						<td>
							<?php  self::selectinp( Fun::addselect(Fun::arrtooption(
							$iitjoinyears)) , array('label'=>"Year of Graduation", "name"=>'iitentryyear')); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php self::selectinp( Fun::addselect(Fun::arrtooption( $degrees )) , array('label'=>"Degree",'name'=>'degree')); ?>
						</td>
						<td>
							<?php self::takeinp("Phone no.","phone",$_POST,"","","","phone"); ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php  self::takeinp("Choose a Password","password",$_POST,"","Choose Password","password","simple","password"); ?>
						</td>
						<td>
							<?php self::takeinp("Re-Password","repassword",$_POST,"","ReEnter your password","password","password" ); ?>
						</td>
					</tr>
				</table>
				<table><tr>
					<td><?php
						button(array("html"=>"Select Subjects","style"=>"margin:10px;","onclick"=>"open_interested_subj(this);"));
					?></td>
					<td style='min-width:300px;display:none;' >
						<span id='num_subj_selected' >12</span> Subject Selected
					</td>
				</tr></table>
			<?php
				form_textarea(array('ph'=>'Any experience','style'=>'width:480px;margin-left:10px;',"name"=>"experience",'dc'=>'idel'));
				form_textarea(array('ph'=>'Anything else you want to tell','style'=>'width:480px;margin-left:10px;','rows'=>3,"name"=>"addinfo",'dc'=>'idel'));

			?>
				<input type='hidden' value='e' name='type' />
				<button type="submit" class="btn btn-default" name=teacherregpage style='margin-left:10px;' >Submit</button>
			</form>
		</div>
		<?php
	}
	public static function loginsignupform($display_tab="login"){
?>
	<div align=center style='' >
		<div align=left id="login" style='<?php if($display_tab!="login") echo "display:none;"; ?>' >
			<?php Disp::loginForm(); ?>
			<a onclick='hideshowdown("login","signup");' >New user? Create account</a><br>
			<a onclick='hideshowdown("login","forget");' >forget password?</a>
		</div>
		<?php
			if($display_tab=="elogin"){
?>
		<div align=left id="elogin" style='<?php if($display_tab!="elogin") echo "display:none;"; ?>' >
			<?php Disp::expert_join_form(); ?>
		</div>
		<div align=left id="otp" style='<?php if($display_tab!="otp") echo "display:none;"; ?>' >
			<p class="text-success" style='color:white;' >One time password is msged to your phone, please confirm it.</p>
			<?php Disp::enterOTP(); ?>
			<a  onclick='hideshowdown("otp","elogin");'  >Go Back</a>
		</div>

<?php
			}
			else{
		?>
		<div align=left id="signup" style='<?php if($display_tab!="signup") echo "display:none;"; ?>' >
			<?php Disp::signUpForm(); ?>
			<a onclick='hideshowdown("signup","login");' >Already have account ?Login</a><br>
		</div>
		<div align=left id="otp" style='<?php if($display_tab!="otp") echo "display:none;"; ?>' >
			<p class="text-success" >One time password is msged to your phone, please confirm it.</p>
			<?php Disp::enterOTP(); ?>
			<a  onclick='hideshowdown("otp","signup");'  >Go Back</a>
		</div>
		<?php
			}
		?>
		<div align=left id="forget" style='<?php if($display_tab!="forget") echo "display:none;"; ?>' >
			<?php Disp::forgetPassword(); ?>
			<a  onclick='hideshowdown("forget","login");'  >Go Back</a>
		</div>
		<div style='clear:both;' ></div>
	</div>
<?php
	}
	public static function dispAssign($tab){
		$uid=User::loginId();
		$utype=User::loginType();
		$timenow=time();
		$tab_arr=array();
		if($tab=="curassign"){
			$myassign=Sql::getArray("select temp.*,users.name as adminname from (select questions.*,users.name,users.profilepic,(questions.adminid is 
			 NULL ) as isassigned from questions left join users on users.id=uid where (uid=? or ".($utype=='a'?"1":"0")." ) AND (deadline>?) AND (uid is not null) ) temp left join users on users.id=temp.adminid order by isassigned asc,deadline asc","ii",array(&$uid,&$timenow));
			if($utype=='a')
				$tab_arr=array("","Order Id","Subeject","Status","Time left","Due Date");
			else
				$tab_arr=array("Order Id","Subject","Status","Time left","Due Date");

		}
		else if($tab=="arcassign"){
			$myassign=Sql::getArray("select temp.*,users.name as adminname from (select questions.*,users.profilepic,users.name from questions left join users on users.id=questions.uid where (uid=? or ".($utype=='a'?"1":"0").") AND (deadline<=?) )temp left join users on users.id=temp.adminid ","ii",array(&$uid,&$timenow));
				$tab_arr=array("","Order Id","Subject","Status","Time left","Due Date");
		}
		else if($tab=="urassign"){
			$myassign=Sql::getArray("select questions.*,users.name,users.profilepic from questions left join users on users.id=questions.uid where (adminid=? AND ".($utype=='a'?"1":"0").") AND (deadline>=?) order by deadline asc","ii",array(&$uid,&$timenow));
				$tab_arr=array("","Order Id","Subject","Status","Time left","Due Date");
		}
		else
			$myassign=array();

		if($tab=="curassign" || $tab=="arcassign" || $tab=="urassign" ){
?>
		<table class='table-hover table-bordered' >
<?php
			dispTableTitle($tab_arr);
			
			for($i=0;$i<count($myassign);$i++){
				$title=substr($myassign[$i]["content"],0,20);
				$title=($title=="" ? "Untitled":$title);
//				$tlink=HOST.$myassign[$i]["ufile"];
				$tlink=HOST."assignment.php?aid=".$myassign[$i]["id"];
				$timeleftint=$myassign[$i]["deadline"]-time();
				$timeleft="<div class=timeleft data-valueat=".(time())." data-intdate=".$timeleftint." style='".(($timeleftint<0)?"color:red":"" )."' >".($timeleftint)."</div>";
				$status_code=Fun::assign_status_code($myassign[$i]);
				$status=Fun::assign_status($status_code,$myassign[$i]);
				if($utype=='a'){
					$aid=$myassign[$i]["id"];
					if(!($myassign[$i]["adminid"]>0) && $status_code==2 ){
						$status.="<br><button class='btn btn-default' onclick='button.sendreq(this);' data-res='obj.innerHTML=\"Assigned\";setTimeout(500,function(){obj.style.display=\"none\";});obj.disabled=true;' data-action='assign_me' data-aid='$aid'  >Assign me</button>";
					}
					dispTableTitle(array( "<div style='cursor:pointer;' ><img height='50' width='50' src='".$myassign[$i]["profilepic"]."' /><br>".$myassign[$i]["name"]."</div>" ,  $myassign[$i]["id"],"<a href='".$tlink."' >".$title."</a>",$status,$timeleft,Fun::timetostr($myassign[$i]["deadline"]) ));
				}
				else
					dispTableTitle(array($myassign[$i]["id"],"<a href='".$tlink."' >".$title."</a>",$status,$timeleft,Fun::timetostr($myassign[$i]["deadline"]) ));
			}
?>
		</table>
<?php
		}
?>
<?php
	}
	public static function  disp_table($inp){
			if(count($inp)>0){
		?>
		<table border="1" style="margin-bottom:100px;">
			<?php
			dispTableTitle(array_keys($inp[0]));
			for($i=0;$i<count($inp);$i++){
				dispTableTitle(Fun::get_key_values($inp[$i]));
			}
			?>
		</table>
<?php
		}
		else
			echo "Empty Table";
	}
	public static function selectinp($arroption,$data){
		$data=Fun::setifunset($data,'label',"Select");
		$data=Fun::setifunset($data,'dc',"simple");
		$data=Fun::setifunset($data,'onchange',"");
		$data['onchange']="checkValid(this,event);".$data['onchange'];
		$data=Fun::setifunset($data,'name',"");
		$data=Fun::setifunset($data,'id',"");
		$data=Fun::setifunset($data,'style',"");
		$data=Fun::setifunset($data,'val',null);
		$defaultv=isset($data['default']) ? $val['default']:'' ;
		$selectVal=($data['val']!=null && $data['name']!='' && isset($data['val'][$name])) ? $data[$name]:$defaultv;
?>
	<div class="form-group has-feedback" >
		<label style='' ><?php echo $data['label']; ?></label>
		<select <?php echo getparams($data); ?> ><?php
		echo count($arroption);
		for($i=0;$i<count($arroption);$i++){
			$val=$arroption[$i]['val'];
			$disptext=$arroption[$i]['disptext'];
		?><option <?php if($val==$selectVal && $selectVal!='') echo 'selected';  ?> value='<?php echo $val; ?>' ><?php echo $disptext; ?></option><?php
		}
		?></select>
	</div>
<?php
	}

	public static function inpMultiple_v3($labels,$inp){
		$inp=Fun::mergeifunset($inp,array("name"=>"","data"=>Fun::oneToN(count($labels)),"divstyle"=>"","onchange"=>"","style"=>"","blocked"=>array(),"selectall"=>true,"onchangeind"=>Fun::copy_arr( count($labels) ) , 'onclickind'=>Fun::copy_arr( count($labels) ) ));
		$name=$inp["name"];
?>
		<div style='padding:10px;<?php echo $inp["divstyle"]; ?>' >
			<?php
				if($inp["selectall"]){
			?>
				<div>
					<input id='select_<?php echo $inp["name"]."0"; ?>' type="checkbox" onload='changelabelcolor(this);'  onchange='changelabelcolor(this);selectAll(this);inpmultiple.setvalue(this);<?php echo $inp["onchange"]; ?>' style='float:left;margin-top:10px;' >
					<label for='select_<?php echo $inp["name"]."0"; ?>' style='float:left;margin:5px;color:gray;' >Select All</label>
					<div style='clear:both;' ></div>
				</div>
			<?php
			}
			for($i=0;$i<count($labels);$i++){
				$isselected=in_array($i+1,$inp["data"]);
				$isblocked=in_array($i+1,$inp["blocked"]);
			?>
				<div>
					<input <?php if($isselected) echo "checked";  ?> id='select_<?php echo $name.($i+1); ?>' <?php if($isblocked) echo "disabled"; ?> type="checkbox" onchange='changelabelcolor(this);inpmultiple.setvalue(this);<?php echo $inp["onchangeind"][$i]; ?><?php echo $inp["onchange"]; ?>' style='float:left;margin-top:10px;'   >
					<label for='select_<?php echo $name.($i+1); ?>' style='float:left;margin:5px;color:<?php echo ($isselected?"black":"gray"); ?>;' ><?php echo $labels[$i]; ?></label>
					<div style='clear:both;' ></div>
				</div>
			<?php
			}
			?>
			<input type=hidden name='<?php echo $name; ?>' value='<?php echo implode("-",$inp["data"]); ?>' />
		</div>
<?php
	}



}
?>