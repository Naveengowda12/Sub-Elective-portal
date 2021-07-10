<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if(isset($_POST['submit']))
{
$ele1=$_POST['ele1'];
$ele2=$_POST['ele2'];
$usn=$_POST['usn'];
$name=$_POST['name'];
$sem=$_POST['sem'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$query="insert into  stdfill(ele1,ele2,usn,name,sem,contact,email) values(?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssis',$ele1,$ele2,$usn,$name,$sem,$contact,$email);
$stmt->execute();
echo"<script>alert('Subject selected Succssfully register');</script>";
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
	<title>Electiv</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>
function getele(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'usn='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'usn='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
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
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
							
			
								
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color: green" align="left">Elective info </h4> </label>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Subject1 </label>
<div class="col-sm-8">
<select name="ele1" id="ele1"class="form-control"  onChange="getele(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select sub1</option>
<?php 
$query ="DELETE FROM sub1 WHERE subname IN ( SELECT ele1 FROM stdfill GROUP BY ele1 HAVING COUNT(*) = 5)";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
?>
 

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

</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Subject2 </label>
<div class="col-sm-8">
<select name="ele2" id="ele2"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select sub2</option>
<?php 
$query ="DELETE FROM sub2 WHERE subname IN ( SELECT ele2 FROM stdfill GROUP BY ele2 HAVING COUNT(*) = 5)";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
?>
 

<?php $query ="SELECT * FROM sub2";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->subname;?>"> <?php echo $row->subname;?></option>
<?php } ?>
</select> 
<span id="" style="font-size:12px;"></span>

</div>
</div>
					

<div class="form-group">
<label class="col-sm-2 control-label">USN : </label>
<div class="col-sm-8">
<input type="text" name="usn" id="usn"  class="form-control" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Name : </label>
<div class="col-sm-8">
<input type="text" name="name" id="name"  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Semister : </label>
<div class="col-sm-8">
<input type="text" name="sem" class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" >
</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

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
</body>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'usn='+$("#usn").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</html>