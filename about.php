<?php
$page="about";
$title="AHT";
$bgimg="background-image:url('photo/nature.jpg');";
include "includes/app.php";
Fun::issetlogout($DB);


include "includes/top.php";
include "includes/menu/menu.php";
?>



	<div style='margin:auto;width:960px;color:white;font-size:25px;font-weight:900' >
		Hey Guys, we solve you assignments.
	</div>


<?php

include "includes/bottom.php";
$DB->close();

?>