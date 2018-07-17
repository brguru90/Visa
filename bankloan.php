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
$bname=$_POST["bname"];
$lamt=$_POST["lamt"];
$lbnk=$_POST["lbnk"];
$day=$_POST["dob1"];
$month=$_POST["dob2"];
$year=$_POST["dob3"];
$date="$year-$month-$day";
$lrefno=$_POST["lrefno"];
$pvp=$_POST["pvp"];
$sql="insert into bankloan values($reg_no,'$bname','$lamt','$lbnk','$date','$lrefno','$pvp')";
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