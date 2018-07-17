<?php 
session_cache_limiter(false);
include('log_details.php');?>
<html>
<head>
<title>Electronic VISA Processing</title>
<link href="style.css" type="text/css" rel="stylesheet" media="all">
<link href="fonts/gurufonts.css" type="text/css" rel="stylesheet" media="all">
<script src="api/jquery.js"></script>
<script src="js.js"></script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 16px;
	top: 22px;
	width: 1546px;
	height: 793px;
	z-index: 1;
	background-color: black;
	opacity: 0.2;
	padding: 5px 5px 5px 5px;
}
#apDiv2 {
	position: absolute;
	left: 52px;
	top: 27px;
	width: 1486px;
	height: 102px;
	z-index: 2;
	background-color: #0702CE;
	font-size: 36px;
	font-weight: bold;
	text-transform: uppercase;
	text-decoration: underline;
	opacity: 0.8;
}
#apDiv3 {
	position: absolute;
	left: 236px;
	top: 33px;
	width: 128px;
	height: 90px;
	z-index: 3;
	background-color: #FFF;
}
#apDiv4 {
	position: absolute;
	left: 420px;
	top: 49px;
	width: 599px;
	height: 50px;
	z-index: 4;
	font-size: 32px;
	font-weight: bold;
	text-transform: uppercase;
	text-decoration: underline;
	text-align: center;
	vertical-align: middle;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #FFF;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: silver;
	text-shadow: 1px 1px 0px white, 0 0 25px white, 0 0 25px blue;
	background-color: blue;
	border-radius: 5px;
}
#apDiv5 {
	position: absolute;
	left: 68px;
	top: 146px;
	width: 1464px;
	height: 637px;
	z-index: 5;
	background-color: white;
	opacity: 0.8;
}
#apDiv6 {
	position: absolute;
	left: 134px;
	top: 186px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv7 {
	position: absolute;
	left: 134px;
	top: 248px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv8 {
	position: absolute;
	left: 134px;
	top: 308px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv9 {
	position: absolute;
	left: 134px;
	top: 368px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv10 {
	position: absolute;
	left: 134px;
	top: 428px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv11 {
	position: absolute;
	left: 134px;
	top: 488px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv12 {
	position: absolute;
	left: 134px;
	top: 548px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv13 {
	position: absolute;
	left: 134px;
	top: 608px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv14 {
	position: absolute;
	left: 134px;
	top: 668px;
	width: 290px;
	z-index: 6;
	background-color: #CCC;
	border-radius: 25px;
}
#apDiv6,#apDiv7,#apDiv8,#apDiv9,#apDiv10,#apDiv11,#apDiv12,#apDiv13,#apDiv14{
	height:30px;
	padding-top:10px;
	text-decoration:none;
	text-align:center;
}
#apDiv6 a,#apDiv7 a,#apDiv8 a,#apDiv9 a,#apDiv10 a,#apDiv11 a,#apDiv12 a,#apDiv13 a,#apDiv14 a{	
	text-decoration:none;
}
#apDiv15 {
	position: absolute;
	left: 474px;
	top: 188px;
	width: 1004px;
	height: 518px;
	z-index: 7;
	background-color: white;
	border-radius: 25px;
}
.log{width:200px;height:30px;position:fixed;left:5px;top:2px;border:solid white 1px;z-index:100;}
.log form{width:100%;height:28px;padding:0px 0px 0px 0px;font-size:12px;text-transform: capitalize;}
.log input{height:28px;padding:2px 5px -5px 5px;font-size:12px;position:fixed;top:3px;left:6px;background: #4FC1E9 none repeat scroll 0% 0%;color:white;z-index:100;font-family:guru9}
.log b{padding:10px 0px 10px 0px;font-size:12px;position:fixed;top:3px;left:65px;}
.login{
	background:transparent;
	width:80px;
	height:40px;
	font-size:25px;
	float:right;
}
#apDiv16 {
	position: absolute;
	left: 738px;
	top: 222px;
	width: 526px;
	height: 46px;
	z-index: 8;
	font-size: 40px;
	font-weight: bold;
	text-align: center;
	color: #090;
}
#apDiv17 {
	position: absolute;
	left: 528px;
	top: 170px;
	width: 912px;
	height: 362px;
	z-index: 8;
}
#c{
	width:100%;
	height:10%;
}
#cc{
	float:left;
	width:100%;
	height:85%;
}
#l{
	width:30%;
	height:100%;
	float:left;
}
#r{
	width:30%;
	height:100%;
	float:left;
}
#ll{
	width:40%;
	float:left;
}
#rr{
	width:30%;
	float:right;
}
#im{
	width:35%;
	height:100%;
	float:right;
}
</style>
</head>
<div class='bg'></div>
<body style='border:2px solid black;'>
<div id="apDiv17">
  <h2>
    <center style='color:green;font-weight:bold;font-size:30px;'>
     <u> VISA</u>
    </center>
  </h2>
  <p style='font-size:25px'> 
	
