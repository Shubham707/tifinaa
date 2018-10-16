<?php 
include'config.php';
include'helper.php';

 $R=$_REQUEST;
 $phone=$_POST['phone'];
 $sql="SELECT * FROM `customers` WHERE cus_mobile='$phone'";
 $query=mysqli_query($db,$sql) or die(mysqli_error());
 $data=mysqli_fetch_assoc($query);
 $total=$data['balance'] + $_POST['amount'];
/*select data */
$data=date('Y-m-d h:i:s');

/*insert transaction*/
if($_POST['payment_method']=='credit card')
{
	$pay='Credit';
}
else{
	$pay='Debit';
}
 echo $tran="INSERT INTO `transaction`( `order_id`, `mobile`, `trans_id`, `amount`, `narration`, `pay_type`, `status`,`created_date`) VALUES ('$_POST[order_id]','$phone','$_POST[transaction_id]','$_POST[amount]','$_POST[description]','$pay','$_POST[response_code]','$data')";
    mysqli_query($db,$tran) or die(mysqli_error());
/*update data*/
 $update="UPDATE `customers` SET `balance`='$total' WHERE cus_mobile='$phone'";
 $upd=mysqli_query($db,$update) or die(mysqli_error()); 
	if($upd)
	{
		ob_start();
		$message="Wallet added successfull";
	    sendSMS($message,$mobile);
		header("Location:profile.php?msg=Wallet Add Successfull".$_POST['amount']);
	}else{
		ob_start();
		$message="Wallet Not added!";
	       sendSMS($message,$mobile);
		header("Location:profile.php?msg=Wallet Not added <br> Error Wallet payment Amount");
		
	}
	?>
<!-- Array ( [return_url] => http://localhost/hamaratiffin/add_wallet.php [order_id] => 465456 [amount] => 100 [currency] => INR [description] => PAY [name] => Itcare [email] => php1@itcarewallet.com [phone] => 8585916263 [address_line_1] => Itcare infotech sec 49 [address_line_2] => NA [city] => Gurgaon [state] => Heryana [zip_code] => 122018 [country] => India [udf1] => NA [udf2] => NA [udf3] => NA [udf4] => NA [udf5] => NA [payment_datetime] => 2018-10-16 11:08:36 [response_message] => Transaction successful [response_code] => 0 [transaction_id] => HTRQ1234 [payment_method] => credit card [hash] => 9BBF46EBE294CE144AD6445632CC01A1FC913C8C67B50431B39233884EAD47CBEDEFEB626F3234968FAF2E04ADF671A2A2F6CF838749C7D99024F6A4BD78991D ) -->