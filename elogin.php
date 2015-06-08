<?php
$page="elogin";
$title="AHT";
$bgimg="background-image:url('photo/nature.jpg');";
include "includes/app.php";
Fun::issetlogout($DB);

$page_type="login";
$msg="";




include "includes/top.php";
include "includes/menu/menu.php";
?>
	<div style='margin:auto;width:960px;' >

		<div style='padding-bottom:20px;' >

			<div id='mainsecne2' onclick='' style='color:white;display:none;width:1000px;background-color:rgba(0,00,00,0.6);' >
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
							<li class="" >
								<?php
									button(array("html"=>"Ok","style"=>"color:black;margin:2px;margin-left:10px;","onclick"=>'expert.selnumsel(this);'));
								?>
							</li>
						</ul>
						<div class="tab-content" id="alltopicscontent" >
							<br><br><br>
							<?php
							for($i=0;$i<count($subkeys);$i++){
							?>
							<div class="tab-pane fade <?php if($i==0) echo "active in"; ?>" id="<?php echo "sub".$i; ?>"  style='margin-top:-50px;' align=left >
								<div>
								<?php
									$subsubjects=$subt[$subkeys[$i]];
									$all_list=array();
									$tabid=0;
									foreach($subsubjects as $j=>$val){
										$all_list[]=new Input(array( "label"=>$j,"type"=>"checkbox","cbid"=>"cc_".$i."_".$tabid , "onchange" => 'selectallmatched(this,$(this).parent().parent().parent().find("input.topics_'.$i.'_'.$tabid.'") );' ,'params'=>array("data-issubtopic"=>"false" ) ,"class"=>"checkbox-mohit","cc"=>"check-warning checkbox-big-font","divstyle"=>"margin-top:10px;margin-bottom:-8px;margin-left:-15px;word-wrap: break-word;" ));
										for($k=0;$k<count($val);$k++){
											$param_array=array( "data-subject"=>$i+1,"data-topic"=>($tabid+1),"data-subtopic"=>$k+1,"data-issubtopic"=>"true" );
											$all_list[]=new Input(array("label"=>$val[$k],"type"=>"checkbox","cbid"=>"cctopic_".$i."_".$tabid."_".$k,"params"=> $param_array ,"class"=>"checkbox-mohit ","iclass"=>("topics_".$i."_".$tabid) ,"cc"=>"check-primary" ,"divstyle"=>"margin-top:-2px;margin-bottom:-2px;margin-left:-15px;"));
										}
										$tabid+=1;
									}
									$num_sep=4;
									?>
									<?php
									for($k=0;$k<$num_sep;$k++){
									?>
									<div style='padding:10px;border-right:solid gray 1px;float:left;max-width:250px;font-size:15px;font-weight:900;word-wrap: break-word;' align=left >
										<?php
											$len_of_tab=ceil(count($all_list)/4);
											for($l=0;$l<$len_of_tab ;$l++){
												$key=$k*($len_of_tab) + $l;
												if(isset($all_list[$key])){
													$all_list[$key]->disp();
												}
											}
										?>
									</div>
									<?php
									}
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



			<div id='mainsecne1' style='width:600px;display:non;background-color:rgba(0,00,00,0.6);'  >
				<div style='font-size:40px;color:white;border-bottom:solid rgba(0,0,0,1) 2px;' align=center >
					<div style='padding:10px;' >Experts Join Us! </div>
				</div>
				<div style='padding-left:20px;color:white;' >
					<?php
						Disp::loginsignupform("elogin");
					?>
					<br>
				</div>
			</div>
		</div>
	</div>


<?php

include "includes/bottom.php";
$DB->close();

?>