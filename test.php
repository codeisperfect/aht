<?php
include "includes/app.php";

//$images=array("3.jpg","4.jpg","banner2.png","banner4.png","business.jpg","math.jpg","page1_pic4.jpg","pic_3.jpg","slide-2 (1).jpg","slide-2.jpg","slide-3 (1).jpg","slide-3.png","slide-4.jpg","slide-4.png","slide-5.jpg","slide-intro.jpg");

for($i=0;false&&$i<count($images);$i++){
	$images[$i]="data/tmp/PICS/".$images[$i];
	// $ext=pathinfo($images[$i],PATHINFO_EXTENSION);
	// resizeimg($images[$i],"photo/slider/pic".$i.".".$ext,500,357);
	resizeimg($images[$i],"photo/slider/pic".$i.".png",500,357);
	echo 'Done';
}

$images=array("autumn_pioneervalley.jpg","Campus050515-(192)web.jpg","LEAP_Web_Image_0.jpg","May Day 4.jpg","PM_BardSpring2013_MG_9461_smaller_2.jpg","studentloanspurdue.jpg");

for($i=0;$i<count($images);$i++){
	$images[$i]="data/tmp/Pics-Final/".$images[$i];
	// $ext=pathinfo($images[$i],PATHINFO_EXTENSION);
	// resizeimg($images[$i],"photo/slider/pic".$i.".".$ext,500,357);
	resizeimg($images[$i],"photo/slider/pic".($i+16).".png",500,357);
	echo 'Done';
}



closedb();
?>