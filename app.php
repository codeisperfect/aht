<?php
$page="app";
$title="AHT";
$bgimg="background-image:url('photo/nature.jpg');";
include "includes/app.php";
Fun::issetlogout($DB);


include "includes/top.php";
include "includes/menu/menu.php";
?>



	<div style='margin:auto;width:960px;color:white;font-weight:900;background-color:rgba(0,0,0,0.8);' >
	<table class='table table-hovered table-bordered ' >
		<?php
			dispTableTitle( array( "S.No.","Name","Email Id","Account Type","Address","Phone","create_time","IP" ) );
			$allusers=Sql::getArray("select * from users order by type,create_time ");
			for($i=0;$i<count($allusers);$i++){
				$atype=User::accountNames($allusers[$i]["type"]);
				$atime=Fun::timetostr($allusers[$i]["create_time"]);
				dispTableTitle( array($i+1,$allusers[$i]["name"],$allusers[$i]["email"],$atype,$allusers[$i]["address"],$allusers[$i]["phone"],$atime,$allusers[$i]["last_ip"] ) );
			}
		?>
	</table>
	</div>


<?php

include "includes/bottom.php";
$DB->close();

?>