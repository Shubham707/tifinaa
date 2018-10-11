<?php

include'../config.php';
//include'../helper.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header("Content-Type: text/html;charset=UTF-8");
$json = file_get_contents('php://input');
$data=json_decode($json,true);  


 $email=$data['email'];
 $mobile=$data['mobile'];
 $address=$data['address'];
 $rand=rand(100000,999999);
 $password=$data['password'];
if($email!='' && $mobile!='' && $address!='' && $password!=''){
	if($mobile && $email && $address && $password){
		$pass=md5($password);
		 $sql="SELECT * FROM customers WHERE cus_mobile='$mobile' AND password='$password'";
		 //$q="UPDATE `customers` SET `cus_otp`='$rand' WHERE  cus_mobile='$mobile'";
		 mysqli_query($db,$q);
		 $query=mysqli_query($db,$sql);
	    $res=mysqli_fetch_assoc($query);
		
	      if($res['cus_mobile']==$mobile){
	      	$message="Otp send successfull:".$rand;
	       //sendSMS($message,$mobile);
			echo json_encode(array('data'=>'Mobile No Already Exits!','status'=>true,));
			}
		  else{
		  	$pass=md5($password);
			 $sql="INSERT INTO `customers`(`cus_address`, `cus_email`, `password`, `cus_mobile`, `cus_otp`) VALUES ('$address','$email','$pass','$mobile','$rand')"; 
		    $query=mysqli_query($db,$sql) or die('database not connect');
		    $message="Otp send successfull:".$rand;
		   //sendSMS($message,$mobile); 
		     if($query > 0){
			echo json_encode(array('data'=>'Data saved successfully!','status'=>true,));
			}
			else{
				echo json_encode(array('data'=>'Customer details did not saved!','status'=>false,));
			}
			
		}

	}
}
else{
	echo json_encode(array('data'=>'Wrong Credential!!','status'=>false,));
}
?>