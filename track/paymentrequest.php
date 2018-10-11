<?php 
//$salt = '3f43dbf0689cb8446cbe6b9d99a418e051c3e320'; //Pass your SALT here
//$_POST['api_key'] = 'f14e50fd-82f0-4ce0-bd4e-de924908d4ff'; //Pass your API KEY here

$_POST['api_key']='c2d9681d-0131-47db-a09b-95f02b77a522';
$salt='1fc3ffd2230c56f4804a9ecbea5ad0bad6b4fd1b';
$hash = hashCalculate($salt, $_POST);
function hashCalculate($salt,$input){
	/* Columns used for hash calculation, Donot add or remove values from $hash_columns array */
	$hash_columns = ['address_line_1', 'address_line_2', 'amount', 'api_key', 'city', 'country', 'currency', 'description', 'email', 'mode', 'name', 'order_id', 'phone', 'return_url', 'state', 'udf1', 'udf2', 'udf3', 'udf4', 'udf5', 'zip_code',];
	/*Sort the array before hashing*/
	sort($hash_columns);

	/*Create a | (pipe) separated string of all the $input values which are available in $hash_columns*/
	$hash_data = $salt;
	foreach ($hash_columns as $column) {
		if (isset($input[$column])) {
			if (strlen($input[$column]) > 0) {
				$hash_data .= '|' . trim($input[$column]);
			}
		}
	}
	$hash = strtoupper(hash("sha512", $hash_data));
	
	return $hash;
}
?>
<p>Redirecting...</p>
<form action="https://biz.ipaisaonline.in/v2/paymentrequest" id="payment_form" method="POST">
<input type="hidden" value="<?php echo $hash; ?>"                   name="hash"/>
<input type="hidden" value="<?php echo $_POST['api_key'];?>"        name="api_key"/>
<input type="hidden" value="<?php echo $_POST['return_url']; ?>"    name="return_url"/>
<input type="hidden" value="<?php echo $_POST['mode'];?>"           name="mode"/>
<input type="hidden" value="<?php echo $_POST['order_id'];?>"       name="order_id"/>
<input type="hidden" value="<?php echo $_POST['amount'];?>"         name="amount"/>
<input type="hidden" value="<?php echo $_POST['currency'];?>"       name="currency"/>
<input type="hidden" value="<?php echo $_POST['description'];?>"    name="description"/>
<input type="hidden" value="<?php echo $_POST['name'];?>"           name="name"/>
<input type="hidden" value="<?php echo $_POST['email'];?>"          name="email"/>
<input type="hidden" value="<?php echo $_POST['phone'];?>"          name="phone"/>
<input type="hidden" value="<?php echo $_POST['address_line_1'];?>" name="address_line_1"/>
<input type="hidden" value="<?php echo $_POST['address_line_2'];?>" name="address_line_2"/>
<input type="hidden" value="<?php echo $_POST['city'];?>"           name="city"/>
<input type="hidden" value="<?php echo $_POST['state'];?>"          name="state"/>
<input type="hidden" value="<?php echo $_POST['zip_code'];?>"       name="zip_code"/>
<input type="hidden" value="<?php echo $_POST['country'];?>"        name="country"/>
<input type="hidden" value="<?php echo $_POST['udf1'];?>"           name="udf1"/>
<input type="hidden" value="<?php echo $_POST['udf2'];?>"           name="udf2"/>
<input type="hidden" value="<?php echo $_POST['udf3'];?>"           name="udf3"/>
<input type="hidden" value="<?php echo $_POST['udf4'];?>"           name="udf4"/>
<input type="hidden" value="<?php echo $_POST['udf5'];?>"           name="udf5"/>
<noscript><input type="submit" value="Continue"/></noscript>
</form>
<script>
function formAutoSubmit () {
	var payform = document.getElementById("payment_form");
	payform.submit();
}
window.onload = formAutoSubmit;
</script>