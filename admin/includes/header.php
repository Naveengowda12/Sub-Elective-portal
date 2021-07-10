<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<center><a href="#" class="btn btn-secondary float-center"> <font size= "26" style="font-family:times new roman";>SUBJECT ELECTIVE PORTAL</font></a></center>
		<div class="container-fluid">
<div class="col">
<div class="row-md-4"><a href="logout.php">Logout</a></li>
				
		</div></div></div>
</div>
<?php
} else { ?>
<div class="brand clearfix">
		<center><a href="#" class="btn btn-secondary float-center"> <font size= "26" style="font-family:times new roman";>ELECTIVE PORTAL</font></a></center>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>