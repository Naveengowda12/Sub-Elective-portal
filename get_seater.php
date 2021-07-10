<?php
include('includes/pdoconfig.php');
if(!empty($_POST["usn"])) 
{	
$id=$_POST['usn'];
$stmt = $DB_con->prepare("SELECT * FROM stdfill WHERE usn = :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['seater']); ?>
  <?php
 }
}



if(!empty($_POST["usn"])) 
{	
$id=$_POST['usn'];
$stmt = $DB_con->prepare("SELECT * FROM stdfill WHERE usn = :id");
$stmt->execute(array(':id' => $id));
?>
 <?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
 <?php echo htmlentities($row['fill']); ?>
  <?php
 }
}

?>