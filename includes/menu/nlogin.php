<?php
?>
<div style='position:fixed;z-index:1;width:100%;background-color:rgba(0,0,0,0.65);height:60px;padding:5px;' >
	<ul class="nav nav-tabs" style='border-bottom:0px;' >
		<?php
			maketab(array('name'=>'Home','page'=>'home','pa'=>$page));
			maketab(array('name'=>'About','page'=>'about','pa'=>$page,'href'=>HOST.'about.php'));
			maketab(array('name'=>'Login','page'=>'login','pa'=>$page,'href'=>HOST.'login.php'));
			maketab(array('name'=>'Expert Join us','page'=>'elogin','pa'=>$page,'href'=>HOST.'elogin.php'));
		?>
	</ul>
</div>