<?php
$_SESSION["reg_no"]=1;
	echo "<div  id='c'>";
	if($_SESSION["user"]=='admin')
	{
		if(isset($_SESSION["reg_no"]))
		{
			$r=$_SESSION["reg_no"];
			echo "	<form method='post' action='visa.php' id='ll'>
					<b>Enter registration number to view:</b><br /><input type='number' value='$r' name='reg_no' required='required' />
					<input type='submit' value='open' />
				</form>";
		}
		else
		{
		echo "	<form method='post' action='visa.php' id='ll'>
					<b>Enter registration number to view:</b><br /><input type='number' value='1' name='reg_no' required='required' />
					<input type='submit' value='open' />
				</form>";
		}
	}
	else
	{
		$_POST['reg_no']=$_SESSION["user"];
		//echo "fill all the form";
	}
	if(isset($_POST['reg_no']) || isset($_SESSION["reg_no"]))
	{
		include('db.php');
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}
		if($_SESSION["user"]=='admin')
		{
		echo '	<b>
					<form method="post" action="visa.php" id="rr">
						<input type="radio" checked="checked" value="Accepted" name="st" value="yes" />Accept
						<input type="radio" value="Rejected" name="st" value="no" />Reject
						<input type="submit" value="Set" />
					</form>
				</b>';
		}
		if(isset($_POST['st']))
		{
			$sql="UPDATE user_login SET status='".$_POST['st']."' where reg_no=".$_SESSION['reg_no'];
			if ($conn->query($sql) === TRUE) {}else {echo "Error: " . $sql . "<br>" . $conn->error;}
		}
		if(isset($_POST['reg_no']))
		{
			$_SESSION["reg_no"]=$_POST['reg_no'];
		}	
		$sql="select * from user_login where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				global $image;
				$reg_no=$row["reg_no"];
				$surname=$row["surname"];
				$givname=$row["givname"];
				$sex=$row["sex"];
				if($sex=="M")
				{$sex="Male";}else{$sex="Female";}
				$dob=$row["dob"];
				$address=$row["address"];
				$phno=$row["phno"];
				$eid=$row["eid"];
				$user=$row["user"];
				$password=$row["password"];
				$image=$row["image"];
				$status=$row["status"];
				echo "</div>";
				echo "<div  id='cc'>";
				echo "<table border='2' id='l'>
					<tr>
						<th>Content</th>
						<th>Value</th>
					</tr>
					<tr>
						<td>Register no</td>
						<td>$reg_no</td>
					</tr>
					<tr>
						<td>Surname</td>
						<td>$surname</td>
					</tr>
					<tr>
						<td>Givnname</td>
						<td>$givname</td>
					</tr>
					<tr>
						<td>Sex</td>
						<td>$sex</td>
					</tr>
					<tr>
						<td>Date Of Birth:</td>
						<td>$dob</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>$address</td>
					</tr>
					<tr>
						<td>Phone Number</td>
						<td>$phno</td>
					</tr>
					<tr>
						<td>Email ID</td>
						<td>$eid</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>$user</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>$password</td>
					</tr>
					<tr>
						<td>Status</td>
						<td>$status</td>
					</tr>
				</table>
				";
			}
		}
		echo "<table border='2' id='r'>
		<tr>
			<th>Form</th>
			<th>status</th>
		</tr>";		
		$sql="select * from coe where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>Confirmation Of Enrollment</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>Confirmation Of Enrollment</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from ca where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>Charted Accountant Report</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>Charted Accountant Report</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from bankloan where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>Bank Loan Form </td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>Bank Loan Form </td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from jewel where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>Jewelary form</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>Jewelary form</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from affidavit where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>AFFIDAVITS form</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>AFFIDAVITS form</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from ielts where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>IELTS form</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>IELTS form</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from pass where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>PASSPORT FORM</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>PASSPORT FORM</td>
			<td>Not Submitted</td>
			</tr>";
		}
		$sql="select * from health where reg_no='".$_SESSION['reg_no']."';";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			echo "<tr>
			<td>health form</td>
			<td>Submitted</td>
			</tr>";
		}
		else
		{	
			echo "<tr>
			<td>health form</td>
			<td>Not Submitted</td>
			</tr>";
		}
		echo "</table>";
		echo "<img src='$image' width='180px' height='120px' id='im'/></div>";
		$conn->close();
	}
	?>
  </p>
</div>
<?php
		if(isset($_SESSION["user"]))
		{
			echo "
		<div class='log'>
			<form action='logout.php' method='post' class='login'>
				<input  style='padding:5px 5px 5px 5px' type='submit' value='Logout' name='logout'/><b>";
				echo $_SESSION["user"]."</b>";
		echo "
			</form>
		</div>";
		}
		else if(isset($_SESSION["admin"]))
		{
			echo "
		<div class='log'>
			<form action='logout.php' method='post' class='login'>";
				echo $_SESSION["admin"]."</b>";
		echo "
			</form>
		</div>";
		}
		else
		{
			
			echo $_SESSION["user"];
		}	
?>
<div id="apDiv1"></div>
<div id="apDiv2"></div>
<div id="apDiv3"></div>
<div id="apDiv4">electronic visa processing</div>
<div id="apDiv5"></div>
<?php include('menu2.php'); ?>
<div id="apDiv15"></div>
</body>
</html>