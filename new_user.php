<?php 
session_start();
	if (isset($_COOKIE['user']))
	{
		$_SESSION['user']=$_COOKIE['user'];
	}
	if (isset($_SESSION['user']))
	{
		header('Location:home.php');
	}
?>
<!DOCTYPE html>
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
	left: 377px;
	top: 32px;
	width: 951px;
	height: 765px;
	z-index: 1;
	border: 2px solid #CCC;
	background-color: #FFF;
	opacity: 0.8;
}
#apDiv2 {
	position: absolute;
	left: 672px;
	top: 262px;
	width: 148px;
	height: 54px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 836px;
	top: 264px;
	width: 300px;
	height: 54px;
	z-index: 3;
}
#apDiv4 {
	position: absolute;
	left: 672px;
	top: 360px;
	width: 148px;
	height: 54px;
	z-index: 4;
}
#apDiv5 {
	position: absolute;
	left: 834px;
	top: 364px;
	width: 300px;
	height: 54px;
	z-index: 5;
}
#apDiv6 {
	position: absolute;
	left: 924px;
	top: 707px;
	width: 297px;
	}
#apDiv2,#apDiv4 {
	text-align:left;
	padding-top:12px;
	color:blue;
	font-family:guru11;
	//font-weight:bold;
	font-size:22px;
	font-stretch:narrow;
}
input[type='text'],input[type='password']{
	font-size:18px;
	padding-left:6px;
	padding-right:6px;
}
input[type='submit']{
	padding-left:6px;
	padding-right:6px;
	font-family:guru;
	height: 60px;
	z-index: 9;
	font-size: 25px;
	background: #4FC1E9 none repeat scroll 0% 0%;
	color: white;
	text-align: center;
	border: medium none;
	outline: medium none;
	margin-bottom: 0.1em;
	margin-top: 0.1em;
	transition: all 0.5s ease 0s;

}
#apDiv7 {
	position: absolute;
	left: 704px;
	top: 427px;
	width: 423px;
	height: 40px;
	z-index: 7;
}
#apDiv8 {
	position: absolute;
	left: 1046px;
	top: 478px;
	width: 160px;
	height: 52px;
	z-index: 8;
	border: solid 2px silver;
	border-radius: 100%;
	text-align: center;
	font-size: 32px;
	padding-top: 10px;
	background-color: #0F3;
	color:red;
}
#apDiv8 * {
	text-decoration:none;
	color:red;
}
#apDiv1{opacity:1}
</style>
</head>
<div class='bg' id="bg0"></div>
<body>
  <div id="apDiv1"><iframe src="new_user.html" style='width:100%;height:100%'></iframe></div>
</body>
</html>