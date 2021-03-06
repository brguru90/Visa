<?php include('log_details.php');?>
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
	top: 234px;
	width: 926px;
	height: 436px;
	z-index: 8;
}
</style>
</head>
<div class='bg'></div>
<body style='border:2px solid black;'>
<div id="apDiv17">
<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "create table ca
(
reg_no int UNIQUE,
name_of_consultent VARCHAR(20) NOT NULL,
consultent_register_no INT NOT NULL,
address VARCHAR(200) NOT NULL,
description_of_income1 VARCHAR(100) NOT NULL,
description_of_income2 VARCHAR(100) NOT NULL,
description_of_income3 VARCHAR(100) NOT NULL,
description_of_income4 VARCHAR(100) NOT NULL,
description_of_income5 VARCHAR(100) NOT NULL,
description_of_income6 VARCHAR(100) NOT NULL,
description_of_income7 VARCHAR(100) NOT NULL,
description_of_income8 VARCHAR(100) NOT NULL,
income_value1 VARCHAR(20) NOT NULL,
income_value2 VARCHAR(20) NOT NULL,
income_value3 VARCHAR(20) NOT NULL,
income_value4 VARCHAR(20) NOT NULL,
income_value5 VARCHAR(20) NOT NULL,
income_value6 VARCHAR(20) NOT NULL,
income_value7 VARCHAR(20) NOT NULL,
income_value8 VARCHAR(20) NOT NULL
);";
$conn->query($sql);
/*
	if ($conn->query($sql) === TRUE) {}else {echo "Error: " . $sql . "<br>" . $conn->error;}
*/
if(preg_match("/admin/i",$_SESSION["user"]))
{
	//header('Location: COE_view.php');
	echo "<script>( window.parent || window ).location = 'CA_view.php';</script>";
}
$sql="select * from ca where reg_no='".$_SESSION['user']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	echo "<script>alert('form aleready submitted');( window.parent || window ).location = 'visa.php';;</script>";
}
else
{
	echo '<iframe src="ca.html" style="width:100%;height:100%"></iframe>';
}
$conn->close();
?>
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