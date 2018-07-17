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
$sql="select * from coe where reg_no='".$_SESSION['reg_no']."';";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$reg_no=$row["reg_no"];
		$date_of_transfer1=$row["date_of_transfer1"];
		$report_id=$row["report_id"];
		$IFSC=$row["IFSC"];
		$bank_name=$row["bank_name"];
		$bank_location=$row["bank_location"];
		$message_sender_reference=$row["message_sender_reference"];
		$sender_sequence_number=$row["sender_sequence_number"];
		$message_type=$row["message_type"];
		$reciever_address=$row["reciever_address"];
		$non_delivery_warning=$row["non_delivery_warning"];
		$delivery_notification_request=$row["delivery_notification_request"];
		$message_status=$row["message_status"];
		$creater_user_id=$row["creater_user_id"];
		$verifier_user_id=$row["verifier_user_id"];
		$authoriser_user_id=$row["authoriser_user_id"];
		$transaction_reference_number=$row["transaction_reference_number"];
		$bank_operation_code=$row["bank_operation_code"];
		$date_of_transfer2=$row["date_of_transfer2"];
		$currency_type=$row["currency_type"];
		$amount=$row["amount"];
		$ordering_customer_name=$row["ordering_customer_name"];
		$ordering_customer_address=$row["ordering_customer_address"];
		$ordering_instituation_name=$row["ordering_instituation_name"];
		$ordering_instituation_address=$row["ordering_instituation_address"];
		$account_number_of_beneficiaries=$row["account_number_of_beneficiaries"];
		$remitance_info=$row["remitance_info"];
		$sender_to_reciver_info_remitance=$row["sender_to_reciver_info_remitance"];
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
<title>Confirmation Of Enrollment</title>
</head>
<body  bgcolor="aaccda">
<font face="Times New Roman" color=#330033 size=3>
<h3><b><i>Confirmation Of Enrollment</i></b></h3>
<form method="" action="">
<table border="0">
</table>
<table border="0" width="410">
<tr>
<td><b><i>Date Of Transfer:</b></i></td>
<td><?php echo $date_of_transfer1; ?></td>
</tr>
<table border="0" width="520">
<tr>
<td><b><i>Report id:</b></i></td>
<td><input type="text" value="<?php echo $report_id; ?>" name="reportid" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>IFSC:</b></i></td>
<td><input type="text" value="<?php echo $IFSC; ?>" name="ifsc" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Bank Name:</b></i></td>
<td><input type="text" value="<?php echo $bank_name; ?>" name="bname" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Bank Location:</b></i></td>
<td><input type="text" value="<?php echo $bank_location; ?>" name="blocation" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Message Sender's Reference:</b></i></td>
<td><input type="text" value="<?php echo $message_sender_reference; ?>" name="senref" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Sender's Sequence Number:</b></i></td>
<td><input type="text" value="<?php echo $sender_sequence_number; ?>" name="senseqno" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Message Type:</b></i></td>
<td><input type="text" value="<?php echo $message_type; ?>" name="mestype" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Receiver's Address:</b></i></td>
<td><input type="text" value="<?php echo $reciever_address; ?>" name="raddr" id="first name"size="40" /></td>
</tr>
</table>
<TABLE border="0" width=380>
<tr>
<td><b><i>Non-Delivery Warning:</b></i>
<td>
<?php echo $non_delivery_warning; ?>
</td>
</table>
<TABLE border="0" width=340>
<tr>
<td><b><i>Delivery Notification Requested:</b></i>
<td>
<?php echo $delivery_notification_request; ?>
</td>
</table>
<table border="0">
<tr>
<td><b><i>Message status:</b></i></td>
<td><input type="text" value="<?php echo $message_status; ?>" name="messtatus" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Creators User Id:</b></i></td>
<td><input type="text" value="<?php echo $creater_user_id; ?>" name="cuid" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Verifiers User Id:</b></i></td>
<td><input type="text" value="<?php echo $verifier_user_id; ?>" name="vuid" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Authoriser's User Id</b></i></td>
<td><input type="text" value="<?php echo $authoriser_user_id; ?>" name="authid" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Transaction's Reference Number:</b></i></td>
<td><input type="text" value="<?php echo $transaction_reference_number; ?>" name="trno" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Bank Operation Code:</b></i></td>
<td><input type="text" value="<?php echo $bank_operation_code; ?>" name="bopcode" id="first name"size="40" /></td>
</tr>
</table>
<table border="0" width="455">
<tr>
<td><b><i>Date Of Transfer:</b></i></td>
<td><?php echo $date_of_transfer2; ?></td>
</tr>
<table border="0" width="535">
<tr>
<td><b><i>Currency Type:</b></i></td>
<td><input type="text" value="<?php echo $currency_type; ?>" name="currency" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Amount:</b></i></td>
<td><input type="text" value="<?php echo $amount; ?>" name="amount" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Ordering Customer Name:</b></i></td>
<td><input type="text" value="<?php echo $ordering_customer_name; ?>" name="cusname" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Ordering Customer Address:</b></i></td>
<td><input type="text" value="<?php echo $ordering_customer_address; ?>" name="cusaddr" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Ordering Institution Name:</b></i></td>
<td><input type="text" value="<?php echo $ordering_instituation_name; ?>" name="instname" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Ordering Institution Address:</b></i></td>
<td><input type="text" value="<?php echo $ordering_instituation_address; ?>" name="instaddr" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Account Number Of Beneficiaries:</b></i></td>
<td><input type="text" value="<?php echo $account_number_of_beneficiaries; ?>55655" name="accbenef" id="first name"size="40" /></td>
</tr>
<tr>
<td><b><i>Remitance Info:</b></i></td>
<td><input type="text" value="<?php echo $remitance_info; ?> name="remiinfo" id="first name"size="40" /></td>
</tr>
</table>
<table border="0" width="585">
<tr>
<td><b><i>Sender To Receiver Info Remitance:</b></i></td>
<td><TEXTAREA NAME="strinfo" COLS=40 ROWS=6><?php echo $sender_to_reciver_info_remitance; ?></TEXTAREA></td>
</tr>
</table>
<form><center>
<b><i><input type=submit   value="submit" size="10">
</form>
</body>
</html>