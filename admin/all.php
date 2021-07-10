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
	<title>Manage students</title>
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

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					</br>
					</br>
						<h2 class="page-title">Manage students</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
									<tr>
									<th><label class="col-sm-2 control-label">Subject1 </label>
<div class="col-sm-8">
<select name="ele1" id="ele1"class="form-control"  onChange="getele(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select sub1</option>
<?php $query ="SELECT * FROM sub1";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->subname;?>"> <?php echo $row->subname;?></option>
<?php } ?>
</select> 
<span id="sub1-availability-status" style="font-size:12px;"></span>

</div></th>
<th>
<select name="ele1" id="ele1"class="form-control"  onChange="getele(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select Electiv</option>
<option value="First">sub1</option>
<option value="Second">sub2</option>
</select> 
<span id="sub1-availability-status" style="font-size:12px;"></span>

</div></th>
										<tr>
											<th>Sno.</th>
											<th>Student Name</th>
											<th>USN</th>
											<th>Contact no</th>
											<th>selected sub1</th>
											<th>selected sub2</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from stdfill";
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