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
<script>

$(document).ready(function(){

$('#country').on('change',function(){

var countryID = $(this).val();

if(countryID){

$.ajax({

type:'POST',

url:'ajaxData.php',

data:'country_id='+countryID,

success:function(html){

$('#state').html(html);

$('#city').html('<option value="">Select state first</option>');

}

});

}else{

$('#state').html('<option value="">Select country first</option>');

$('#city').html('<option value="">Select state first</option>');

}

});

$('#state').on('change',function(){

var stateID = $(this).val();

if(stateID){

$.ajax({

type:'POST',

url:'ajaxData.php',

data:'state_id='+stateID,

success:function(html){

$('#city').html(html);

}

});

}else{

$('#city').html('<option value="">Select state first</option>');

}

});

});

</script>

<div class="select-boxes">

<?php

//Include database configuration file

include('dbConfig.php');

//Get all country data

$query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");

//Count total number of rows

$rowCount = $query->num_rows;

?>

<select name="country" id="country">

<option value="">Select Country</option>

<?php

if($rowCount > 0){

while($row = $query->fetch_assoc()){

echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';

}

}else{

echo '<option value="">Country not available</option>';

}

?>

</select>

<select name="state" id="state">

<option value="">Select country first</option>

</select>

<select name="city" id="city">

<option value="">Select state first</option>

</select>

</div>