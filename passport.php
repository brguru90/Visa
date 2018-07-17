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
$passno=$_POST["passno"];
$dot1=$_POST["doi1"];
$mot1=$_POST["doi2"];
$yot1=$_POST["doi3"];
$date_of_issue1="$yot1-$mot1-$dot1";
$poissue=$_POST["poissue"];
$authsign=$_POST["authsign"];
$dot1=$_POST["doiss1"];
$mot1=$_POST["doiss2"];
$yot1=$_POST["doiss3"];
$date_of_issue2="$yot1-$mot1-$dot1";
$sql="insert into pass values($reg_no,'$passno','$date_of_issue1','$poissue','$authsign','$date_of_issue2')";
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