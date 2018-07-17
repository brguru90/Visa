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
$module1=$_POST["module1"];
$centerno=$_POST["centerno"];
$dot1=$_POST["doe"];
$mot1=$_POST["moe"];
$yot1=$_POST["yoe"];
$date_of_exam="$yot1-$mot1-$dot1";
$module2=$_POST["module2"];
$candino=$_POST["candino"];
$famname=$_POST["famname"];
$firname=$_POST["firname"];
$candiid=$_POST["candiid"];
$dot2=$_POST["dob"];
$mot2=$_POST["mob"];
$yot2=$_POST["yob"];
$date_of_birth="$yot2-$mot2-$dot2";
$r1=$_POST["r1"];
$sccode=$_POST["sccode"];
$coorigin=$_POST["coorigin"];
$firstlang=$_POST["firstlang"];
$repeat=$_POST["repeat"];
$dot22=$_POST["dopt"];
$mot22=$_POST["mopt"];
$yot22=$_POST["yopt"];
$previous_test_date="$yot22-$mot22-$dot22";
$precenter=$_POST["precenter"];
$list=$_POST["list"];
$read=$_POST["read"];
$write=$_POST["write"];
$speak=$_POST["speak"];
$overall=$_POST["overall"];
$trfno=$_POST["trfno"];
$dot220=$_POST["dos"];
$mot220=$_POST["mos"];
$yot220=$_POST["yos"];
$date_of_score="$yot220-$mot220-$dot220";
$sql="insert into ielts values($reg_no,'$module1','$centerno','$date_of_exam','$module2','$candino','$famname','$firname','$candiid','$date_of_birth','$r1','$sccode','$coorigin','$firstlang','$repeat','$previous_test_date','$precenter','$list','$read','$write','$speak','$overall','$trfno','$date_of_score')";
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