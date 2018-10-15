<?php 
include'../config.php';
include'../helper.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header("Content-Type: text/html;charset=UTF-8");
$json = file_get_contents('php://input');
$data=json_decode($json,true);  


if($data['mobile']!='' && $data['address']!='' && $data['name']!='' && $data['email']!='')	
{
	$mobile=$data['mobile'];
	$prod_name=$data['name'];
	$address=$data['address'];
	$email=$data['email'];
	
	 $sql="UPDATE `customers` SET `cus_name`='$prod_name',`cus_address`='$address',`cus_email`='$email' WHERE `cus_mobile`='$mobile'";
	$query=mysqli_query($db,$sql);
	if($query==1){
    echo $arr=json_encode(array('status'=>true,'statuscode'=>200,'data'=>'Profile Updated successfully'));
	}
	else{
		echo $arr=json_encode(array('status'=>false,'statuscode'=>400,'data'=>'Profile is not updated'));
	}
}
else{
	echo $arr=json_encode(array('status'=>false,'statuscode'=>401,'data'=>'wrong credential'));
}
?>