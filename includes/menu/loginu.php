<div style='position:fixed;z-index:1;background-color:#f4f4f4;width:100%;' >
	<ul class="nav nav-tabs" style='margin:10px;' >
		<?php
			maketab(array('name'=>'Home','page'=>'home','pa'=>$page));
			maketab(array('name'=>'About','page'=>'about','pa'=>$page,'href'=>HOST.'about.php'));
			$notf=new Notef();
			$notf->init_dropdown();
			$notf->disp_dropdown();
		?>

		<li role="presentation" class="dropdown <?php if($tab=="profile") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if($myf==null) echo "Profile"; else echo $myf["name"]; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="profile.php">My profile</a></li>
				<li><a href="account.php">My Account</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."?logout";  ?>">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>