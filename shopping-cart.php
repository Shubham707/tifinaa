<?php
include 'header.php';
include'config.php';

?>
<style type="text/css">
    .counter-plus{ background-color: #e54c2a !important; }
    .counter-minus{ background-color: #e54c2a !important; }
</style>

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
<form method="post" action="track/form.php" enctype="multipart/form-data">
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
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <h6>Shopping Address</h6>	
                     <fieldset> 
                            <div class="form-group">
                                <input name="mobile"  placeholder="Mobile no" id="input-firstname" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="firstname"  placeholder="First Name" id="input-firstname" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="lastname"  placeholder="Last Name" id="input-lastname" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="email"  placeholder="Email" id="input-email" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input name="mobile"  placeholder="Phone Number" id="input-phone" class="form-control" type="text">
                            </div>
                             <div class="form-group">
                                <input name="arrivel_time" value="" placeholder="Arrivel Timing" id="timepicker1" class="form-control" type="text" required>
                            </div>
                           
                                <input name="quantity" value="<?php echo implode(',',$_POST['quantity'])?>"  class="form-control" type="hidden">
                                 <input name="total_amount" value="<?php echo $_POST['total_amount']?>"  class="form-control" type="hidden">
                                <input name="title" value="<?php echo implode(',',$_POST['title'])?>"  class="form-control" type="hidden">
                           
                            
                        </fieldset>
                       
                </div>

                <div class="col-lg-2 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6 col-12">
                    <h6>Contact information</h6>
                        <fieldset>  
                            <div class="form-group">
                                <input name="country"  placeholder="Country" id="input-india" class="form-control" type="text" >
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
                   
                        <div class="form-group row col-sm-4">
                </div>
                   
                </div>
                <div class="col-md-10 col-10">
                    <div class="buttons float-left">
                        <a href="index.php" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Shopping Cart</a>
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
            setTimeout(function(){  test(); }, 0);
            function test(){
                var price=$('#total1').val();
            var qut =$('#quantity').val();
            
            var t=parseInt(price * qut);
             $('#total_price').val(t);
            $('#total').val(t);
            }
            
        }   
    </script>

