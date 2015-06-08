<?php
$page="profile";
$tab="profile";

$title="AHT";
$msg="";
include "includes/app.php";
Fun::gotohome($DB);//If not login then redirect to home page.

$myf=User::myprofile();

include "includes/top.php";
include "includes/menu/menu.php";
?>


<?php
include "includes/content/changepassword.php";
?>


<?php
include "includes/bottom.php";

$DB->close();

?>