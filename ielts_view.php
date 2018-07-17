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
$sql="select * from ielts where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$module1=$row["module1"];
		$center_no=$row["center_no"];
		$date_of_exam=$row["date_of_exam"];
		$module2=$row["module2"];
		$candidate_no=$row["candidate_no"];
		$family_name=$row["family_name"];
		$first_name=$row["first_name"];
		$candidate_id=$row["candidate_id"];
		$date_of_birth=$row["date_of_birth"];
		$sex=$row["sex"];
		$scheme_code=$row["scheme_code"];
		$country_of_origin=$row["country_of_origin"];
		$first_language=$row["first_language"];
		$repeating_ielts=$row["repeating_ielts"];
		$previous_test_date=$row["previous_test_date"];
		$previous_test_center=$row["previous_test_center"];
		$listening=$row["listening"];
		$reading=$row["reading"];
		$writing=$row["writing"];
		$speaking=$row["speaking"];
		$overall_band_score=$row["overall_band_score"];
		$test_report_form_number=$row["test_report_form_number"];
		$date_of_score=$row["date_of_score"];
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
<title>IELTS</title>
</head>
<body  bgcolor="aaccda">
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>IELTS Test Report Form</i></b></h3>

<form method="" action="">
<table border="0">
<tr>
<td><b><i>Module:</b></i></td>
<td><input type="text" value="<?php echo $module1 ?>"  name=module1  "size="40" /></td>
</tr>
<tr>
<td><b><i>Center number:</b></i></td>
<td><input type="text" value="<?php echo $center_no ?>"   name=centerno size="20" /></td>
</tr>
</table>
<table border="0" width="245">
<tr>
<td><b><i>Date Of Exam:</b></i></td>
<td><?php echo $date_of_exam ?></td>
</tr>
</table>
<table border="0" width="413">
<tr>
<td><b><i>Module:</b></i></td>
<td><input type="text" value="<?php echo $module2 ?>"  name=module2  size="40" /></td>
</tr>
<tr>
<td><b><i>Candidate number:</b></i></td>
<td><input type="text" value="<?php echo $candidate_no ?>"  name=candino  size="20" /><font color=red>*</font></td>
</tr>
</table>
<h3><b><i>Candidate Details:</i></b></h3>

<table border="0">
<tr>
<td><b><i>Family Name:</b></i></td>
<td><input type="text" value="<?php echo $family_name ?>"   name=famname  size="40" /></td>
</tr>
<tr>
<td><b><i>First Name:</b></i></td>
<td><input type="text" value="<?php echo $first_name ?>"   name=firname size="40" /></td>
</tr>
<tr>
<td><b><i>Candidate Id:</b></i></td>
<td><input type="text" value="<?php echo $candidate_id; ?>"  name=candiid  size="20" /><font color=red>*</font></td>
</tr>
</table>
<table border="0" width="230">
<tr>
<td><b><i>Date Of Birth:</b></i></td>
<td><?php echo $date_of_birth; ?></td>
</tr>
</table>
<TABLE border="0" width=600>
<tr>
<td><b><i>Sex:</b></i>
<td>
<?php echo $sex; ?>
</td>
</table>
<table border="0">
<tr>
<td><b><i>Scheme Code:</b></i></td>
<td><input type="text" value="<?php echo $scheme_code; ?>" name=sccode size="20" /></td>
</tr>
<tr>
<td><b><i>Country Of Origin:</b></i></td>
<td><input type="text" value="<?php echo $country_of_origin; ?>"  name=coorigin  size="20" /></td>
</tr>
<tr>
<td><b><i>First Language:</b></i></td>
<td><input type="text" value="<?php echo $first_language; ?>"  name="firstlang"  size="20" /></td>
</tr>
<tr>
<td><b><i>Repeating IELTS:</b></i></td>
<td><input type="text" value="<?php echo $repeating_ielts; ?>"  name=repeat size="10" /></td>
</tr>
<tr>
<td><b><i>Previous Test Date:</b></i></td>
<td><?php echo $previous_test_date; ?></td>
</tr>

<tr>
<td><b><i>Previous Test Center:</b></i></td>
<td><input  type="text" value="<?php echo $previous_test_center; ?>" name=precenter  size="20" /></td>
</tr>
</table>
<h3><b><i>Test Results:</i></b></h3>

<table border="0">
<tr>
<td><b><i>Listening:</b></i></td>
<td><input type="text" value="<?php echo $listening; ?>"  name=list  size="10" /></td>
<td><b><i>Reading:</b></i></td>
<td><input type="text" value="<?php echo $reading; ?>" name=read size="10" /></td>
<td><b><i>Writing:</b></i></td>
<td><input type="text" value="<?php echo $writing; ?>" name=write size="10" /></td>
<td><b><i>Speaking:</b></i></td>
<td><input type="text" value="<?php echo $speaking; ?>"  name=speak  size="10" /></td>
</tr>
<tr>
<td><b><i>Overall Band Score:</b></i>
<td><input type="text" value="<?php echo $overall_band_score; ?>" name=overall  size="15" /><font color=red>*</font></td></td>
</tr>
<tr>
<td><b><i>Test Report Form Number:</b></i></td>
<td><input type="text" value="<?php echo $test_report_form_number; ?>"  name=trfno size="15" /><font color=red>*</font></td>
</tr>
</table>
<table border="0" width="360">
<tr>
<td><b><i>Date Of Score:</b></i></td>
<td><?php echo $date_of_score; ?></td>
</tr>
</table>
</form>

</body>
</html>