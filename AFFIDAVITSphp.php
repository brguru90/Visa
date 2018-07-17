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
$spname=$_POST["spname"];
$sturelation=$_POST["sturelation"];
$bankbal=$_POST["bankbal"];
$improp=$_POST["improp"];
$notname=$_POST["notname"];
$notregno=$_POST["notregno"];
$notaddr=$_POST["notaddr"];
$stvalue=$_POST["stvalue"];
$dot1=$_POST["doa"];
$mot1=$_POST["moa"];
$yot1=$_POST["yoa"];
$date_of_affidavit="$yot1-$mot1-$dot1";
$affino=$_POST["affino"];
$sql="insert into affidavit values($reg_no,'$spname','$sturelation','$bankbal','$improp','$notname','$notregno','$notaddr','$stvalue','$date_of_affidavit','$affino')";
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