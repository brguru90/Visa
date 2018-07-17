<?php include('log_details.php');?>
<?php
if(!isset($_SESSION['reg_no']))
{
	echo "<script>alert('pls enter register number first');( window.parent || window ).location = 'visa.php';</script>";
}
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from ca where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$name_of_consultent=$row["name_of_consultent"];
		$consultent_register_no=$row["consultent_register_no"];
		$address=$row["address"];
		$description_of_income1=$row["description_of_income1"];
		$description_of_income2=$row["description_of_income2"];
		$description_of_income3=$row["description_of_income3"];
		$description_of_income4=$row["description_of_income4"];
		$description_of_income5=$row["description_of_income5"];
		$description_of_income6=$row["description_of_income6"];
		$description_of_income7=$row["description_of_income7"];
		$description_of_income8=$row["description_of_income8"];
		$income_value1=$row["income_value1"];
		$income_value2=$row["income_value2"];
		$income_value3=$row["income_value3"];
		$income_value4=$row["income_value4"];
		$income_value5=$row["income_value5"];
		$income_value6=$row["income_value6"];
		$income_value7=$row["income_value7"];
		$income_value8=$row["income_value8"];
	}
}
else
{
	echo "<script>alert('form not submitted');( window.parent || window ).location = 'visa.php';</script>";
}
$conn->close();
?>
<html>
<head>
<title>Charted Accountant Report</title>
</head>
<body  bgcolor="aaccda">
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>Charted Accountant Report</i></b></h3>
<form method="" action="">
<table border="0">
<tr>
<td><b><i>Name Of Consultant:</b></i></td>
<td><input type="text" value="<?php echo $name_of_consultent; ?>" name="consname" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Consultant Registration Number:</b></i></td>
<td><input type="text" value="<?php echo $consultent_register_no; ?>" name="cregno" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Address:</b></i></td>
<td><input type="text" value="<?php echo $address; ?>" name="addr" id="first name"size="40" /></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income1:</b></i></td>
<td><TEXTAREA NAME="pd" COLS=40 ROWS=6 ><?php echo $description_of_income1; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income2:</b></i></td>
<td><TEXTAREA NAME="prop2" COLS=40 ROWS=6><?php echo $description_of_income2; ?></TEXTAREA></td>
</tr>
</table>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income3:</b></i></td>
<td><TEXTAREA NAME="prop3" COLS=40 ROWS=6><?php echo $description_of_income3; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income4:</b></i></td>
<td><TEXTAREA NAME="prop4" COLS=40 ROWS=6><?php echo $description_of_income4; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income5:</b></i></td>
<td><TEXTAREA NAME="prop5" COLS=40 ROWS=6><?php echo $description_of_income5; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income6:</b></i></td>
<td><TEXTAREA NAME="prop6" COLS=40 ROWS=6 value="data"><?php echo $description_of_income6; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income7:</b></i></td>
<td><TEXTAREA NAME="prop7" COLS=40 ROWS=6><?php echo $description_of_income7; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="680">
<tr>
<td><b><i>Description Of Income8:</b></i></td>
<td><TEXTAREA NAME="prop8" COLS=40 ROWS=6><?php echo $description_of_income8; ?></TEXTAREA></td>
</tr>
</table>
<table border="0" width="545">
<tr>
<td><b><i>Income Value1:</b></i></td>
<td><input type="text" value="<?php echo $income_value1; ?>" name="valu1" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value2:</b></i></td>
<td><input type="text" value="<?php echo $income_value2; ?>" name="valu2" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value3:</b></i></td>
<td><input type="text" value="<?php echo $income_value3; ?>" name="valu3" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value4:</b></i></td>
<td><input type="text" value="<?php echo $income_value4; ?>" name="valu4" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value5:</b></i></td>
<td><input type="text" value="<?php echo $income_value5; ?>" name="valu5" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value6:</b></i></td>
<td><input type="text" value="<?php echo $income_value6; ?>" name="valu6" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value7:</b></i></td>
<td><input type="text" value="<?php echo $income_value7; ?>" name="valu7" id="first name" size="20" /></td>
</tr>
<tr>
<td><b><i>Income Value8:</b></i></td>
<td><input type="text" value="<?php echo $income_value8; ?>" name="valu8" id="first name" size="20" /></td>
</tr>
</table>
<center>
</center>
</form>
</body>
</html>