<?php
include'../config.php';
$sql="SELECT * FROM `slider`"; 
$query=mysqli_query($db,$sql) or die('database not connect');
if($query)
{
	while($resdata=mysqli_fetch_array($query))
	{
	  $d[]=$resdata;
	}
	$arr=array('status'=>true,'statuscode'=>200,'data'=>$d,);
	
}
else{
		$arr=array('status'=>false,'statuscode'=>400,'data'=>'folder is empty!');
	}

	echo $json_result=json_encode($arr);
?>