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
$sql="select * from pass where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$passport_no=$row["passport_no"];
		$date_of_issue1=$row["date_of_issue1"];
		$place_of_issue=$row["place_of_issue"];
		$authorised_signatory_name=$row["authorised_signatory_name"];
		$date_of_issue2=$row["date_of_issue2"];
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
		<title>VISA</title>
	</head>
	<body bgcolor="#aaccda">
		<font face="Times New Roman" color="#330033" size="3">
			<h3><b><i>PASSPORT DETAILS</i></b></h3>
			<form method="" action="">
				<table border="0" width="500">
					<tr>
						<td><b><i>Passport Number:</b></I></td>
						<td><input type="text" value="<?php echo $passport_no; ?>" name="passno" id="first name1" size="20"></td>
					</tr>
				</table>
				<table border="0" width="550">
					<tr>
						<td><b><i>Date Of Issue:</b></I></td>
						<td><?php echo $date_of_issue1; ?></td>
					</tr>
				</table>
				<table border="0" width="550">
					<tr>
						<td><b><i>Place Of Issue:</b></I></td>
						<td><input type="text" value="<?php echo $place_of_issue; ?>" name="poissue" id="first name4" size="40"></td>
					</tr>
					<tr>
						<td><b><i>Authorised Signatory Name:</b></I></td>
						<td><input type="text" value="<?php echo $authorised_signatory_name; ?>" name="authsign" id="first name5" size="20"></td>
					</tr>
				</table>
				<table border="0" width="550">
					<tr>
						<td><b><i>Date Of Issue:</b></I></td>
						<td><?php echo $date_of_issue2; ?></td>
					</tr>
				</table>
			</form>
			</I></B></CENTER></font>
	</body>
</html>
