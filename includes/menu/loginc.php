<div style='position:fixed;z-index:3;background-color:white;width:100%;' align=right >
	<ul class="nav nav-tabs" style='margin:10px;float:right;'  >
		<li role="presentation" class="dropdown <?php if($tab=="profile") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if($profile==null) echo "Profile"; else echo $profile["name"]; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="account.php">My account</a></li>
				<li><a href="cpassword.php">Change password</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."?logout";  ?>">Logout</a></li>
			</ul>
		</li>
		<?php
			maketab(array('name'=>'Messages','page'=>'messages','href'=>'msg.php',  'pa'=>$page));
			maketab(array('name'=>'Notifications','page'=>'notf','pa'=>$page));
		?>
	</ul>
	<div style='clear:both;' ></div>
</div>

<div style='position:fixed;z-index:2;background-color:white;width:100%;top:50px;' >
	<ul class="nav nav-tabs" style='margin:10px;' >
		<?php
			maketab(array('name'=>'Home','page'=>'index','pa'=>$page));
			maketab(array('name'=>'Job Details','page'=>'createjob', 'href'=>'createjob.php','pa'=>$page));
			maketab(array('name'=>'Interview Process','page'=>'selection', 'href'=>'selection.php','pa'=>$page));
			maketab(array('name'=>'Upload offer letter','page'=>'uploadol', 'href'=>'uploadol.php', 'pa'=>$page));

		?>
	</ul>
</div>
<div style='position:fixed;top:100px;z-index:1;background-color:white;width:100%;' >
<?php
	mypath();
?>
</div>
<div style='height:160px;' >
</div>
