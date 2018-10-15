<?php
session_start();
include'../config.php';

$R=$_REQUEST;
$mobile=$_SESSION['user_mobile'];
$sql="SELECT * FROM customers WHERE cus_mobile='$mobile'";
$query=mysqli_query($db,$sql)or die('not connected!');

if(){

    
}else{

}
?>
<div style="display:none;">
<form action="paymentrequest.php" id="payment_form" method="POST">
<input type="text" value="thank-you.php"    name="return_url"/>
<input type="text" value="LIVE"           name="mode"/>
<input type="text" value="465456"       name="order_id"/>
<input type="text" value="<?php echo $R['total_amount']?>"         name="amount"/>
<input type="text" value="INR"       name="currency"/>
<input type="text" value="PAY"    name="description"/>
<input type="text" value="<?php echo $R['firstname'].''.$R['lastname'];?>" name="name"/>
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