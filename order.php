<?php 
include 'helper.php';
include 'config.php';
if(isset($_REQUEST['mobile']))
{
	
	$rand=rand(454454,324565);
	$mob=$_REQUEST['mobile'];
	$message='New user send otp varify: '.$rand;
	 $sql="INSERT INTO `customers`(`cus_mobile`, `cus_otp`) VALUES ('$mob','$rand')";
	 $query=mysqli_query($db, $sql) or die(mysqli_error());
	 if($query==1)
	 {
	 	sendSMS($message,$mob);
	 	echo 'success';
	 }
	 else{
	 	echo "error";
	 }
}
if(isset($_REQUEST['cus_otp']))
{
	$otp=$_REQUEST['cus_otp'];
	 $sql="UPDATE `customers` SET `otp_status`='1' WHERE `cus_otp`='$otp'";
	 $query=mysqli_query($db, $sql) or die(mysqli_error());
	 if(mysqli_num_rows($query) > 0)
	 {
	 	//sendSMS($message,$mob);
	 	echo $query;
	 }
	 else{
	 	echo "error";
	 }
}
if($_REQUEST['otp_no'])
{
	//Array ( [fname] => dsfdsfdsf [email] => pv16061995@gmail.com [address] => Dwarka Mor [city] => Delhi [state] => Andaman and Nicobar Islands [country] => India [zipcode] => 206001 [special] => 2 [basic] => 2 [medium] => 2 [booking_date] => 2018-10-12 [booking_time] => 03:23 [otp_no] => 392106 )
	$R=$_REQUEST;
	 $sql1="UPDATE `customers` SET `cus_name`='$R[fname]',`cus_address`='$R[address]',`cus_email`='$R[email]',`cus_order`='1',`spacial`='$R[special]',`medium`='$R[medium]',`basic`='$R[basic]',`cus_date`='$R[booking_date]',`booking_time`='$R[booking_time]',`country`='$R[country]',`state`='$R[state]',`city`='$R[city]' WHERE cus_otp='$R[otp_no]'";
	$query1=mysqli_query($db,$sql1) or die('database not connected!');
	if($query1)
	{
		header('location:index.php?msg=Order Send Successfull');
	}
	else{
		header('location:index.php?msg=Order Is Not Send');
	}
}
if($_REQUEST['send'])
{
	 //Array ( [name] => Shubham Verma [email] => pv16061995@gmail.com [phone] => 9457120206 [message] => demo [send] => Send Message )
	  $admin_email = "noreply@gmail.com";
	  $email = $_REQUEST['email'];
	  $name = $_REQUEST['name'];
	   $subject = $_REQUEST['subject'];
	  $subject = $_REQUEST['phone'];
	  $comment = $_REQUEST['message'].'<br>Thank you for contacting us!'.$name;
	  
	  //send email
	  $query= mail($admin_email, "$subject", $comment, "From:" . $email);
	  
		if($query)
		{
			header('location:contact-us.php?msg=Message Send Successfull');
		}
		else{
			header('location:contact-us?error=Message Is Not Send');
		}
}
?>