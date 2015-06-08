<div style='position:fixed;z-index:3;background-color:white;width:100%;' align=right >
	<ul class="nav nav-tabs" style='margin:10px;float:right;'  >
		<li role="presentation" class="dropdown <?php if($tab=="profile") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if($profile==null) echo "Profile"; else echo $profile["name"]; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="account.php">My account</a></li>
				<li><a href="cal.php">My Calender</a></li>
				<li><a href="cpassword.php">Change password</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."?logout";  ?>">Logout</a></li>
			</ul>
		</li>
		<?php
			maketab(array('name'=>'Messages','page'=>'messages','href'=>'msg.php' , 'pa'=>$page));
		?>
		<li role="presentation" class="dropdown" id='aproveltab' >
			<?php
				Disp::managerAproveList();
			?>
		</li>
		<?php
			maketab(array('name'=>'Notifications','page'=>'notf','pa'=>$page));
		?>
	</ul>
	<div style='clear:both;' ></div>
</div>

<div style='position:fixed;z-index:2;background-color:white;width:100%;top:50px;' >
	<ul class="nav nav-tabs" style='margin:10px;' >
		<?php
			maketab(array('name'=>'Overview','page'=>'index','pa'=>$page));
		?>
		<li role="presentation" class="dropdown <?php if($tab=="add") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Add account <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="invcompany.php">Invite company</a></li>
				<li class="divider"></li>
				<li><a href="addstudent.php">Add student</a></li>
			</ul>
		</li>
		<?php
			maketab(array('name'=>'Recommend','href'=>'rcmnd.php' ,  'page'=>'rcmnd','pa'=>$page));
		?>
		<li role="presentation" class="dropdown <?php if($tab=="companies") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Companies <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="activecompany.php">Active company</a></li>
				<li class="divider"></li>
				<li><a href="closecompany.php">Closed company</a></li>
			</ul>
		</li>
		<?php
			maketab(array('name'=>'Students','page'=>'students', 'href'=>'students.php',  'pa'=>$page));
		?>
		<li role="presentation" class="dropdown <?php if($tab=="upload") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Upload <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="uploadarticle.php">Articles</a></li>
				<li class="divider"></li>
				<li><a href="uploadrefmat.php">Ref matarial</a></li>
			</ul>
		</li>
	</ul>
</div>
<div style='position:fixed;top:100px;z-index:1;background-color:white;width:100%;' >
<?php
	mypath();
?>
</div>
<div style='height:160px;' >
</div>
