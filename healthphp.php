<?php include('log_details.php');?>
<html>
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$reg_no=$_SESSION['user'];
$hospital=$_POST["hospital"];
$doctor=$_POST["doctor"];
$dot1=$_POST["healthdate"];
$mot1=$_POST["healthmonth"];
$yot1=$_POST["healthyear"];
$date_of_visit="$yot1-$mot1-$dot1";
$healthstatus=$_POST["healthstatus"];
$sql="insert into health values($reg_no,'$hospital','$doctor','$date_of_visit','$healthstatus')";
if ($conn->query($sql) === TRUE) 
{
	echo "<script>alert('form submitted');( window.parent || window ).location = 'visa.php';;</script>";
}
else 
{
	//echo "Error: " . $sql . "<br>" . $conn->error;
	echo "<script>alert('Error occured');history.go(-1);</script>";
}

$conn->close();
?>
</html>