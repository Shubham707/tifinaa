<?php
session_start();
include '../config.php';
if($_REQUEST['submit'])
{
   $name=$_POST['username'];
   $pass=md5($_POST['password']);
  echo $sql="SELECT * FROM `admin` WHERE name='$name' AND password='$pass'";
  $query=mysqli_query($db,$sql) or die('database not connect');
  $row = mysqli_fetch_array($query);
  if(is_array($row)) 
  {
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['name'];
    $_SESSION["admin"] = 'Admin';
    $_SESSION["admin_in"] = true;
    header('location:dashboard.php');
  } else {
    header('location:index.php?msg=Invalid Username or Password!');
  }
}
?>