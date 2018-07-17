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
$jregno=$_POST["jregno"];
$billno=$_POST["billno"];
$name=$_POST["name"];
$addr=$_POST["addr"];
$dot1=$_POST["dor"];
$mot1=$_POST["mor"];
$yot1=$_POST["yor"];
$date_of_report="$yot1-$mot1-$dot1";
$descrip=$_POST["descrip"];
$tagno=$_POST["tagno"];
$weight=$_POST["weight"];
$rate=$_POST["rate"];
$sql="insert into jewel values($reg_no,'$jregno','$billno','$name','$addr','$date_of_report','$descrip','$tagno','$weight','$rate')";
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