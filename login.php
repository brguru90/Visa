<?php
session_start();
//setting the default location to home page
if(!isset($_SESSION['location']))
{
	$_SESSION['location']='home.php';
}
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
$sql = "create table login
(
user VARCHAR(20) UNIQUE,
password VARCHAR(20) NOT NULL
);";
$conn->query($sql);
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
$conn->query("insert into login values('admin','12345')");
$conn->query("insert into login values('guru','9611')");
include('initialize.php');
$user=$_POST["user"];
$pwd=$_POST["pwd"];
$flag=0;
//same login script for both admin and user
logining("login",$user,$pwd,"admin");
logining("user_login",$user,$pwd,"user");
function logining($table_name,$user,$pwd,$loginner)
{
	global $flag,$conn;
	if($loginner=="user")
	{
		$sql="select * from $table_name where reg_no='".$user."';";
	}
	else
	{
		$sql="select * from $table_name where user='".$user."';";
	}
	$result=$conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
				$passwd=$row["password"];
				if($pwd===$passwd)
				{
					if($loginner=='admin')
					{
						$user='admin';
					}
					//echo "<script>alert('$user');</script>";
					//if the keep login is checked
					if(isset($_POST["loginkeeping"]))
					{
						setcookie("user",$user, time() + (86400), "/");
					}
					header('Location: '.$_SESSION['location']);
					//header('Location: home.php');
					//echo "<script>history.go(-);</script>";
					$_SESSION["user"]="$user";
				}
				else
				{
					echo "<script>alert('entered password is incorrect');history.go(-1);</script>";
				
				}
		}
		} else {
	  // echo "<script>alert('you have entered invalid user name');history.go(-1);</script>";
	  $flag=1;
	}
}
if($flag==1)
{
	echo "<script>alert('you have entered invalid user name');history.go(-1);</script>";
}

$conn->close();
?> 