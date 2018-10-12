
<?php 
include'config.php';
session_start();
if(isset($_POST['login_button'])) 
{
	$user_email = trim($_POST['cus_otp']);
	$user_password = trim($_POST['mobile']);
$sql = "SELECT * FROM customers WHERE cus_otp='$user_email' AND cus_mobile='$user_password'";
$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
if($row['cus_mobile']==$user_password){
  
   $_SESSION['user_mobile'] = $row['cus_mobile'];
   header("location:profile.php");
} else {
	header("location:index.php?msg=Otp or mobile does not exist."); 
}
}