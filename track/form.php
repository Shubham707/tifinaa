<?php
//print_r($_POST);
// die;
include'../config.php';
//Array ( [mobile] => 324324324 [firstname] => Shubham [lastname] => Verma [email] => pv16061995@gmail.com [arrivel_time] => 06:30 PM [quantity] => 10,6 [total_amount] => 1,360.00 [title] => Basic Thali,Regular Thali [country] => India [state] => Andaman and Nicobar Islands [city] => Delhi [zipcode] => 206001 [address] => Dwarka Mor [submit] => Place Order )
$R=$_REQUEST;
$name=$R['firstname'].''.$R['lastname'];
  echo $sql="INSERT INTO `order`(`order_product_name`, `order_total`, `order_mobile`, `name`,`order_address`, `quantity`, `arrivel_time`, `country`, `state`, `city`, `zipcode`,`cash`) VALUES ('$R[title]','$R[total_amount]','$R[mobile]','$name','$R[address]','$R[quantity]','$R[arrivel_time]','$R[country]','$R[state]','$R[city]','$R[zipcode]','$R[cash]')"; die;
    $query=mysqli_query($db,$sql)or die('not connected!');
	if($query==1){
		ob_start();
		header('location:../thank-you.php');
	}
	else{ 
		ob_start();
		header('location:../transactionfail.php');
	}


 
// if($_POST['cash']=='online'){
/* $R=$_REQUEST;
$name=$R['firstname'].''.$R['lastname'];
 $sql="INSERT INTO `order`(`order_product_name`, `order_total`, `order_mobile`, `name`,`order_address`, `quantity`, `arrivel_time`, `country`, `state`, `city`, `zipcode`,`cash`) VALUES ('$R[product_name]','$R[total]','$R[mobile]','$name','$R[address]','$R[quantity]','$R[arrivel_time]','$R[country]','$R[state]','$R[city]','$R[zipcode]','$R[cash]')";
    $query=mysqli_query($db,$sql) or die('not connected!');*/
	  ?>
<div style="display:none;">
<form action="paymentrequest.php" id="payment_form" method="POST">
<input type="text" value="thank-you.php"    name="return_url"/>
<input type="text" value="LIVE"           name="mode"/>
<input type="text" value="465456"       name="order_id"/>
<input type="text" value="<?php echo $_POST['total']?>"         name="amount"/>
<input type="text" value="INR"       name="currency"/>
<input type="text" value="PAY"    name="description"/>
<input type="text" value="<?php echo $_POST['firstname'].''.$_POST['lastname'];?>" name="name"/>
<input type="text" value="<?php echo $_POST['email']?>"          name="email"/>
<input type="text" value="<?php echo $_POST['mobile']?>"          name="phone"/>
<input type="text" value="<?php echo $_POST['address']?>" name="address_line_1"/>
<input type="text" value="NA" name="address_line_2"/>
<input type="text" value="<?php echo $_POST['city']?>"           name="city"/>
<input type="text" value="<?php echo $_POST['state']?>"          name="state"/>
<input type="text" value="<?php echo $_POST['zipcode']?>"       name="zip_code"/>
<input type="text" value="<?php echo $_POST['country']?>"        name="country"/>
<input type="text" value="NA"           name="udf1"/>
<input type="text" value="NA"           name="udf2"/>
<input type="text" value="NA"           name="udf3"/>
<input type="text" value="NA"           name="udf4"/>
<input type="text" value="NA"           name="udf5"/>
<input type="submit" value="Continue"/>
</form>
</div>

<script>
function formAutoSubmit () {
	var payform = document.getElementById("payment_form");
	payform.submit();
}
window.onload = formAutoSubmit;
</script>
<?php// }?>