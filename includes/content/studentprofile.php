			<ul class="nav nav-tabs" role="tablist" id='roundtablelist' data-alltab="4" data-curtab="2"  >
				<li class="active"  >
					<a href="#timeline" role="tab" data-toggle="tab" style="">Timeline</a>
				</li>
				<li class=""   >
					<a href="#about" role="tab" data-toggle="tab" style="">About</a>
				</li>
			</ul>

			<div  class="tab-content">
				<br><br>
				<div class="tab-pane fade active in" id="timeline">
					<?php
						$tl=Timeline::mytimeline();
						for($i=0;$i<count($tl);$i++){
							$timepassed=Fun::timepassed(time()-$tl[$i]["time"]);
					?>

					<div class="bg-info" style='background-color:#dddddd;padding:10px;border-radius:10px;overflow:auto;margin-bottom:5px;' ><a href='<?php if($tl[$i]["type"]=='c') echo HOST."cprofile.php?cid=".$tl[$i]["cid"]; ?>' ><?php echo $tl[$i]["name"]; ?></a> : <?php echo $tl[$i]["text"]; ?>.
						<div  >
							<span style='float:right;color:white;' ><?php echo $timepassed; ?></span>
						</div>
						<div style='clear:both;' ></div>
					</div>
				<?php
					}
				?>
				</div>
				<div class="tab-pane fade" id="about">
					<?php
							include "includes/content/changepassword.php";
							$sdata=Student::myprofile();
							$sdata['deptt']=Fun::myDeptt($sdata['deptt']);
					?>
							<table class='table-hover table-bordered' >
					<?php
								foreach ($sdata as $key => $val) {
							?>
								<tr>
									<th style='padding:10px;' ><?php echo $key; ?></th>
									<th style='padding:10px;' ><?php print_r($val); ?></th>
								</tr>
							<?php
								}

					?>

							</table>
				</div>
			</div>
