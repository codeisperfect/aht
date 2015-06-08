<?php
	$display_tab="login";
?>
<div align=center style='' >
	<div align=left id="login" style='<?php if($display_tab!="login") echo "display:none;"; ?>' >
		<?php Disp::loginForm(); ?>
		<a onclick='hideshowdown("login","signup");' >New user? Create account</a><br>
		<a onclick='hideshowdown("login","forget");' >forget password?</a>
	</div>
	<div align=left id="signup" style='<?php if($display_tab!="signup") echo "display:none;"; ?>' >
		<?php Disp::signUpForm(); ?>
		<a onclick='hideshowdown("signup","login");' >Already have account ?Login</a><br>
	</div>
	<div align=left id="forget" style='<?php if($display_tab!="forget") echo "display:none;"; ?>' >
		<?php Disp::forgetPassword(); ?>
		<a  onclick='hideshowdown("forget","login");'  >Go Back</a>
	</div>
	<div align=left id="otp" style='<?php if($display_tab!="otp") echo "display:none;"; ?>' >
		<p class="text-success" >One time password is msged to your phone, please confirm it.</p>
		<?php Disp::enterOTP(); ?>
		<a  onclick='hideshowdown("otp","signup");'  >Go Back</a>
	</div>
	<div style='clear:both;' ></div>
</div>
