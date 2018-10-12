	<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header("Content-Type: text/html;charset=UTF-8");
$json = file_get_contents('php://input');
//print_r($json);die;
$data=json_decode($json,true);  

$header=apache_request_headers();
include'../config.php';
$email=$data['mobile'];
$password=$data['password'];
if($email!='' && $password!='')
{
	if($email && $password)
	{
		$pass=md5($password);
	    $sql="SELECT `cus_id`,`cus_name`,`cus_address`,`cus_email`,`password`,`cus_mobile` FROM `customers` WHERE cus_mobile='$email' AND password='$pass'"; 
		$query=mysqli_query($db,$sql) or die('database not connect');
		$data=mysqli_fetch_assoc($query);
		$count = mysqli_num_rows($query);
		if($count==1){
			echo json_encode(array('status'=>true, 'statuscode'=>'200','data'=>$data,'message'=>'success'));
		}
		else{

			$dt=array("cus_id"=>"","cus_name"=>"","cus_address"=>"","cus_email"=>"","password"=>"","cus_mobile"=>"",);

			echo json_encode(array('status'=>false,'statuscode'=>'400','data'=>$dt,'message'=>'email and password did not match!'));
		}
	}
	else {
	echo json_encode(array('status'=>false,'data'=>'Wrong Credential!',));
		
	}
}
else{
	echo json_encode(array('status'=>false,'data'=>'Wrong Credential!',));
}
?>