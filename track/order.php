<?php
ob_start();
session_start();
include'../config.php';
include'../helper.php';
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

if($balance > $total)
{
	if($amount!= 0){
		 $result=$balance - $total + $amount;
		 $supertot=$super - $amount;
		 $sql2="UPDATE `customers` SET `balance`='$result',`superbalance`='$supertot' WHERE  cus_mobile='$mobile'";
	     $query2=mysqli_query($db,$sql2) or die('not connected!');
		}
		else{
			$result=$balance - $total;
			$sql2="UPDATE `customers` SET `balance`='$result' WHERE  cus_mobile='$mobile'";
	     $query2=mysqli_query($db	,$sql2) or die('not connected!');
		}
			$R=$_REQUEST;
			$randomNumber='ord-'.rand(9999999,1000000);
		
		    foreach($_SESSION["shopping_cart"] as $keys => $values)  
            {
            	echo $details="INSERT INTO `orders_detail`(`order_id`, `product_id`, `qty`, `amount`, `total_amount`, `discount`) VALUES ('$randomNumber','$values[item_id]','$values[item_quantity]','$values[item_price]','$values[item_price]','$values[item_price]')";
				mysqli_query($db,$details) or die('details not connected!');
            }
		   $count=count(explode(",",$R['title']));

			$name=$R['firstname'];
			
			 $sql="INSERT INTO `orders`(`user_mobile`, `address`, `total_amount`, `country`, `state`, `city`, `pincode`, `total_product`, `delivery_time`,`order_no`) VALUES ('$R[mobile]','$R[address]','$R[total_amount]','$R[country]','$R[state]','$R[city]','$R[zipcode]','$count','$R[arrivel_time]','$randomNumber')"; 
			    $query=mysqli_query($db,$sql) or die(' order not connected!');
			    $message="Payment Successfull! <br> Order No Please Track:".$randomNumber;
	                sendSMS($message,$mobile);
		          foreach($_SESSION["shopping_cart"] as $keys => $values)  
		           {  
		                     unset($_SESSION["shopping_cart"][$keys]); 
		                    header("location:../thank-you.php?msg=Payment Successfull!".$randomNumber);
		           }
}
else
{
	 header("location:../payment.php?msg=Payment Wallet Is Not Sufficient!<br>Please Add Wallet Balance!");
}



/*Array ( [mobile] => 8585916263 [firstname] => Shubham [email] => pv16061995@gmail.com [arrivel_time] => 04:13 PM [quantity] => 2 [total_amount] => 140.00 [title] => Basic Thali [user_id] => 201 [country] => India [state] => Maharashtra [city] => Kolhapur [zipcode] => 206001 [address] => Dwarka Mor [submit] => Place Order )




 /*$sql2="UPDATE `customers` SET `balance`='$result' WHERE  cus_mobile='$mobile'";
			 $query2=mysqli_query($db,$sql2) or die('not connected!');
$sql="INSERT INTO `order`(`order_product_name`, `order_total`, `order_mobile`, `name`,`order_address`, `quantity`, `arrivel_time`, `country`, `state`, `city`, `zipcode`,`user_id`,`tracking`) VALUES ('$R[title]','$total','$R[mobile]','$name','$R[address]','$R[quantity]','$R[arrivel_time]','$R[country]','$R[state]','$R[city]','$R[zipcode]','$R[user_id]','$randomNumber')";
*/
