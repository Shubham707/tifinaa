<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Itcare Api</title>

	
</head>
<body>

<div id="container">
	<h1>Welcome to Hamaratifin API !</h1>

	<div id="body">
		<h1>Cyber Plate Theme Park Apis</h1>
		


		<button class="accordion"><b>Product Detail : </b>http://hamaratiffin.com/api/product.php</button>
		<div class="panel">
			<h2>Request:</h2>
			<pre>
			{
    "status": true,
    "statuscode": 200,
    "data": {
        "id": "5",
        "title": "Special Thali",
        "description": "Packed Lunch, Packed Dinner Dal, Sabzi, Paneer, Raita, Sweet, Achar, Salad, Lachha Prantha, Naan, Rice",
        "price": "150",
        "image": "10658-special.jpg",
        "discount": "10",
        "total_price": "135"
    }
}
			</pre>
		</div>

		<button class="accordion"><b>Signup : </b>http://hamaratiffin.com/api/signup.php</button>
		<div class="panel">
			<h2>Request:</h2>
			<pre>{
			"email":shubhamsahu707@gmail.com,
			"mobile":'453543',
			"address":'abcdef',
			"password":"dsfgkjds",

			}
			</pre>
		</div>

		<button class="accordion"><b>Login : </b>http://hamaratiffin.com/api/login.php</button>
		<div class="panel">
			<h2>Request:</h2>
			<pre>{
			"mobile":'453543',
			"password":"dsfgkjds",

			}
			</pre>
		</div>

		<button class="accordion"><b>Slider: </b>http://hamaratiffin.com/api/slider.php</button>
		<div class="panel">
			<h2>Request:</h2>
			<pre>{
    "status": true,
    "statuscode": 200,
    "data": {
        "slider_id": "11",
        "slider_name": "safsafsafsdf",
        "slider_image": "69878-download (1).jpeg",
        "slider_content": "dsfdsfdsfds"
    }
}
			</pre>
		</div>
		<button class="accordion"><b>OrderBooking : </b>http://hamaratiffin.com/api/order</button>
		<div class="panel">
			<h2>Request:</h2>
			<pre>
			'user_id'
			'product_id'
			'price'
			'total'
			'mobile'
			'prod_name'
			'address'
			'arrive_time'
			
			<!-- {"status":true,"statuscode":200,"data":"INSERT INTO `order`(`order_product_name`, `order_price`, `order_total`, `order_mobile`, `order_address`, `product_id`,`user_id`,`arrivel_time`) VALUES ('prod_name','price','total','mobile','address','1','1','arrive_time')"} -->
			{"status":true,"statuscode":200,"data":"Order save successfully"}
			</pre>
		</div>
		<h1>Next</h1>
		
		
	</div>

	<p class="footer">Itcare Api Version <strong>1.0</strong></p>
</div>



</body>
</html>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

	<style>
.accordion {
    background-color: #36da5c;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #137129;
    color: #fff;
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>