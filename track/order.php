<?php
ob_start();
session_start();
include'../config.php';

$mobile=$_POST['mobile'];
$sql1="SELECT * FROM `customers` WHERE cus_mobile='$mobile'";
$query1=mysqli_query($db,$sql1)or die('not connected!');
$res=mysqli_fetch_assoc($query1);
 $balance=$res['balance'];
 $super=$res['superbalance'];


$mag="SELECT * FROM `supercash_mgmt` WHERE type='payment'";
$mangs=mysqli_query($db,$mag)or die('not connected!');
$val=mysqli_fetch_assoc($mangs);
$amount=$val['amount'];
$total=$_POST['total_amount'];

if($balance > $total){
	if($amount!= 0){
		 $result=$balance - $total + $amount;
		 $supertot=$super - $amount;
		 $sql2="UPDATE `customers` SET `balance`='$result',`superbalance`='$supertot' WHERE  cus_mobile='$mobile'";
	     $query2=mysqli_query($db,$sql2) or die('not connected!');
		}
		else{
			$result=$balance - $total;
			$sql2="UPDATE `customers` SET `balance`='$result' WHERE  cus_mobile='$mobile'";
	     $query2=mysqli_query($db,$sql2) or die('not connected!');
		}
			$R=$_REQUEST;
			$name=$R['firstname'];
			$randomNumber='ord-'.mt_srand(9999999,1000000);


			 /*$sql2="UPDATE `customers` SET `balance`='$result' WHERE  cus_mobile='$mobile'";
			 $query2=mysqli_query($db,$sql2) or die('not connected!');*/
			 $sql="INSERT INTO `order`(`order_product_name`, `order_total`, `order_mobile`, `name`,`order_address`, `quantity`, `arrivel_time`, `country`, `state`, `city`, `zipcode`,`user_id`,`tracking`) VALUES ('$R[title]','$total','$R[mobile]','$name','$R[address]','$R[quantity]','$R[arrivel_time]','$R[country]','$R[state]','$R[city]','$R[zipcode]','$R[user_id]','$randomNumber')";
			    $query=mysqli_query($db,$sql) or die('not connected!');
     foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                 
                     unset($_SESSION["shopping_cart"][$keys]); 
                    header("location:../thank-you.php?msg=Payment Successfull!");   
           }
	    
	    
	
}
else
{
	 header("location:../payment.php?msg=Payment Wallet Is Not Sufficient!<br>Please Add Wallet Balance!");
}



/*Array ( [mobile] => 8585916263 [firstname] => Shubham [email] => pv16061995@gmail.com [arrivel_time] => 04:13 PM [quantity] => 2 [total_amount] => 140.00 [title] => Basic Thali [user_id] => 201 [country] => India [state] => Maharashtra [city] => Kolhapur [zipcode] => 206001 [address] => Dwarka Mor [submit] => Place Order )*/