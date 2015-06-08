<?php
$page="home";
$title="AHT";
include "includes/app.php";

include "includes/top.php";
include "includes/menu/menu.php";
?>

<div style='margin-top:100px;font-size:50px;' align=center >
	This is Invalid Page.
</div>

<?php

include "includes/bottom.php";
$DB->close();

?>