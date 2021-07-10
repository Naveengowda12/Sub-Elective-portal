<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label"><font size="6" style="font-family:times new roman" >Main</font></li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="my-profile.php"><i class="fa fa-book"></i><font size="4"style="font-family:times new roman">Choose Electiv</font></a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i><font size="4"style="font-family:times new roman">My Profile</font></a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i><font size="4"style="font-family:times new roman">Change Password</font></a></li>
<?php } else { ?>
				<li><a href="index.html"><i class="fa fa-home"></i><font size="4"style="font-family:times new roman">Home</font></a></li>
				<li><a href="registration.php"><i class="fa fa-files-o"></i><font size="4"style="font-family:times new roman"> Student Registration</font></a></li>
				<li><a href="login.php"><i class="fa fa-users"></i><font size="4"style="font-family:times new roman"> Student Login</font></a></li>
				<?php } ?>

			</ul>
		</nav>