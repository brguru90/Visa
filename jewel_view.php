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
$sql="select * from jewel where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$jeweller_registration_number=$row["jeweller_registration_number"];
		$bill_no=$row["bill_no"];
		$name=$row["name"];
		$address=$row["address"];
		$date_of_report=$row["date_of_report"];
		$description=$row["description"];
		$tag_number=$row["tag_number"];
		$net_weight=$row["net_weight"];
		$rate=$row["rate"];
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
<title>JEWELLER'S CERTIFICATE</title>
</head>
<body  bgcolor="aaccda">
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>JEWELLER'S CERTIFICATE</i></b></h3>
<form method="" action="">
<table border="0">
<tr>
<td><b><i>Jeweller Registration Number:</b></i></td>
<td><input type="text" value="<?php echo $jeweller_registration_number; ?>" name="jregno" id="first name"size="20" /></td>
<tr>
<td><b><i>Bill Number:</b></i></td>
<td><input type="text" value="<?php echo $bill_no; ?>" name="billno" id="first name"size="20" /></td>
</tr>
<tr>
<td><b><i>Name:</b></i></td>
<td><input type="text" value="<?php echo $name; ?>" name="name" id="first name"size="20" /></td>
</tr>
<tr>
<td><b><i>Address:</b></i></td>
<td><input type="text" value="<?php echo $address; ?>" name="addr" id="first name"size="20" /></td>
</tr>
</tr>
</table>
<table border="0" width="440">
<tr>
<td><b><i>Date Of Report:</b></i></td>
<td><?php echo $date_of_report; ?></td>
</tr>
</table>
<table border="0" width="990">
<tr>
<td><b><i>Description:</i></b></td>
<td><TEXTAREA NAME="descrip" COLS=40 ROWS=4><?php echo $description; ?></TEXTAREA>
</td>
</tr>
<tr>
<td><b><i>Tag Number:</b></i></td>
<td><input type="text" value="<?php echo $tag_number; ?>" name="tagno" id="first name"size="20" /></td>
</tr><tr>
<td><b><i>Net Weight:</b></i></td>
<td><input type="text" value="<?php echo $net_weight; ?>" name="weight" id="first name"size="20" /></td>
</tr><tr>
<td><b><i>Rate:</b></i></td>
<td><input type="text" value="<?php echo $rate; ?>" name="rate" id="first name"size="20" /></td>
</tr>
</table>
</form>

</body>
</html>