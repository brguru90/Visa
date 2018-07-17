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
$sql="select * from affidavit where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$name_of_sponcer=$row["name_of_sponcer"];
		$relation_to_student=$row["relation_to_student"];
		$bank_balance=$row["bank_balance"];
		$immovable_property_description=$row["immovable_property_description"];
		$notary_name=$row["notary_name"];
		$registration_number_of_notary=$row["registration_number_of_notary"];
		$address_of_notary=$row["address_of_notary"];
		$value_of_stamp_paper=$row["value_of_stamp_paper"];
		$date_of_affidavit=$row["date_of_affidavit"];
		$affidavit_number=$row["affidavit_number"];
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
<title>AFFIDAVITS</title>
</head>
<body  bgcolor="aaccda">
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>AFFIDAVITS</i></b></h3>
<form method="" action="">
<table border="0">

<tr>
<td><b><i>Name Of The Sponserer:</b></i></td>
<td><input type="text" value="<?php echo $name_of_sponcer; ?>" name=spname size="20" /></td>
</tr>
<tr>
<td><b><i>Relation To The Student:</b></i></td>
<td><input type="text" value="<?php echo $relation_to_student; ?>" name=sturelation size="40" /></td>
</tr>
<tr>
<td><b><i>Bank Balance:</b></i></td>
<td><input type="text" value="<?php echo $bank_balance; ?>" name=bankbal size="40" /></td>
</tr>
<tr>
<td><b><i>Immovable Property Description:</i></b></td>
<td><input type=TEXTAREA   name=improp COLS=40 ROWS=4><?php echo $immovable_property_description; ?></TEXTAREA>
</td>
</tr>
<tr>
<td><b><i>Notary name:</b></i></td>
<td><input type="text" value="<?php echo $notary_name; ?>" name=notname size="40" /></td>
</tr>
<tr>
<td><b><i>Registration Number Of Notary:</b></i></td>
<td><input type="text" value="<?php echo $registration_number_of_notary; ?>" name=notregno  size="40" /></td>
</tr>
<tr>
<td><b><i>Address Of Notary:</b></i></td>
<td><input type="text" value="<?php echo $address_of_notary; ?>" name=notaddr size="40" /></td>
</tr>
<tr>
<td><b><i>Value Of Stamp paper:</b></i></td>
<td><input type="text" value="<?php echo $value_of_stamp_paper; ?>" name=stvalue size="40" /></td>
</tr>
</table>
<table border="0" width="485">
<tr>
<td><b><i>Date Of Affidavit:</b></i></td>
<td><?php echo $date_of_affidavit; ?></td>
</tr>
</table>
<table border="0" width="700">
<tr>
<td><b><i>Affidavit Number:</b></i></td>
<td><input type="text" value="<?php echo $affidavit_number; ?>" name=affino size="40" /></td>
</tr>
</table>
</form>

</body>
</html>