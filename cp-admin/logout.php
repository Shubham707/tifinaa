<?php
session_destroy();
if(isset($_SESSION['id']))
unset($_SESSION['id']); 
header("location:index.php");
?>