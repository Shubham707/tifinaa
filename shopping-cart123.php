<?php
include 'header.php';
include'config.php';
$id=$_REQUEST['thali'];
$title=str_replace('%20', ' ',$_REQUEST['title']);
?>

<!-- Breadcrumb Start -->
<div class="bread-crumb">
<div class="container">
<div class="matter">
<h2>Shopping Cart</h2>
<ul class="list-inline">
    <li class="list-inline-item"><a href="index">HOME</a></li>
    <li class="list-inline-item"><a href="#">Shopping Cart</a></li>
</ul>
</div>
</div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start  -->
<div class="mycart">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#tab-cart" data-toggle="tab"><span>1</span>shopping cart</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab-info" data-toggle="tab"></a></li>
        <li class="nav-item"><a class="nav-link" href="#tab-info" data-toggle="tab"><span>2</span>shopping info</a></li>
    </ul>
    <div class="bor"></div>
    <div class="tab-content">
        <div class="tab-pane active" id="tab-cart">
            <form method="post" action="track/form.php" enctype="multipart/form-data">
                <h2>You have <span>2 items</span> in your order.</h2>
                <div class="table-responsive-md">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Thali Name</td>
                                <td class="text-center">Price</td>
                                <td class="text-center">Qty.</td>
                                <td class="text-center">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $sql="select * from thali where id='$id'";
                        $query=mysqli_query($db,$sql) or die('database not connected!');
                        $data=mysqli_fetch_assoc($query);
                        ?>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="thalis/<?php echo $data['image']?>" class="img-fluid" alt="thumb" title="thumb" />
                                    </a>
                                    <div class="name">
                                        <h4><?php echo $data['title']?></h4>
                                        <p><?php echo substr($data['description'],0,20);?></p>
                                        <!-- <div class="rating">
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div> -->
                                    </div>
                                </td>
                                <td class="text-center">&#8377;  <input type="text" class="form-control" id="total1" value="<?php echo $data['price']?>" readonly></td>
                                <td class="text-center">
                                    <p class="qtypara">
                                        <span id="minus1" class="minus"><i class="icofont icofont-minus"></i></span>
                                        <input type="text" name="quantity" value="1" size="2" id="quantity" class="form-control qty" />
                                        <span id="add1" class="add"><i class="icofont icofont-plus"></i></span>
                                         <input type="hidden" name="product_name" value="<?php echo $data['title']?>"   />
                                    </p>
                                </td>
                                <td class="text-center" >
                                 <input type="text" class="form-control" id="total" value="<?php echo $data['price']?>" readonly></td>
                                <td class="text-center">
                                  
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="5">
                                    <h3 class="text-right">SUBTOTAL - &#8377;
                                    <input  style="width: auto !important;" type="text" class="btn btn-theme" id="total_price" name="total" value="<?php echo $data['price']?>" readonly>
                                    <i id="total_price"></i></h3>
                                    <div class="buttons float-left">
                                        <!-- <a href="shop.html" class="btn btn-theme btn-md btn-wide">Continue Shopping</a> -->
                                    </div>
                                    <div class="buttons float-right">
                                        <a href="#tab-info" data-toggle="tab" class="nav nav-tabs nav-item nav-link btn btn-theme btn-sm btn-wide">Checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
        </div>
        <div class="tab-pane col-md-12 col-12" id="tab-info">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <h6>Your Address</h6>	
                        <fieldset>	
                            <div class="form-group">
                                <input name="country"  placeholder="Country" id="input-india" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="state"  placeholder="State" id="input-state" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="city"  placeholder="City" id="input-City" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="zipcode"  placeholder="Zip Code" id="input-code" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="address"  placeholder="Address" id="input-address" class="form-control" type="text">
                            </div>
                        </fieldset>
                   
                </div>

                <div class="col-lg-2 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6 col-12">
                    <h6>Contact information</h6>
                        <fieldset>	
                            <div class="form-group">
                                <input name="firstname"  placeholder="First Name" id="input-firstname" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="lastname"  placeholder="Last Name" id="input-lastname" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="email"  placeholder="Email" id="input-email" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <input name="mobile"  placeholder="Phone Number" id="input-phone" class="form-control" type="text">
                            </div>
                             <div class="form-group">
                                <input name="arrivel_time"value="" placeholder="Arrivel Timing" id="timepicker1" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12" style="display: inline-flex;">
                                <span>Cash On Delivery</span>
                                <input type="radio" name="cash" id="cash" value="cash" class="form-control">
                                <span>Online Payment</span>
                                 <input type="radio" name="cash" value="online" id="online" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row col-sm-4">
                        
                  
                    
                </div>
                   
                </div>
                <div class="col-md-12 col-12">
                    <div class="buttons float-left">
                        <a href="#tab-cart" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Shopping Cart</a>
                    </div>
                    <div class="buttons float-right">
                     <input type="submit" class="btn btn-theme btn-md btn-wide" name="submit" value="Place Order">
                    </div>
                </div>
                 
            </div>
        </div>

    </div>	
</div>
</div>
</div>
</div>
</form>
<!-- Cart End  -->
<?php
include 'footer.php';
?>

 <script src="app/js/handleCounter.js"></script>
    <script>
        $(function ($) {
            var options = {
                minimum: 1,
                maximize: 100,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                   
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                    
                }
            }
            $('#handleCounter').handleCounter(options)
            $('#handleCounter2').handleCounter(options)
            $('#handleCounter3').handleCounter({maximize: 100})

        })
        function valChanged(d) {
         
        }
        function changeValue()
        {
            setTimeout(function(){  test(); }, 2000);
            function test(){
                var price=$('#total1').val();
            var qut =$('#quantity').val();
            
            var t=parseInt(price * qut);
             $('#total_price').val(t);
            $('#total').val(t);
            }
            
        }   
    </script>

