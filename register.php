<?php
include('db.php');
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br />";
}
$conn->close();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
//craete table
$sql = "create table user_login
(
reg_no int PRIMARY KEY  AUTO_INCREMENT,
surname VARCHAR(20) NOT NULL,
givname VARCHAR(20) NOT NULL,
sex VARCHAR(6) NOT NULL,
dob DATE NOT NULL,
address  VARCHAR(200) NOT NULL,
phno DECIMAL(12) NOT NULL,
eid varchar(50)  NOT NULL,
user VARCHAR(10) UNIQUE NOT NULL,
password VARCHAR(10) NOT NULL,
image VARCHAR(100),
status VARCHAR(20) DEFAULT 'pending'
);";
$conn->query($sql);
$conn->query($sql);
$surname=$_POST["surname"];
$givname=$_POST["givname"];
$sex=$_POST["sex"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$date="$year-$month-$day";
$address=$_POST["address"];
$phno=$_POST["phno"];
$eid=$_POST["eid"];
$user=$_POST["user"];
$password=$_POST["pwd1"];
$pwd=$_POST["pwd2"];
if($password!=$pwd)
{
	echo "<script>alert('password mismatch');window.location.assign('login_form.php#toregister');</script>";
}
else
{
$email=$_POST["eid"];
$phno=$_POST["phno"];
$uploaddir = 'img/';//folder for upload
	if(strlen(basename($_FILES['fileToUpload']['name']))>0)
	{
		$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);//fullpath(directory+name)		
	}	
	else
	{
		$uploadfile = $uploaddir ."default.png";
		$default="default";
	}
	$format=pathinfo($uploadfile,PATHINFO_EXTENSION);//getting file extension
	if($format!="jpg" && $format!="jpeg" && $format!="png")//matching for format for calling appropriate function to the format upload
	{
			echo "<script>alert('invalid file format-$format');history.go(-1);</script>";
	}
	else
	{
		
		//$filename=basename( $_FILES["fileToUpload"]["name"]);//just file name	
		//$sql="insert into login values('".$name."','".$user."','".$pwd."','".$email."','".$uploadfile."','".$phno."','deactivated');";
		$sql="insert into user_login (surname,givname,sex,dob,address,phno,eid,user,password,image) values('$surname','$givname','$sex','$date','$address',$phno,'$eid','$user','$pwd','$uploadfile');";
		if ($conn->query($sql) === TRUE) 
		{
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile) || isset($default))
			{
				//go back with exitting iframe via javascript code
				 echo "<script>alert('your account details has submitted your account will e activated within 24 hours');( window.parent || window ).location = 'home.php';</script>";			 
			} 
			else
			{
				echo "<script>alert('Possible file upload attack!\n');history.go(-1);</script>";
			}
		 
		}
		else {echo "<script>alert('enter details incorrectly or repeated!choose other username');history.go(-1);</script>";}
		//else {echo "Error: " . $sql . "<br>" . $conn->error;}
	}
}
$conn->close();
?> 