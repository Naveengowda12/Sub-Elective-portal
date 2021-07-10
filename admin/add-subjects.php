<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{
	if(isset($_POST['subgrp']))
      {

        $subgrp=$_POST['subgrp']; 

        if($subgrp=="sub1")
                    $required="required"; 
        else    
                    $required="";
        }
		if($subgrp=="sub1")
    {
$subcode=$_POST['subcode'];
$subname=$_POST['subname'];
$query="insert into  sub1 (subcode,subname) values(?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ss',$subcode,$subname);
$stmt->execute();
echo"<script>alert('subject has been added successfully');</script>";
}
else
{
$subcode=$_POST['subcode'];
$subname=$_POST['subname'];
$query="insert into  sub2 (subcode,subname) values(?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ss',$subcode,$subname);
$stmt->execute();
echo"<script>alert('subject has been added successfully');</script>";
}
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add subjects</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-10">
					</br>
					</br>
						<h2 class="page-title">Add Subjects</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-info">
									<div class="panel-heading">Add Subjects</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
										<div class="form-group">
<label class="col-sm-2 control-label">Subject group : </label>
<div class="col-sm-6">
<select name="subgrp" class="form-control" required="required">
<option value="">Select subject group</option>
<option value="sub1">Subject group1</option>
<option value="sub2">Subject group2</option>
</select>
</div>
</div>

																			<div class="form-group">
												<label class="col-sm-2 control-label">Subject Code </label>
												<div class="col-sm-6">
													<input type="text" value="" name="subcode" id="subcode"  class="form-control"> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Subject Name </label>
												<div class="col-sm-6">
	<input type="text" class="form-control" name="subname" id="subname" value="" required="required">
						 
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Subject">
												</div>
												</form>
											</div>
											</div> 
											</div> 
											</div> 
											

									</div>
								</div>
																		<h3> subjects in group1</h3>
								<table id="" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>subcode-1</th>
											<th>subname-1</th>
																							</tr>
									</thead>
									
									<tbody>
<?php	
$ret="select * from sub1";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
while($row=$res->fetch_object())
	  {
	  	?>
<tr>
<td><?php echo $row->subcode;?></td>
<td><?php echo $row->subname;?></td>

										</tr>
									<?php
									 } ?>
											
										
									</tbody>
								</table>
								<h3> subjects in group2</h3>
		<table id="" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>subcode-1</th>
											<th>subname-1</th>
																</tr>
									</thead>
									
									<tbody>
									
									
<?php	
$ret="select * from sub2";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
while($row=$res->fetch_object())
	  {
	  	?>
<tr>
<td><?php echo $row->subcode;?></td>
<td><?php echo $row->subname;?></td>
										
										</tr>
									<?php

									 } ?>
											
										
									</tbody>
								</table>	
							
							</div>
						
									
							

							</div>
						</div>

	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
</body>

</html>