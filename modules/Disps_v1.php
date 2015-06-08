<?php
class Disps extends Sql{
	public static function page_top($inps=array()){
		$inps=Fun::mergeifunset($inps,array("title"=>"AHT"));
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $inps["title"]; ?></title>


<!-- <link href="css/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
 -->

<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap-theme.css">


<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="css/lib.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<script>
	var redurl="<?php if(isset($_GET["url"]))  echo $_GET["url"]; ?>";
	var cururl=window.location.href;
	var profile_page_url="<?php echo HOST; ?>profile.php";
</script>
</head>
<body style="overflow-y:scroll;padding:0px;margin:0px;<?php if(isset($bgimg)) echo $bgimg; else echo ""; ?>background-size:100% auto;min-width:960px;background-attachment:fixed;" align=center >
	<script>
		var HOST="<?php echo HOST; ?>";
	</script>
<?php		
	}
	public static function page_bottom($inps=array()){
		$inps=Fun::mergeifunset($inps,array("isclosebh"=>true));
?>

<div style='height:500px;' >
</div>

<?php
popupalert(null);
popupconfirm(null);
?>
<script src="bootstrap-3.1.1-dist/js/jquery1.js" ></script>
<script src="bootstrap-3.1.1-dist/js/bootstrap.js" ></script>
<script src="bootstrap-3.1.1-dist/js/lib.js" ></script>
<script src="bootstrap-3.1.1-dist/js/mohit.js" ></script>
<script src="js/errorcodes.js" ></script>
<script src="js/mohitlib.js" ></script>
<script src="js/main.js" ></script>
<?php
	if($inps["isclosebh"]){
?>
</body>
</html>

<?php
		}
	}
	public static function home_page($page_type){
		global $subt;
?>
	<div align=center >
		<div style='color:rgb(250,50,250);color:black;font-size:50px;font-weight:900;margin:10px;' >Internet's #1 Assignment Help Provider</div>
		<div style='color:rgb(100,0,100);color:black;font-size:25px;font-weight:900;margin:10px;' >We do innovation, creativity, effectiveness in our assignment solutions and all that with love</div>
	</div>
	<div style='margin:auto;width:1024px;' >
		<div style='background-color:rgba(0,00,00,0.6);padding-bottom:20px;width:600px;float:left;'   >
			<div id='mainsecne1'  style='width:600px;<?php echo ($page_type=="login"? "display:none;":"")  ;?>'  >
				<form method=post id="homepageform"  enctype="multipart/form-data" >
					<div style='font-size:40px;color:white;border-bottom:solid rgba(0,0,0,1) 2px;' align=center >
						<div style='padding:10px;' >Ask your Questions ? </div>
					</div>
					<div id="mainsecne1_1"  style="" >
						<div style='padding:10x;padding-left:20px;padding-right:20px;margin-top:20px;' >
							<input style='height:40px;font-size:20px;margin-bottom:25px;' class='form-control'  onfocus='hideshow("mainsecne1","mainsecne2");' placeholder='Choose Subject' id='choosesubject' name="csubject" >
							<textarea style='font-size:20px;resize:none;margin-bottom:20px;' class='form-control' placeholder='Enter Your Question here' rows=7 data-maxrows=8 onkeyup="textarea.resize(this);" onkeydown="textarea.resize(this);" name="question"></textarea>
							<div align=right >
								<span style='float:left;' ><a style='cursor:pointer;' ><img src='photo/icons/attach1.png' onclick='uploadfile(this);' /></a><span style='color:white;' ></span></span>
								<button class='btn btn-default' type=button onclick='hideshow("mainsecne1_1","mainsecne1_2");' >Get Answer</button>
								<div class='clear' ></div>
							</div>
						</div>
					</div>
					<div id="mainsecne1_2"  style="display:none;" >
						<div style='padding:10x;padding-left:20px;padding-right:20px;margin-top:20px;' >
							<table><tr>
								<td style='padding:5px;' >
									<label style='color:white;font-size:20px;' >Expected price</label>
									<div class="input-group" style='width:200px;' >
										<div class="input-group-addon" >$</div>
										<input type=text class="form-control" placeholder="" value="50" name="quote" />
									</div>
								</td>
								<td style='padding:5px;' >
									<?php
										form_input(array("style"=>"","lname"=>"Deadline","divs"=>"margin-top:15px;color:white;font-size:20px;width:200px;","value"=>Fun::timetostr(time()+3600*24*2),"name"=>"deadline") );
									?>
								</td>
							</tr>
							</table>
							<?php
//								form_input(array("style"=>"","lname"=>"Quote","divs"=>"color:white;font-size:20px;width:200px;"));
								button(array('html'=>"Submit","style"=>"margin:5px;","type"=>"submit" ));
							?>
						<br>
						<img src='photo/icons/left_arrow.png' style='width:30px;margin-top:0px;margin-bottom:0px;cursor:pointer;margin-left:10px;' onclick='hideshow("mainsecne1_2","mainsecne1_1");' />
						</div>
					</div>
				</form>
			</div>




			<div id='mainsecne2' onclick='if(false){hideshow("mainsecne2","mainsecne1");};' style='color:white;display:none;width:1000px;background-color:rgba(0,00,00,0.6);' >
				<div style='font-size:15px;font-weight:900;color:white;border-bottom:solid rgba(0,0,0,1) 2px;' align=center >
					<div style='padding:0px;padding-top:5px;' >
						<ul class="nav nav-tabs" role="tablist" style='background-color:rgb(0,0,0);'  >
						<?php
							$subkeys=array_keys($subt);
							for($i=0;$i<count($subkeys);$i++){
						?>
							<li class="<?php if($i==0) echo "active"; ?>" >
								<a href="#<?php echo "sub".$i; ?>" role="tab" data-toggle="tab" style="margin:2px;padding:2px;"><?php echo $subkeys[$i]; ?></a>
							</li>
						<?php
							}
						?>
						</ul>
						<div  class="tab-content">
							<br><br><br>
							<?php
							for($i=0;$i<count($subkeys);$i++){
							?>
							<div class="tab-pane fade <?php if($i==0) echo "active in"; ?>" id="<?php echo "sub".$i; ?>"  style='margin-top:-50px;' align=left >
								<div>
								<?php
									$subsubjects=$subt[$subkeys[$i]];
									$all_list=array();
									foreach($subsubjects as $j=>$val){
										$all_list[]="<b style='color:rgb(255,0,255);font-weight:900;' >$j</b><br>";
										for($k=0;$k<count($val);$k++){
											$all_list[]='<a data-dispname="'.( $subkeys[$i]." : ".$j." : ".$val[$k] ).'" style="color:white;font-weight:100" onclick="select_crs(this);" >'.$val[$k].'</a><br>';
										}
									}
									$num_sep=4;
									?>
									<?php
									for($k=0;$k<$num_sep;$k++){
									?>
									<div style='padding:10px;border-right:solid gray 1px;float:left;max-width:250px;font-size:15px;font-weight:900;' align=center >
										<?php
											$len_of_tab=ceil(count($all_list)/4);
											for($l=0;$l<$len_of_tab;$l++){
												$key=$k*($len_of_tab) + $l;
												if(isset($all_list[$key]))
													echo $all_list[$key];
											}
										?>
									</div>
									<?php
									}
									if(false){
									foreach($subsubjects as $j=>$val){
										?>
										<div style='padding:10px;border-right:solid gray 1px;float:left;max-width:300px;font-size:15px;font-weight:900;' align=center >
											<?php  echo $j; ?>
											<div style='font-size:15px;' align=center >
											<?php
												$subsubtopis=$val;
												for($k=0;$k<count($subsubtopis) ;$k++){
												?>
													<a data-dispname="<?php echo ""; ?>" style='color:white;font-weight:100' onclick='select_crs(this);' ><?php echo $subsubtopis[$k]; ?></a><br>
												<?php
												}
											?>
											</div>
										</div>
										<?php
									}}
								?>
									<div class='clear' ></div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<img src='photo/icons/left_arrow.png' style='width:30px;margin-top:0px;margin-bottom:0px;cursor:pointer;margin-left:10px;' onclick='hideshow("mainsecne2","mainsecne1");' />
			</div>







			<div id='mainsecne3'  style='width:600px;<?php echo ($page_type!="login"? "display:none;":"")  ;?>'  >
				<div style='font-size:40px;color:white;border-bottom:solid rgba(0,0,0,1) 2px;' align=center >
					<div style='padding:10px;' >Login/SignUp</div>
				</div>
				<div style='padding-left:20px;color:white;' >
					<?php
//					include "includes/helper/login.php";
						Disp::loginsignupform("signup");
					?>
				</div>
			</div>
		</div>
		<div style='float:right;width:350px;margin-right:20px;color:white;' >
			<div style='background-color:rgba(0,0,0,0.75);padding:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" onclick="<?php echo jshref(HOST."login.php"); ?>" >
				<div style='font-weight:900;font-size:25px;' >We are Passionate</div>
				<div style='font-weight:900;font-size:15px;' >Available when you need us</div>
				<div style='font-size:16px;font-weight:600;' >24x7 support, 100+ Subjects, 3500+ Experts</div>
				<div><img src="photo/icons/down_arrow.png" /></div>
			</div>
			<div style='height:60px;' ></div>
			<div style='background-color:rgba(0,0,0,0.75);padding:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" onclick="<?php echo jshref(HOST."login.php"); ?>" >
				<div style='font-weight:900;font-size:25px;' >We're Cool Nerds</div>
				<div style='font-weight:900;font-size:15px;' >We create experiences that transform grades</div>
				<div style='font-size:16px;font-weight:600;' >90k Orders delivered , 98.39% satisfaction ratio, 1 millon satisfied customers</div>
				<div><img src="photo/icons/down_arrow.png" /></div>
			</div>
		</div>
		<div class='clear' ></div>
		<div style='margin-top:40px;' align=center  >
			<div style='font-weight:800;font-size:30px;color:black;' >Clashing assignments, Tight deadlines , Unclear tasks are giving you sleepless night?</div>
			<div style='font-weight:800;font-size:30px;color:black;' >It's time you sought help from Assignmentshelptutors.com Experts!</div>
			<div style='font-weight:800;font-size:30px;color:black;' >Our Simplest Process of Working !</div>
			<div style='color:#555555;font-weight:900;font-size:20px;' >You just need to follow 3 easy steps.</div>
			<div  >
				<?php
					$arr_tabs=array(
						array(
							"l1"=>"Submit Your Assignment",
							"l2"=>"Submit your Assignment/Homework in  our submission form, mention the assignment requirements and you can chat with our 24x7 assignment Experts to get the best price. ",
							"l3"=>"Order"
							),
						array(
							"l1"=>"Make Your Payment",
							"l2"=>"Once you get the best price for your assignment , process the payment though paypal, credit card, debit card or online banking. ",
							"l3"=>"Make"
							),
						array(
							"l1"=>"Get Solution",
							"l2"=>"Receive your high quality, plagiarism free, accurately referenced assignment solution before the deadline in your Assignmentshelptutors.com's  student account. ",
							"l3"=>"Sign In"
							)
						);
					for($i=0;$i<3;$i++){

				?>
				<div style='color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);width:320px;height:270px;float:left;padding:10px;margin:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" onclick="<?php echo jshref(HOST."login.php"); ?>" >
					<div style='font-weight:900;font-size:25px;' ><?php echo $arr_tabs[$i]["l1"]; ?></div>
					<div style='border-top:solid gray 1px;margin-top:5px;margin-bottom:5px;' ></div>
					<div style='font-weight:600;font-size:18px;' ><?php echo $arr_tabs[$i]["l2"]; ?></div>
					<div style='margin-top:10px;' ><button class='btn btn-default' ><?php echo $arr_tabs[$i]["l3"]; ?></button></div>
				</div>
				<?php
					}
				?>
				<div class='clear' ></div>
			</div>
			<div>
				<div style='font-size:20px;color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);width:410px;float:left;padding:10px;margin:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" >
					<div style='font-weight:900;font-size:25px;' ><?php echo "FREE Features"; ?></div>
					<?php
						$arr_free=array(
							array("FREE OUTLINE","$5"),
							array("FREE OUTLINE","$5"),
							array("FREE OUTLINE","$5"),
							array("FREE OUTLINE","$5"),
							array("FREE OUTLINE","$5"),
							);
						opent("table",array("class"=>" p5px"));
						for($i=0;$i<3;$i++){
							opent("tr");
							for($j=0;$j<4;$j++){
								opent("td");
								if($i*2+$j/2<count($arr_free) ){
									echo $arr_free[$i*2+$j/2][$j%2];
								}
								closet("td");
							}
							closet("tr");
						}
						closet("table");
					?>
					<div style='font-size:23px;' >Total Saving : 60$</div>
				</div>
				<div style='float:left;width:580px;background-color:rgba(0,0,0,0.4);margin-top:10px;height:204px;color:white;'  align=center >
					Place for youtube video.
				</div>
				<?php
					clear();
				?>
			</div>
			<div style='color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);padding:10px;margin:10px;cursor:pointer;font-size:25px;font-weight:900;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" onclick="<?php echo jshref(HOST); ?>" >
				Get Your First Order with 20 % OFF , check in Offers Zone
			</div>
			<div>
				<div style='font-size:35px;font-weight:900;' >Our Services</div>
				<div style='font-size:25px;font-weight:900;' >A highly skilled professional academic help with a creative touch</div>
			</div>
			<div>
				<?php
					$service_list=Funs::services_list();
					for($j=0;$j<3;$j++){
						for($i=0;$i<3 && (3*$i+$j)<count($service_list);$i++){
				?>
				<div style='color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);width:320px;height:270px;float:left;padding:10px;margin:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';"  >
					<div style='font-weight:900;font-size:25px;' ><?php echo $service_list[3*$i+$j]["title"]; ?></div>
					<div style='border-top:solid gray 1px;margin-top:5px;margin-bottom:5px;' ></div>
					<div style='font-weight:600;font-size:18px;' ><?php echo $service_list[3*$i+$j]["body"]; ?></div>
				</div>
				<?php
						}
				?>
				<div class='clear' ></div>
				<?php
					}
				?>
			</div>
			<div>
				<div style='color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);padding:10px;margin:10px;cursor:pointer;font-size:22px;font-weight:900;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';" >
					Awesome, easy to use & the Experts are super nice and answers questions quickly!, <br>Hire our expert tutors and see the difference in your grades.
				</div>
			</div>
			<?php
				disptt("Our Unmatched Features","These features are the reasons why you love us");
			?>
			<div>
				<?php
					$f_list=Funs::features_list();
					for($j=0;$j<3;$j++){
						for($i=0;$i<3 && (3*$i+$j)<count($f_list);$i++){
				?>
				<div style='color:white;border-radius:2px;background-color:rgba(0,0,0,0.75);width:320px;height:240px;float:left;padding:10px;margin:10px;cursor:pointer;' align=center onmouseover="this.style.backgroundColor='rgba(0,0,0,0.5)';" onmouseout="this.style.backgroundColor='rgba(0,0,0,0.75)';"  >
					<div style='font-weight:900;font-size:25px;' ><?php echo $f_list[3*$i+$j]["title"]; ?></div>
					<div style='border-top:solid gray 1px;margin-top:5px;margin-bottom:5px;' ></div>
					<div style='font-weight:600;font-size:18px;' ><?php echo $f_list[3*$i+$j]["body"]; ?></div>
				</div>
				<?php
						}
				?>
				<div class='clear' ></div>
				<?php
					}
				?>
			</div>
			<div class='bottomfooter' >
				<?php
					$bottom_link=array(
						"About Us"=>"about.php",
						"Team"=>"team.php",
						"Careers"=>"career.php",
						"Tutor Registration"=>"elogin.php",
						"Privacy Policy"=>"",
						"T & C"=>"",
						"Disclaimer Policy"=>"",
						"Faqs"=>"",
						"Solution Library"=>"",
						"Contact Us"=>"",
					);
					foreach($bottom_link as $disptext=>$link){
				?>
					<a href="<?php echo $link; ?>" class='bottomlink' ><?php echo $disptext ?></a> | 
				<?php
					}
				?>
				<a href="<?php echo ""; ?>" class='bottomlink' ><?php echo "Blog" ?></a>
			</div>
			<div style='color:#222222;font-weight:600;padding-left:15px;'  align=left >
<!-- 				<a href='https://www.facebook.com/1196mohitsaini' ><img src='photo/icons/fb_icon1.png' /></a>
				<a href='https://www.facebook.com/1196mohitsaini' ><img src='photo/icons/twitter_icon1.png' width='42' height='42' /></a>
 -->
 				&copy; 2015. Assignments Help Tutors. All Rights Reserved.
			</div>
		</div>
	</div>

<?php
	}
	public static function expert_profile(){
?>
	<div style='' >
		<div style='padding-bottom:20px;' >
			<?php
				$allnotf=array();
				$allquestion=Sql::getArray("select * from questions ");
				for($i=0;$i<3;$i++){
					$allnotf[$i]=array('content'=>"mohit","url"=>"");
			?>
			<div>
				<a href="<?php echo $allnotf[$i]["url"]; ?>" style='' >
					<div class='notf_msg' ><?php echo Fun::displayMsgBody($allnotf[$i]["content"]); ?>
					</div>
				</a>
			</div>
			<?php
				}
			?>
		</div>
	</div>
<?php
	}
}
?>
