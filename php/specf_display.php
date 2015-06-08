<?php
	function disp_sprofilename($inp){
		return "<a href='".HOST."sprofile.php?sid=".$inp["uid"]."' >".$inp["name"]."</a>";
	}
	function disptt($title='',$tagline=''){
?>
	<div style='color:black;' >
		<div style='font-size:35px;font-weight:900;' ><?php echo $title; ?></div>
		<div style='font-size:25px;font-weight:900;' ><?php echo $tagline; ?></div>
	</div>
<?php
	}
?>