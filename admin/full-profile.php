<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','electiv');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="1">
<?php 
		 $ret= mysqli_query($con,"SELECT * FROM stdfill where id = '".$_GET['id']."'");
			while($row=mysqli_fetch_array($ret))
			{
			?>
			</br>
			</br>
			<tr>
			  <th colspan="2"  class="font" font size="6"><b><?php echo ucfirst($row['name']);?>'S <span class="font1">information;</B></span> </th></tr>
			  <tr>
			  <td colspan="2"  class="font"><b>Reg Date : <span class="comb-value"><?php echo $row['postingDate'];?></B></span> </td>
  			   </tr>
			<tr>
			  <td colspan="2"  class="heading" style="color: red;">Elective related info &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Selected Subject-1: </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['ele1'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Selected Subject-2: </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['ele2'];?></span></td>
                    </tr>
                  
                    
  <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Personal Info &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">USN: </td>
<td class="comb-value1"><?php echo $row['usn'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Name: </td>
<td class="comb-value1"><?php echo $row['name'];?></td>
</tr>


<tr>
<td width="12%" valign="top" class="heading">Semister: </td>
<td class="comb-value1"><?php echo $row['sem'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contact No: </td>
<td class="comb-value1"><?php echo $row['contact'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Email id: </td>
<td class="comb-value1"><?php echo $row['email'];?></td>
</tr>


<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="btn btn-primary btn-block" value="Prints this Document " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="btn btn-warning btn-block" value="Close this document " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>