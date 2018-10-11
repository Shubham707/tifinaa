<?php
include 'header.php';
include'config.php';
?>

            <!-- Slider Start -->
            <div class="slide"> 
                <div class="slideshow owl-carousel">
                    <!-- Slider Backround Image Start -->
                    <?php $sli="select * from slider";
                    $sliders=mysqli_query($db,$sli) or die('database not connected!');
                    while($slider=mysqli_fetch_assoc($sliders)){
                    ?>
                    <div class="item">
                        <img src="sliders/<?php echo $slider['slider_image'];?>" alt="Hamara Tiffin" title="Order Your Thali From Hamara Tiffin" class="img-responsive"/>
                    </div>
                    <?php }?>
               
                </div>

                <!-- Slide Detail Start  -->
                <div class="slide-detail">
                    <div class="container">
                        <img src="img/logo.png" alt="logo1" title="logo1" class="img-responsive" />
                        <div class="cd-headline clip">
                            <h4>Now Order <span class="cd-words-wrapper">
                                    <b class="is-visible">Basic </b>
                                    <b>Regular </b>
                                    <b>Special</b>
                                </span>Thali</h4>
                        </div>
                        <p>OUR SERVICES ARE AVAILABLE ONLY IN HARYANA & DELHI NCR</p>
                        <a class="btn-primary btn btn-wide" href="#">Today's menu</a>
                    </div>
                </div>	
                <!-- Slide Detail End  -->
            </div>
            <!-- Slider End  -->

            <!-- Order Start  -->
            <div class="order">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Order Delivery and take out</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                           
                        </div>
                        <!-- Title Content End -->
                        <div class="col-lg-7 col-sm-12">
                            <!-- Search Form Start -->
                          <form id="myform" class="form-horizontal search-icon" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input name="mobile" id="mobile" placeholder="Enter Mobile No"  class="form-control" type="text">
                                    </div>
                                    <button type="submit" value="submit" class="btn btn-theme"><i class="icofont icofont-sent"></i>Send OTP</button>
                                </fieldset>
                            </form> 
                            <!-- Search Form End -->
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <i class="icofont icofont-fast-food"></i>
                                    <p>Select Food</p>
                                </li>
                                <li class="list-inline-item">
                                    <i class="icofont icofont-food-basket"></i>
                                    <p>Order Food</p>
                                </li>
                                <li class="list-inline-item">
                                    <i class="icofont icofont-fast-delivery"></i>
                                    <p>Delivery or Take Out</p>
                                </li>
                            </ul>
                            <img src="assets/images/lines.png" alt="line" title="line" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order End  -->
              <!-- Popular Dishes Start -->
            <div class="dishes">
                <div class="container">
                    <div class="row">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Our Popular Dishes</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>The easiest way to Quality Service, Outdoor Catering, Packed Lunch (Tiffin), Packed Dinner (Tiffin)</p>
                            
                        </div>
                        <!-- Title Content End -->
                        <div class="col-sm-12">
                            <div class="dish owl-carousel">
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/01.jpg" alt="image" title="image" class="img-fluid" /></a>
                                        <div class="caption">
                                            <h4>Pasta</h4>
                                           <!--  <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span> -->
                                            
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/02.jpg" alt="image" title="image" class="img-fluid" /></a>
                                        <div class="caption">
                                            <h4>Salad</h4>
                                          <!--   <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span> -->
                                           
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                <div class="item">
                                    <!-- Box Start -->
                                    <div class="box">
                                        <a href="#"><img src="assets/images/dishes/03.jpg" alt="image" title="image" class="img-fluid" /></a>
                                        <div class="caption">
                                            <h4>Bundi Raita</h4>
                                            <!-- <span>Bundi Raita</span> -->
                                            
                                        </div>
                                    </div>
                                    <!-- Box End -->
                                </div>
                                
                                
                                
                               
                                
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Dishes End -->
             <!-- Blog Start -->
            <div class="blog">
                <div class="bloggs">
                    <div class="container">
                        <div class="row">
                            <!-- Title Content Start -->
                            <div class="col-sm-12 commontop text-center">
                                <h4>Our Thali</h4>
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="icofont icofont-ui-press hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                                <p>The easiest way to Quality Service, Outdoor Catering, Packed Lunch (Tiffin), Packed Dinner (Tiffin)</p>
                            </div>
                            <!-- Title Content End -->
                            <?php 
                            $sql="SELECT * FROM `thali`";
                            $query=mysqli_query($db,$sql) or die('database not connected!');
                            while($data=mysqli_fetch_assoc($query)){
                            ?>
                            <div class="col-sm-4">
                                <!-- Single Blog Start -->
                                <div class="box">
                                    <img src="thalis/<?php echo $data['image']?>" class="img-fluid" alt="image" title="image" />
                                    <div class="caption">
                                        <h4><?php echo $data['title']?></h4>
                                       
                                        <p class="des"><?php echo $data['description']?></p><br>
                                         <a class="btn btn-success"> Price: <?php echo $data['price']?></a>
                                        <button class="btn btn-theme-alt btn-md" style="float: right !important;" onclick="selectProduct('<?php echo $data['id']?>')">Book Now <i class="icofont icofont-curved-double-right"></i></button>
                                        <!-- <a class="btn btn-theme-alt btn-md" style="float: right !important;" href="shopping-cart?thali=<?php //echo $data['id'].'&title='.$data['title']?>">Book Now <i class="icofont icofont-curved-double-right"></i></a> -->
                                    </div>
                                </div>  
                                <!-- Single Blog End -->
                            </div>
                           <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

          

          

            <!-- Reservation Start -->
            <div class="reservation">
                <div class="container">
                    <div class="row ">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop white text-center">
                            <h4>Book Your Thali</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>The easiest way to Quality Service, Outdoor Catering, Packed Lunch (Tiffin), Packed Dinner (Tiffin)</p>
                        </div>
                        <!-- Title Content End -->
                        <div class="col-md-12 col-xs-12">
                            <!-- Reservation Form Start -->
                            <form action="http://www.spheretheme.com/steam/mailer.php" method="post" class="row reservation-form" novalidate="novalidate">
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email" id="input-email" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number" id="input-mobile" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-calendar"></i><input name="date" placeholder="date" id="input-date" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-clock-time"></i><input name="time" placeholder="time" id="input-time" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-users"></i><input name="persons" placeholder="number of persons" id="input-persons" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="">  
                                        <div id="emailSend" class="alert alert-success" role="alert" style="display: none;">
                                            <div class="success-text">Your Message has been successfully sent.</div>
                                        </div>
                                        <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                                            <div class="alert-text">Server error <br> Try again later.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-md-12" >
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-theme btn-wide" >book now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Reservation Form End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reservation End  -->

           
<?php
include 'footer.php';
?>
<script type="text/javascript">
    function selectProduct(arg)
    {
        $.ajax({
            url: 'cart.php',
            type: 'POST',
            data: {'shopping_cart': arg,'add_to_cart':arg },
            success: function(res)
           {
                if(res)
                {
                  alert(res);
                }else{
                   alert('Thali not added');
                }
           }
         });  
    }
</script>
 <script type="text/javascript">
 
$("form#myform").submit(function(e) {
  e.preventDefault();
    var mobile = $('#mobile').val();
    $.ajax({
           type: "POST",
           url: 'order.php',
           data: {'mobile':mobile}, 
           success: function(res)
           {
            if(res=='success')
            {
              $('#empModal').modal('show');
              console.log('error')
            }else{
               alert('Mobile no is wrong');
            }
           }
         });
});
</script>
<script type="text/javascript">
function selectValue(erc)
{
  $('#otp_no').val(erc);
  if( erc.length =='6' ){
      $.ajax({
           type: "POST",
           url: 'order.php',
           data: {'cus_otp':erc}, 
           success: function(res)
           {
            if(res==1)
            {
              $('#successs').html('<span style="color:green">OTP number is successfull verified!</span>');
                  $('#hiden').hide();
            }else{
               $('#successs').html('Otp no is wrong');
            }
           }
         });
  }
  
}

</script>