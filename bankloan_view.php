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
$sql="select * from bankloan where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$bank_name=$row["bank_name"];
		$loan_amount=$row["loan_amount"];
		$location_of_bank=$row["location_of_bank"];
		$loan_sanction_date=$row["loan_sanction_date"];
		$loan_sanction_reference_number=$row["loan_sanction_reference_number"];
		$property_value_placed=$row["property_value_placed"];
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
<title>BANK LOAN</title>
</head>
<body  bgcolor="aaccda">
<SCRIPT LANGUAGE="JavaScript">
function doIt() {
	for (i = 0; i <= 8; i++) {
		if (document.forms[0].elements[i].value == "") {
			alert("Please fill out all fields.")
			document.forms[0].elements[i].focus()
			break
		}
		
	}
	
}
</SCRIPT>
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>BANK LOAN</i></b></h3>
<form method="" action="" >
<form>
<table border="0" width="570">
<tr>
<td><b><i>BANK NAME:</b></i></td>
<td><input type="text" value="<?php echo $bank_name; ?>" name=bname size="40" _onChange="doIt()"></td>
</tr>
<tr>
<td><b><i>Loan Amount:</b></i></td>
<td><input type="text" value="<?php echo $loan_amount; ?>"  name=lamt size="20" _onChange="doIt()">
Minimum 20,500Aus $</td>
</tr>
<tr>
<td><b><i>Location Of Bank:</b></i></td>
<td><input type="text" value="<?php echo $location_of_bank; ?>"  name=lbnk size="40" _onChange="doIt()"></td>
</tr>
</table>
<table border="0" width="475">
<tr>
<td><b><i>Loan Sanction Date:</b></i></td>
<td><?php echo $loan_sanction_date; ?></td>
</tr>
</table>
<table border="0" width="530">
<tr>
<td><b><i>Loan Sanction Reference Number:</b></i></td>
<td><input type="text" value="<?php echo $loan_sanction_reference_number; ?>" name=lrefno size="40" onChange="doIt()"/></td>
</tr>
</table>
<table border="0" width="660">
<tr>
<td><b><i>Property Value Placed:</b></i></td>
<td><input type="text" value="<?php echo $property_value_placed; ?>" name=pvp size="40" _onChange/></td>
</tr>
</table>
</form>

</body>
</html>