<?php
include "includes/app.php";
Fun::gotohome('a');
Disps::page_top2();


$arginfo=Fun::mergeifunset($_GET,array("thid"=>0));
if($arginfo["thid"]>0)
	$_SESSION["chatthid"]=$arginfo["thid"];



?>

<div style="position:fixed;width:300px;left:0px;top:0px;height:100%;background-color:#ffffff;overflow-y:scroll;" id="expert" >
<?php
	Disps::disp_admin_chatting_list();
?>
</div>


<?php

if($_SESSION["chatthid"]>0)
	Disps::disp_chat();

Disps::bottom_js();
?>




<?php
closedb();
?>
</body>
</html>