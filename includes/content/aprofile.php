<?php
		$arrtabs=Fun::profiletabs();
		$selected="curassign";
		if(isset($_GET["tabid"]) && in_array($_GET["tabid"],array_keys($arrtabs)) ){
			$selected=$_GET["tabid"];
		}

		$subkeys=array_keys($arrtabs);
?>

<div style='margin-left:200px;' >
	<ul class="nav nav-tabs" role="tablist"  >
	<?php
		$subkeys=array_keys($arrtabs);
		for($i=0;$i<count($subkeys);$i++){
	?>
		<li class="<?php if($subkeys[$i]==$selected) echo "active"; ?>" >
			<a href="#<?php echo $subkeys[$i]; ?>" role="tab" data-toggle="tab" style=""><?php echo $arrtabs[$subkeys[$i]]; ?></a>
		</li>
	<?php
		}
	?>
	</ul>
	<div  class="tab-content">
		<br><br><br><br>
		<?php
		for($i=0;$i<count($subkeys);$i++){
		?>
		<div class="tab-pane fade <?php if($subkeys[$i]==$selected) echo "active in"; ?>" id="<?php echo $subkeys[$i];  ?>"  style='margin-top:-50px;' align=left >
			<div>
				<?php
					Disp::dispAssign($subkeys[$i]);
				?>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>
