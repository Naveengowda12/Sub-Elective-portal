<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>manege std</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>

</head>

<body>
	<?php include('includes/header.php');?>
<form action="" method="post" class="form-horizontal">
	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					</br>
					</br>
						<h2 class="page-title">Students with subject</h2>
						<div class="panel panel-success">
							<div class="panel-heading">All Details</div>
							<div class="panel-body">
									<form action "">	
										<div class="form-group">
<label class="col-sm-2 control-label">Subject group : </label>
<div class="col-sm-6">
<select name="subgrp" class="form-control" required="required">
<option value="sub1">Subject group1</option>
<option value="sub2">Subject group2</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Subjects: </label>
<div class="col-sm-6">
        <select name="ele" id="ele"class="form-control"required> 
<option value="pick">select</option>
<?php
if(isset($_POST['subgrp']))
{
	
		if($subgrp=="sub1")
    {

$query="select * from sub1";
$stmt = $mysqli->prepare($query);
$stmt->execute();
}
else
{
$query="select * from sub2";
$stmt = $mysqli->prepare($query);
$stmt->execute();
}
?>
<option value="<?php echo $row->$subname;?>"> <?php echo $row->subname;?></option>
<?php }?>
</select>
</div>
</div>
								<table id="z" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
											<th>Student Name</th>
											<th>USN</th>
											<th>Contact no</th>
											<th>selected sub</th>
											<th>selected sub</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from stdfill ";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->usn;?></td>
<td><?php echo $row->contact;?></td>
<td><?php echo $row->ele1;?></td>
<td><?php echo $row->ele2;?></td>
<td>
<a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/ele/admin/full-profile.php?id=<?php echo $row->id;?>');" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
<a href="manage-students.php?del=<?php echo $row->id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
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

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
	