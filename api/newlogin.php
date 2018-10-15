<?php 
ini_set("display_errors",1);
include'../config.php';

$urlParams = explode('/', $_SERVER['REQUEST_URI']);

//  Localhost //////
//$functionName = $urlParams[3];
//  Live //////
$functionName = $urlParams[2];

if($functionName=='customerdetail')
{
	customerdetailbymobile();
}
if($functionName=='verifyotp')
{
	verifyotp();
}
if($functionName=='signup')
{
	signup();
}


function signup()
{
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
	header("Content-Type: text/html;charset=UTF-8");
	$json = file_get_contents('php://input');
	$data=json_decode($json);  
	$header=apache_request_headers();

	if(isset($data->mobile) && $data->mobile!='')
	{
		$mobile=$data->mobile;

		$obj=new sqlfunction;
		$req=$obj->customerdetailbymobile($mobile);
		$numrow=$req->num_rows;
		$rand=rand(100000,999999);
		
		if($numrow==0)
		{
			$req=$obj->saveuser($mobile);
				
			if($req)
			{
				$updateotp=$obj->updateotp($mobile,$rand);
				$message="Dear customer, Your verifing otp is ".$rand;
				$sendotp=sendSMS($message,$mobile);
				$arr=array("statuscode"=>200,"message"=>'Your mobile no has been register successfully.');
			}else{
				$arr=array("statuscode"=>400,"message"=>'Error occured while user register!!!');
			}
			
		}else{
			$updateotp=$obj->updateotp($mobile,$rand);
			$message="Dear customer, Your verifing otp is ".$rand;
			$sendotp=sendSMS($message,$mobile);
			$arr=array("statuscode"=>400,"message"=>'User already exist.');
		}

	}else{
		$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
	}

	$jsonresult=json_encode($arr);
	print_r($jsonresult);
}

function customerdetailbymobile()
{
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
	header("Content-Type: text/html;charset=UTF-8");
	$json = file_get_contents('php://input');
	$data=json_decode($json);  
	$header=apache_request_headers();

	if(isset($data->mobile) && $data->mobile!='')
	{
		$mobile=$data->mobile;

		$obj=new sqlfunction;
		$req=$obj->customerdetailbymobile($mobile);
		$numrow=$req->num_rows;
		$row=$req->fetch_assoc();

		if($numrow==1)
		{
			$arr=array("statuscode"=>200,"message"=>'Details has been getting successfully.',"data"=>$row);
		}else{
			$arr=array("statuscode"=>400,"message"=>'Please valid mobile!!!');	
		}
		

	}else{
		$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
	}

	$jsonresult=json_encode($arr);
	print_r($jsonresult);
}

function verifyotp()
{
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
	header("Content-Type: text/html;charset=UTF-8");
	$json = file_get_contents('php://input');
	//print_r($json);die;
	$data=json_decode($json);  

	$header=apache_request_headers();

	if(isset($data->mobile) && $data->mobile!='' && isset($data->otp) && $data->otp!='')
	{
		$mobile=$data->mobile;
		$otp=$data->otp;

		$obj=new sqlfunction;
		$req=$obj->verifyotp($mobile,$otp);
		$numrow=$req->num_rows;
		$row=$req->fetch_assoc();

		if($numrow==1)
		{
			$arr=array("statuscode"=>200,"message"=>'Your Otp has been verified successfully.');
		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid mobile and otp!!!');	
		}
		

	}else{
		$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
	}

	$jsonresult=json_encode($arr);
	print_r($jsonresult);
}


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
}



function sendSMS($message,$mob)
    {
        $url = "http://phonepaysms.com/api/send_http.php";
        $authKey = '2d65ff3336016981a8d4e0464db1d538';
        $senderId = 'ITCARE';
        $route = "B";
        $postData = array(
              'authkey' => $authKey,
              'mobiles' => $mob,
              'message' => $message,
              'sender' => $senderId,
              'route' => $route
          );
       $ch = curl_init();
         curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $postData
                    ));
       $output = curl_exec($ch);

       return $output;

      
}

?>