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
	left: 510px;
	top: 236px;
	width: 924px;
	height: 430px;
	z-index: 8;
}
</style>
</head>
<div class='bg'></div>
<body style='border:2px solid black;'>
<div id="apDiv17">
  <table>
    <tbody>
      <tr>
        <td><img src="images/pic3.bmp" alt=""></td>
        <td style='padding-left:40px'><h2>
          <center style='color:green;font-weight:bold;font-size:40px'>
            WERRIBEE-VICTORIA
          </center>
        </h2></td>
      </tr>
    </tbody>
  </table>
  <p style='font-size:25px'> Werribee is a key horticultural district in Victoria, specialising in   the production and supply of fresh produce to local, interstate and   overseas markets.    The vision for this region to become the world&rsquo;s best is strongly   supported by the government, industry and service organisations.    The local Food Technology Precinct provides the momentum and support for   this region to become the world&rsquo;s number one. </p>
  <p style='font-size:25px'> The features of this success story are achieved through skilful   management of natural resources to sustainability principles, promoting   innovation and adoption of advanced technology.    Skill-based training is conducted and delivered in the context of sound   environmental management and resulting best practice on farms and   properties. </p>
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
<?php include('menu.php'); ?>
<div id="apDiv15"></div>
</body>
</html>