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
$sql="select * from health where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$panel_hospital_name=$row["panel_hospital_name"];
		$panel_doctor=$row["panel_doctor"];
		$date_of_visit=$row["date_of_visit"];
		$status=$row["status"];
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
		<title>Health</title>
	</head>
	<body bgcolor="#aaccda">
		<font face="Times New Roman" color="#330033" size="3">
			<h3><b><i>Health</i></b></h3>
			<form method="" action="">
				<table border="0">
					<tr>
						<td><b><i>Panel Hospital Name:</b></I></td>
						<td><input type="text" value="<?php echo $panel_hospital_name; ?>" name="hospital" size="20"></td>
					</tr>
					<tr>
						<td><b><i>Panel Doctor:</b></I></td>
						<td><input type="text" value="<?php echo $panel_doctor; ?>" name="doctor" size="20"></td>
					</tr>
				</table>
				<table border="0" width="500">
					<tr>
						<td><b><i>Date Of Visit:</b></I></td>
						<td><?php echo $date_of_visit; ?></td>
					</tr>
				</table>
				<table border="0" width="1250">
					<tr>
						<td><b><i>Status:</b></I></td>
						<td><input type="text" value="<?php echo $status; ?>" name="healthstatus" id="first name" size="40"></td>
					</tr>
				</table>
			</form>
			</I></B></CENTER></font>
	</body>
</html>
