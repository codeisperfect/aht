<div align=center >
	<div style='' >
		<a style='cursor:pointer;' onclick='$("#form_cpassword").slideDown();' >Change password</a>
		<form onsubmit='if(submitForm(this)){request.cpassword(this);};return false;' id='form_cpassword' style='display:none;' >
			<div>
				<p class="text-success" ></p>
				<p class="text-danger" ></p>
			</div>
			<table border=0 >
				<tr>
					<td style='padding:5px;min-width:120px;' align=right >Old password</td>
					<td style='padding:5px;min-width:250px;' >
						<div class="form-group  has-feedback "  style='' >
							<label style='font-weight:600;' ></label>
							<input data-condition='simple' onkeyup='checkValid(this,event);'  name='opassword' value=''  style='' type="password" class="form-control"   placeholder="Enter the Old password"   >
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						</div>
					</td>
				</tr>
				<tr>
					<td style='padding:5px;min-width:120px;' align=right >New password</td>
					<td style='padding:5px;' >
						<div class="form-group  has-feedback "  style='' >
							<label style='font-weight:600;' ></label>
							<input data-condition='simple' onkeyup='checkValid(this,event);'  name='npassword' value=''  style='' type="password" class="form-control" id=password  placeholder="Enter the New password"   >
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						</div>
					</td>
				</tr>
				<tr>
					<td style='padding:5px;min-width:120px;' align=right >Enter again</td>
					<td style='padding:5px;' >
						<div class="form-group  has-feedback "  style='' >
							<label style='font-weight:600;' ></label>
							<input data-condition='password' onkeyup='checkValid(this,event);'  name='' value=''  style='' type="password" class="form-control"   placeholder="Enter the Again new password"   >
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						</div>
					</td>
				</tr>

			</table>

			
		<?php
//			Disp::takeinp( "Old password","opassword",null,"","","password","simple");
//			Disp::takeinp( "New password","npassword",null,"","","password","simple","password");
//			Disp::takeinp( "Again new password","",null,"","","password","password");
			Disp::dispButton("cpassword","Change");
			button(array('html'=>'Calcel','onclick'=>'var temp=$("#form_cpassword");temp.slideUp();temp[0].reset();'));
			
		?>
		</form>
	</div>
</div>

