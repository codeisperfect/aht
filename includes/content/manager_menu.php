		<li role="presentation" class="<?php if(isset($page) && $page=='index') echo "active"; ?>" ><a href="<?php echo HOST; ?>">Overview</a></li>
		<li role="presentation"  class='dropdown' >
			<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add account
			</a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="invitecomp.php">Invite company</a></li>
				<li><a href="addstudent.php">Add student</a></li>
			</ul>
		</li>
		<li role="presentation" class="<?php if(isset($page) && $page=='index') echo "active"; ?>" ><a href="<?php echo HOST; ?>">Recommand</a></li>
		<li role="presentation"  class='dropdown' >
			<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">companies
			</a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="activecomp.php">Active</a></li>
				<li><a href="closedcomp.php">Closed</a></li>
			</ul>
		</li>
		<li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php if($profile!=null) echo $profile['name']; else echo "Profile";  ?>
				<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="account.php">My Account (<?php echo $profile['username']; ?>) </a></li>
				<li><a href="msg.php">Message</a></li>
				<?php
					if(User::isloginas('s') || User::isloginas('m')){
				?>
				<li><a href="ref.php">Ref. Matarial</a></li>
				<?php
					}
				?>
				<li class="divider"></li>
				<li><a href="<?php echo HOST; ?>?logout">Logout</a></li>
			</ul>
		</li>

