<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_GET['del']))
{
	$subcode=($_GET['del']);
	$adn="delete from sub1 where subcode=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('s',$subcode);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
if(isset($_GET['del1']))
{
	$subcode=($_GET['del1']);
	$adn="delete from sub2 where subcode=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('s',$subcode);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
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
	<title>delete subjects</title>
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
						<h2 class="page-title">Delete Subjects</h2>
	
							<div class="row">
							<div class="col-md-12">
								<div class="panel panel-info">
									<div class="panel-heading">Subjects</div>
									<div class="panel-body">
										<h3> subjects in group1</h3>
<table id="" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>subcode-1</th>
											<th>subname-1</th>
													<th>Action</th>											</tr>
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
<td><a href="delete-subjects.php?del=<?php echo $row->subcode;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
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
													<th>Action</th>											</tr>
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
<td><a href="delete-subjects.php?del1=<?php echo $row->subcode;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
										
										</tr>
									<?php

									 } ?>
											
										
									</tbody>
								</table>
										

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
					
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