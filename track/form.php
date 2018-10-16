<?php
session_start();
include'../config.php';


?>
<div style="display:none;">
<form action="paymentrequest.php" id="payment_form" method="POST">
<input type="text" value="http://localhost/hamaratiffin/add_wallet.php"    name="return_url"/>
<input type="text" value="TEST"           name="mode"/>
<input type="text" value="465456"       name="order_id"/>
<input type="text" value="<?php echo $_POST['balance']?>"         name="amount"/>
<input type="text" value="INR"       name="currency"/>
<input type="text" value="PAY"    name="description"/>
<input type="text" value="Itcare" name="name"/>
<input type="text" value="php1@itcarewallet.com"          name="email"/>
<input type="text" value="<?php echo $_POST['mobile']?>"          name="phone"/>
<input type="text" value="Itcare infotech sec 49" name="address_line_1"/>
<input type="text" value="NA" name="address_line_2"/>
<input type="text" value="Gurgaon"           name="city"/>
<input type="text" value="Heryana"          name="state"/>
<input type="text" value="122018"       name="zip_code"/>
<input type="text" value="India"        name="country"/>
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