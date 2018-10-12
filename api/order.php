<?php 
include'../config.php';
include'../helper.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header("Content-Type: text/html;charset=UTF-8");
$json = file_get_contents('php://input');
$data=json_decode($json,true);  


if($data['user_id']!='')	
{
	$rand='sku-'.rand('99990,10000');
	$user_id=$data['user_id'];
	$product_id=$data['product_id'];
	$price=$data['price'];
	$total=$data['total'];
	$mobile=$data['mobile'];
	$prod_name=$data['prod_name'];
	$address=$data['address'];
	$arrive_time=$data['arrive_time'];
	
	 $sql="INSERT INTO `order`(`order_product_name`, `order_price`, `order_total`, `order_mobile`, `order_address`, `product_id`,`user_id`,`arrivel_time`,`sku`) VALUES ('$prod_name','$price','$total','$mobile','$address','$product_id','$user_id','$arrive_time','$rand')";
	$query=mysqli_query($db,$sql);
	if($query==1){
    echo $arr=json_encode(array('status'=>true,'statuscode'=>200,'data'=>'Order saved successfully'));
	}
	else{
		echo $arr=json_encode(array('status'=>false,'statuscode'=>400,'data'=>'order is not succesfull'));
	}
}
else{
	echo $arr=json_encode(array('status'=>false,'statuscode'=>400,'data'=>'wrong credential'));
}
?>