<div id='filtertab'  style='position:fixed;top:160px;' >
	<div id='filterdiv'   >
		<input class='form-control' placeholder='search by name or username' id='searchinbox' style='width:300px;margin:5px;' onkeyup='filter();' />
		<table>
			<tr>
				<td style='padding:5px;' id='seldeptt' >
					<div id='deptt_select' >
						<?php
						$labels=Fun::deptl();
						$name="dep";
						$onchange="filter();";
						for($i=-1;$i<count($labels);$i++){
							$ln=$name.($i+1);
						?>
							<div style='<?php if($i>=5) echo "display:none;"; ?>'  class='label_div' >
								<input checked  id='select_<?php echo $name.($i+1); ?>' type="checkbox"  onchange='changelabelcolor(this);<?php echo $onchange.("selectAll(obj);");   ?>' name="<?php echo $ln; ?>" style='float:left;margin-top:10px;' >
								<label for='select_<?php echo $name.($i+1); ?>' style='float:left;margin:5px;color:black;' ><?php echo $i==-1?"All":$labels[$i]; ?> </label>
								<div style='clear:both;' ></div>
							</div>
						<?php
						}
						if(count($labels)-1>=5){
						?>
						<a onclick='$("#deptt_select").children().show();$(this).hide();' >Show more</a>
						<?php
						}
						?>
					</div>
				</td>
			</tr>
			<tr>
				<td style='padding:5px;' >
					<input class='form-control' onchange='onchangeSlider(this,1);' value=0 min=0 max=10 step="0.1" type=range style='width:200px;' />
					<input class='form-control' onchange='onchangeSlider(this,1);' value=10 min=0 max=10 step="0.1" type=range style='width:200px;margin-top:-33px;' />
					<span></span>
				</td>
				<td>
					CGPA b/w <span class=sl1 >0</span>-<span class=el1 >10</span>
				</td>
			</tr>
			<tr>
				<td style='padding:5px;' >
					<input class='form-control' onchange='onchangeSlider(this,2);' value=0 min=0 max=100 step="1" type=range style='width:200px;' />
					<input class='form-control' onchange='onchangeSlider(this,2);' value=100 min=0 max=100 step="1" type=range style='width:200px;margin-top:-33px;' />
					<span></span>
				</td>
				<td>
					12th b/w <span class=sl2 >0</span>-<span class=el2 >100</span>%
				</td>
			</tr>
			<tr>
				<td style='padding:5px;' >
					<input class='form-control' onchange='onchangeSlider(this,3);' value=0 min=0 max=100 step="1" type=range style='width:200px;' />
					<input class='form-control' onchange='onchangeSlider(this,3);' value=100 min=0 max=100 step="1" type=range style='width:200px;margin-top:-33px;' />
					<span></span>
				</td>
				<td>
					10th b/w <span class=sl3 >0</span>-<span class=el3 >100</span>%
				</td>
			</tr>
		</table>
		
	</div>
</div>