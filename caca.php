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
$consname=$_POST["consname"];
$cregno=$_POST["cregno"];
$addr=$_POST["addr"];
$pd=$_POST["pd"];
$prop2=$_POST["prop2"];
$prop3=$_POST["prop3"];
$prop4=$_POST["prop4"];
$prop5=$_POST["prop5"];
$prop6=$_POST["prop6"];
$prop7=$_POST["prop7"];
$prop8=$_POST["prop8"];
$valu1=$_POST["valu1"];
$valu2=$_POST["valu2"];
$valu3=$_POST["valu3"];
$valu4=$_POST["valu4"];
$valu5=$_POST["valu5"];
$valu6=$_POST["valu6"];
$valu7=$_POST["valu7"];
$valu8=$_POST["valu8"];
$sql="insert into ca values($reg_no,'$consname','$cregno','$addr','$pd','$prop2','$prop3','$prop4','$prop5','$prop6','$prop7','$prop8','$valu1','$valu2','$valu3','$valu4','$valu5','$valu6','$valu7','$valu8')";
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