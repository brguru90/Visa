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
$dot1=$_POST["dot1"];
$mot1=$_POST["mot1"];
$yot1=$_POST["yot1"];
$date_of_transfer1="$yot1-$mot1-$dot1";
$report_id=$_POST["reportid"];
$IFSC=$_POST["ifsc"];
$bank_name=$_POST["bname"];
$bank_location=$_POST["blocation"];
$message_sender_reference=$_POST["senref"];
$sender_sequence_number=$_POST["senseqno"];
$message_type=$_POST["mestype"];
$reciever_address=$_POST["raddr"];
$non_delivery_warning=$_POST["r1"];
$delivery_notification_request=$_POST["r2"];
$message_status=$_POST["messtatus"];
$creater_user_id=$_POST["cuid"];
$verifier_user_id=$_POST["vuid"];
$authoriser_user_id=$_POST["authid"];
$transaction_reference_number=$_POST["trno"];
$bank_operation_code=$_POST["bopcode"];
$dot2=$_POST["dot2"];
$mot2=$_POST["mot2"];
$yot2=$_POST["yot2"];
$date_of_transfer2="$yot1-$mot2-$dot2";
$currency_type=$_POST["currency"];
$amount=$_POST["amount"];
$ordering_customer_name=$_POST["cusname"];
$ordering_customer_address=$_POST["cusaddr"];
$ordering_instituation_name=$_POST["instname"];
$ordering_instituation_address=$_POST["instaddr"];
$account_number_of_beneficiaries=$_POST["accbenef"];
$remitance_info=$_POST["remiinfo"];
$sender_to_reciver_info_remitance=$_POST["strinfo"];
$sql="insert into coe values($reg_no,'$date_of_transfer1','$report_id','$IFSC','$bank_name','$bank_location','$message_sender_reference','$sender_sequence_number','$message_type','$reciever_address','$non_delivery_warning','$delivery_notification_request','$message_status','$creater_user_id','$verifier_user_id','$authoriser_user_id','$transaction_reference_number','$bank_operation_code','$date_of_transfer2','$currency_type','$amount','$ordering_customer_name','$ordering_customer_address','$ordering_instituation_name','$ordering_instituation_address','$account_number_of_beneficiaries','$remitance_info','$sender_to_reciver_info_remitance')";
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