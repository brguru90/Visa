<?php include('log_details.php');?>
<html>
<head>
<title>Electronic VISA Processing</title>
<link href="style.css" type="text/css" rel="stylesheet" media="all">
<link href="style2.css" type="text/css" rel="stylesheet" media="all">
<link href="fonts/gurufonts.css" type="text/css" rel="stylesheet" media="all">
<script src="api/jquery.js"></script>
<script src="js.js"></script>
<style type="text/css">
#
</style>
</head>
<div class='bg'></div>
<body style='border:2px solid black;'>
<div id="apDiv16">Course Offered</div>
<div id="apDiv17">Certificate III in Horticulture</div>
<div id="apDiv18">
  <p> As listed on the Victorian Government&rsquo;s Skills in Demand List.
  </p>
  <h4>
    <center>
      <strong style='color:red'>Certificate III in Horticulture*</strong>
    </center>
  </h4>
  <strong>
  <p> (Production and Nursery) with customisation to vegetable production,   fruit production and viticulture.  A two semester full-time course with   relevant industry experience. </p>
</strong></div>
<div id="apDiv19"> Diploma of Horticulture</div>
<div id="apDiv20">
  <p> *As listed on the Victorian Government&rsquo;s Skills in Demand List. </p>
  <h4>
    <center>
      <strong style='color:red'>Diploma of Horticulture</strong>
    </center>
  </h4>
  <strong>
  <p> (Production and Nursery) with customisation to vegetable production,   fruit production and viticulture.  A two year full-time course that   includes a joint Certificate III qualification. </p>
</strong></div>
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