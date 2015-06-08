<div style='position:fixed;z-index:1;background-color:white;width:100%;' >
	<ul class="nav nav-tabs" style='margin:10px;' >
		<?php
			maketab(array('name'=>'Home','page'=>'home','pa'=>$page));
			maketab(array('name'=>'About','page'=>'about','pa'=>$page,'href'=>HOST.'about.php'));
			maketab(array('name'=>'Applications','page'=>'app','pa'=>$page,'href'=>HOST.'app.php'));
//			maketab(array('name'=>'Notifications','page'=>'notf','pa'=>$page,'href'=>HOST.'notf.php'));
		?>
		<li role="presentation" class="dropdown <?php if($page=="notf") echo "active"; ?> " >
			<?php
				$top3notf=Help::mynotf(3);
				$num_unread=Help::num_unreadmsg();
			?>
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Notifications<?php if($num_unread>0){ ?>
				<span class="badge"><?php echo $num_unread; ?></span>
				<?php
			}
				?>
			</a>
			<ul class="dropdown-menu" role="menu">
				<?php
					if(count($top3notf)==0){
				?>
				<li>
					<a>There is no notifications</a>
				</li>
				<?php
					}
				for($i=0;$i<count($top3notf);$i++){
			?>
				<li><a href="<?php echo $top3notf[$i]["url"]; ?>">
					<span style='<?php if($top3notf[$i]['isr']=='0') echo "font-weight:700;"; ?>' ><?php echo Fun::displayMsgBody($top3notf[$i]["content"]); ?></span>
					<div align=right class='notf_time' ><?php echo Fun::timepassed(time()-$top3notf[$i]['time']); ?></div>
				</a></li>
				<?php
					if($i!=count($top3notf)-1){
				?>
				<li class="divider"></li>
			<?php
					}
				}
			?>
			<?php
				if(count($top3notf)>=3){
			?>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."notf.php";  ?>" style='color:#428BCA;' >See all</a></li>
			<?php
				}
			?>
			</ul>
		</li>
		<li role="presentation" class="dropdown <?php if($tab=="profile") echo "active"; ?> " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if($myf==null) echo "Profile"; else echo $myf["name"]; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="profile.php">My profile</a></li>
				<li><a href="account.php">My Account</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."?logout";  ?>"  >Logout</a></li>
			</ul>
		</li>
	</ul>
</div>