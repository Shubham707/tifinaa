<?php 
ini_set("display_errors",1);
include'controls.php';

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
	if($functionName=='products')
	{
		getproductsbycat();
	}
	if($functionName=='category')
	{
		category();
	}
	if($functionName=='getsupercash')
	{
		getsupercash();
	}
	if($functionName=='getbalance')
	{
		getbalanceBymobile();
	}
	if($functionName=='saveorder')
	{
		saveorder();
	}
	if($functionName=='updatefcmtoken')
	{
		updatefcmtoken();
	}
	if($functionName=='savetransaction')
	{
		savetransaction();
	}

	if($functionName=='updatetransaction')
	{
		updatetransaction();
	}

	function updatetransaction()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();
		echo "test";
		if(isset($data->id) && $data->id!='' && isset($data->trans_id) && $data->trans_id!='' && isset($data->status) && $data->status!='')
		{
			$trans_id=$data->trans_id;
			$id=$data->id;
			$status=$data->status;

			$obj=new sqlfunction;
			$res=$obj->updatetransaction($id,$trans_id,$status);

			if($res)
			{
				$arr=array("statuscode"=>200,"message"=>'Transaction has been update successfully.');
			}else{
				$arr=array("statuscode"=>400,"message"=>'Error occured while updateing detail!!!');
			}
		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function savetransaction()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		if(isset($data->mobile) && $data->mobile!='' && isset($data->order_id) && $data->order_id!='' && isset($data->amount) && $data->amount!='' && isset($data->narration) && $data->narration!='' && isset($data->pay_type) && $data->pay_type!='' && isset($data->status) && $data->status!='')
		{
			$mobile=$data->mobile;
			$order_id=$data->order_id;
			$amount=$data->amount;
			$narration=$data->narration;
			$pay_type=$data->pay_type;
			$status=$data->status;

			$obj=new sqlfunction;
			$res=$obj->savetransaction($mobile,$order_id,$amount,$narration,$pay_type,$status);

			if($res)
			{
				$arr=array("statuscode"=>200,"message"=>'Transaction has been saved successfully.',"id"=>$res);
			}else{
				$arr=array("statuscode"=>400,"message"=>'Error occured while saving detail!!!');
			}
		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function updatefcmtoken()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		if(isset($data->mobile) && $data->mobile!='' && isset($data->token) && $data->token!='')
		{
			$mobile=$data->mobile;
			$token=$data->token;

			$obj=new sqlfunction;
			$res=$obj->updatefcmtoken($mobile,$token);

			if($res)
			{
				$arr=array("statuscode"=>200,"message"=>'Details has been update successfully.');
			}else{
				$arr=array("statuscode"=>400,"message"=>'Error occured while updating token detail!!!');
			}
		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function saveorder()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		if(isset($data->mobile) && $data->mobile!='' && isset($data->address) && $data->address!='' && isset($data->total_product) && $data->total_product!='' && isset($data->total_amount) && $data->total_amount!='' && isset($data->country) && $data->country!='' && isset($data->state) && $data->state!='' && isset($data->city) && $data->city!='' && isset($data->pincode) && $data->pincode!='' && isset($data->delivery_time) && $data->delivery_time!='')
		{
			$mobile=$data->mobile;
			$address=$data->address;
			$total_product=$data->total_product;
			$total_amount=$data->total_amount;
			$country=$data->country;
			$state=$data->state;
			$city=$data->city;
			$pincode=$data->pincode;
			$delivery_time=$data->delivery_time;
			$orderdetail=$data->orderdetail;

			if(count($orderdetail)==$total_product)
			{

				$obj=new sqlfunction;
				$order_id=$obj->saveorder($mobile,$address,$total_product,$total_amount,$country,$state,$city,$pincode,$delivery_time);
				//$order_id=1;

				foreach ($orderdetail as $odrdetail) {
					$product_id=$odrdetail->product_id;
					$qty=$odrdetail->qty;
					$amount=$odrdetail->amount;
					$total_amount=$odrdetail->total_amount;
					$discount=$odrdetail->discount;

					$orderdetail[]=$obj->saveorderdetails($product_id,$qty,$amount,$total_amount,$discount,$order_id);
				}

				//print_r($orderdetail);


				if(count($orderdetail)>=1)
				{
					$arr=array("statuscode"=>200,"message"=>'Details has been saved successfully.');
				}else{
					$arr=array("statuscode"=>400,"message"=>'Error occured while saving detail.Please try after sometimes!!!');	
				}
			}else{
				$arr=array("statuscode"=>400,"message"=>'Please send valid order details!!!');	
			}
			

		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function getbalanceBymobile()
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
			$req=$obj->getbalanceBymobile($mobile);
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

	function getsupercash()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		if(isset($data->type) && $data->type!='')
		{
			$type=$data->type;
			$obj=new sqlfunction;
			$req=$obj->getsupercashbytype($type);
			$numrow=$req->num_rows;			

			if($numrow>=1)
			{
				while($row=$req->fetch_assoc()){ $resultset=$row;	}
				$arr=array("statuscode"=>200,"message"=>'Details has been getting successfully.',"data"=>$resultset);
			}else{
				$arr=array("statuscode"=>400,"message"=>'Please send valid Type!!!');	
			}
			

		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function category()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		$obj=new sqlfunction;
		$req=$obj->getcategory();
		$numrow=$req->num_rows;
		while($row=$req->fetch_assoc())
		{
			$resultset[]=$row;
		}

		if($numrow>=1)
		{
			$arr=array("statuscode"=>200,"message"=>'Details has been getting successfully.',"data"=>$resultset);
		}else{
			$arr=array("statuscode"=>400,"message"=>'Error occured while getting detail!!!');	
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
	}

	function getproductsbycat()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
		header("Content-Type: text/html;charset=UTF-8");
		$json = file_get_contents('php://input');
		$data=json_decode($json);  
		$header=apache_request_headers();

		if(isset($data->category_id) && $data->category_id!='')
		{
			$catgory_id=$data->category_id;
			$obj=new sqlfunction;
			$req=$obj->getproductsbycat($catgory_id);
			$numrow=$req->num_rows;
			while($row=$req->fetch_assoc())
			{
				$resultset[]=$row;
			}

			if($numrow>=1)
			{
				$arr=array("statuscode"=>200,"message"=>'Details has been getting successfully.',"data"=>$resultset);
			}else{
				$arr=array("statuscode"=>400,"message"=>'Please send valid category id!!!');	
			}
			

		}else{
			$arr=array("statuscode"=>400,"message"=>'Please send valid parameters!!!');
		}

		$jsonresult=json_encode($arr);
		print_r($jsonresult);
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