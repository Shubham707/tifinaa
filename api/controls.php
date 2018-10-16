<?php
ini_set("display_errors",1);
include'../config.php';

class sqlfunction
{
	function verifyotp($mobile,$otp)
	{
		try {
				$sql="select * from customers where cus_mobile='$mobile' and cus_otp='$otp'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function getcategory()
	{
		try {
				$sql="select * from cateogry where status='1'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function customerdetailbymobile($mobile)
	{
		try {
				$sql="select * from customers where cus_mobile='$mobile'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function getbalanceBymobile($mobile)
	{
		try {
				$sql="select balance,superbalance from customers where cus_mobile='$mobile'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function getsupercashbytype($type)
	{
		try {
				$sql="select * from supercash_mgmt where type='$type'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function getproductsbycat($catgory_id)
	{
		try { 
				$sql="select * from thali where cat_id='$catgory_id' and status='1'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function saveuser($mobile)
	{
		try {
				$sql="insert into customers set cus_mobile='$mobile'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function updateotp($mobile,$otp)
	{
		try {
				$sql="update customers set cus_otp='$otp' where cus_mobile='$mobile'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function saveorder($mobile,$address,$total_product,$total_amount,$country,$state,$city,$pincode,$delivery_time)
	{
		try {
				$date=date('Y-m-d h:i:s');
				$order_no='odr'.rand('0000000','9999999999');
				$sql="insert into orders
				(user_mobile, address,total_product, total_amount, country, state,city, pincode, delivery_time, created_date,order_no) VALUES 
				('$mobile','$address','$total_product','$total_amount','$country','$state','$city','$pincode','delivery_time','$date',order_no)";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
				$id=$mysqli->insert_id;
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $id;
			$conn->close();
	}

	function saveorderdetails($product_id,$qty,$amount,$total_amount,$discount,$order_id)
	{
		try {
				$date=date('Y-m-d h:i:s');
				$sql="insert into orders_detail(order_id, product_id,qty, amount, total_amount, discount) VALUES ('$order_id', '$product_id','$qty', '$amount', '$total_amount', '$discount')";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
				$id=$mysqli->insert_id;
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $id;
			$conn->close();
	}

	function updatefcmtoken($mobile,$token)
	{
		try {
				$sql="update customers set fcm_token='$token' where cus_mobile='$mobile'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function updatetransaction($id,$trans_id,$status)
	{
		try {
				$sql="update transaction set trans_id='$trans_id',status='$status' where id='$id'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
			$conn->close();
	}

	function savetransaction($mobile,$order_id,$amount,$narration,$pay_type,$status)
	{
		try {
				$date=date('Y-m-d h:i:s');
				$sql="insert into transaction set order_id='$order_id',mobile='$mobile',amount='$amount',narration='$narration',pay_type='$pay_type',status='$status',created_date='$date'";
				$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
				$query = $mysqli->query($sql);
                $id=$mysqli->insert_id;      
				
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $id;
			$conn->close();
	}
}
?>