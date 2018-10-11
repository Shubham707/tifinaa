<div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header"><h4 class="modal-title float-left" >ORDER YOUR THALI</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">

                        
                       <!-- One "tab" for each step in the form: -->
                       <?php
                       //$mobile=@$_REQUEST['mobile'];
                       /*include'config.php'; 
                       $sql="SELECT * FROM customers where  otp_status=1";
                       $query=mysqli_query($db,$sql) or die(mysqli_error());
                       $data=mysqli_fetch_assoc($query);
                       if($data){
                        echo "OTP Varified";
                       }else{*/
                       ?>
                       <form id="regForm" action="order.php" method="post">
                       <div class="tab" id="successs"><h3>OTP Verify :</h3> 
                       <span id="hiden">
                      Sms Already Send!<br> Please Check OTP NO Your Mobile</span>
                       <p><input type="text" placeholder="OTP Check" oninput="this.className = ''" minlength="6" maxlength="6" name="cus_otp" id="cus_otp" required onkeyup="selectValue(this.value);"></p>
                       <span id="errorr"></span>
                        
                       </div>
                     
                       
                     
                       <div class="tab">
                        <h3>Customer Details :</h3> 
                         <p><input type="text" placeholder="Full name..." oninput="this.className = ''" name="fname" id="fname" required></p>
                           <span style="color: red; text-align: center">Not mendatory Email Id</span>
                          <p><input type="email" id="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                        
                         <p><textarea placeholder="Street Address " oninput="this.className = ''" id="address" name="address" required></textarea></p>
                         <p><input type="text" placeholder="City" oninput="this.className = ''" name="city" id="city" required style="width: 48%"> 
                            <input type="text" id="state" placeholder=" State / Province" oninput="this.className = ''" name="state" required style="width: 46%; margin-left: 4%;">
                          </p>
                        <p><input type="text" id="country" placeholder=" Country" oninput="this.className = ''" name="country" required style="width: 48%">
                          <input type="text" placeholder=" Postal / Zip Code" oninput="this.className = ''" id="zipcode" name="zipcode" required style="width: 46%; margin-left: 4%;"></p>
                       </div>
                       <div class="tab"><h3>Number of Thali Order :</h3>
                         
                         <p>
                          <div class="handle-counter" id="handleCounter">                            
                              <fieldset>
                                <div class="form-group">
                                  <label class="control-label">Special Thali :</label>
                                  <input id="colorful" class="form-control" type="number" value="0" min="1" max="90" />
                                </div>
                              </fieldset>
                           </div>
                         </p>
                         <p>
                           <div class="handle-counter" id="handleCounter">
                              <fieldset>
                                <div class="form-group">
                                  <label class="control-label">Basic Thali :</label>
                                  <input id="colorful1" class="form-control" type="number" value="0" min="1" max="90" />
                                </div>
                              </fieldset>
                            </div>
                           </p>
                           <p>
                             <div class="handle-counter" id="handleCounter">
                              <fieldset>
                                <div class="form-group">
                                  <label class="control-label">Medium Thali :</label>
                                  <input id="colorful2" class="form-control" type="number" value="0" min="1" max="90" />
                                </div>
                              </fieldset>
                            </div>
                            </p>
                          <!-- <span>Special Thali</span>
                              <button class="counter-minus btn btn-primary">-</button>
                              <input type="text" value="0" name="special" id="special">
                              <button class="counter-plus btn btn-primary">+</button>
                          </div>
                          <br>
                          <div class="handle-counter" id="handleCounter2">
                          <span>Basic Thali</span>
                              <button class="counter-minus btn btn-primary">-</button>
                              <input type="text" value="0" name="basic" id="basic">
                              <button class="counter-plus btn btn-primary">+</button>
                          </div>
                          <br>
                          <div class="handle-counter" id="handleCounter3">
                          <span>Medium Thali</span>
                            <button class="counter-minus btn btn-primary">-</button>
                              <input type="text" value="0" name="medium" id="medium">
                              <button class="counter-plus btn btn-primary">+</button>
                            </div>
                          </p> -->
                          <p><input type="date" placeholder="Order Date" oninput="this.className = ''" id="booking_date" name="booking_date" required></p>
                         <p>
                         <p><input type="time" placeholder="Order time" oninput="this.className = ''" id="booking_time" name="booking_time" required>
                         <input type="hidden" id="otp_no" name="otp_no" value=""></p>
                         </div>
                        
                       <div style="overflow:auto;">
                         <div style="float:right;">
                           <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                           <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                         </div>
                       </div>
                       <div style="text-align:center;margin-top:40px;">
                         <span class="step"></span>
                         <span class="step"></span>
                         <span class="step"></span>
                       </div>
                     </form>
                          
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <!-- Newsletter Start -->
            <div id="newsletter">
                <!-- <div class="container">
                    <div id="subscribe">
                      
                        <form class="form-horizontal" name="subscribe">
                            <div class="row">
                                <div class="col-sm-6 col-md-7"> 
                                    <div class="input-group">
                                        <span class="news">newsletter</span>
                                        <p>Stay updated with our instant notifications of Hamara tiffin. You can manage them anytime in your browser settings.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5 form-group">
                                    <div class="input-group">
                                        <input  value="" name="subscribe_email" id="subscribe_email" placeholder="Email" type="text">
                                        <button class="btn btn-news" type="submit" value="submit">Send</button>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>-->
            </div> 
            <!-- Newsletter End -->
            <!-- Footer Start -->
            <footer>
                <div class="container">
                    <div class="row inner">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <!-- Footer Widget Start --> 
                            <h5>Contact Us</h5>
                            <ul class="list-unstyled contact">
                                <li><i class="icofont icofont-social-google-map"></i>  Sharma Niwas,320/21, Madan Puri, Gali No.-5, Jyoti Park, Gurugram</li>
                                <li><i class="icofont icofont-phone"></i> 18002702853,<br>+91 7065955551,+919999417007</li>
                                <li><a href="#"><i class="icofont icofont-ui-message"></i>info@hamaratiffin.com</a></li>
                            </ul>
                            <!-- Footer Widget End --> 
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <!-- Footer Widget Start --> 
                            <h5>Information</h5>
                            <ul class="list-unstyled">
                                <li><a href="about.php">About us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                            <!-- Footer Widget End --> 
                        </div>
                        <div class="w-100 d-none d-xs-block"></div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <!-- Footer Widget Start --> 
                            <h5>Open Hours</h5>
                            <ul class="list-unstyled">
                                <li>Monday - Friday : 9 am to 12 am.</li>
                                <li>Saturday - Sunday : 24 Hour Open</li>
                                <li>Breakfast : 7 am to 12 pm</li>
                                <li>Lunch : 12 pm to 7 pm</li>
                                <li>Dinner : 7 am to 12 am</li>
                            </ul>
                            <!-- Footer Widget End --> 
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                          
                            <h5>Instagram</h5>
                            <ul class="list-unstyled insta">
                                <li><a href="#"><img src="assets/images/instagram/1.jpg" alt="image" /></a></li>
                                <li><a href="#"><img src="assets/images/instagram/2.jpg" alt="image" /></a></li>
                                <li><a href="#"><img src="assets/images/instagram/3.jpg" alt="image" /></a></li>
                                <li><a href="#"><img src="assets/images/instagram/4.jpg" alt="image" /></a></li>
                                <li><a href="#"><img src="assets/images/instagram/5.jpg" alt="image" /></a></li>
                                <li><a href="#"><img src="assets/images/instagram/6.jpg" alt="image" /></a></li>
                            </ul>
                            
                        </div>
                    </div>

                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row powered">
                            <!--  Copyright Start -->
                            <div class="col-md-3 col-sm-6 order-md-1">
                                <img src="img/light.png" class="img-fluid" title="logo" alt="logo" style="width: 45%">
                            </div>
                            <div class="col-md-3 col-sm-6 text-right order-md-3">
                                <!--  Footer Social Start -->
                                <ul class="list-inline social">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/spheretheme/" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/spheretheme/" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://in.pinterest.com/" target="_blank"><i class="icofont icofont-social-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com/" target="_blank"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                </ul>
                                <!--  Footer Social End -->
                            </div>
                            <div class="col-md-6 col-sm-12 text-center order-md-2">
                                <p>Copyright © <span>Hamara Tiffin</span> 2018. All Rights Reserved.</p>
                            </div>
                            <!--  Copyright End -->
                        </div>
                    </div>
                </div>
            </footer>
         

        </div>

        <!-- jquery -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <!-- jquery Validate -->
        <script src="assets/libs/jquery-validation/jquery.validate.min.js"></script>
        <!-- popper js -->
        <script src="assets/libs/popper/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
        <!-- owlcarousel js -->
        <script src="assets/libs/owlcarousel2/owl.carousel.min.js"></script>
        <!--inview js code-->
        <script src="assets/libs/jquery.inview/jquery.inview.min.js"></script>
        <!--CountTo js code-->
        <script src="assets/libs/jquery.countTo/jquery.countTo.js"></script>
        <!-- Animated Headlines js code-->
        <script src="assets/libs/animated-headlines/animated-headlines.js"></script>
        <!-- mb.YTPlayer js code-->
        <script src="assets/libs/mb.YTPlayer/jquery.mb.YTPlayer.min.js"></script>
        <!-- Switch Style js -->
        <!-- <script src="assets/switch-style/switch-style.js"></script> -->
        <!--internal js-->
        <script src="assets/js/internal.js"></script>
          <script src="plugin/timepicki.js"></script>
           <script>
    $('#timepicker1').timepicki();
    </script>
      <script>
    $('#timepicker1').timepicki();
    </script>
    </body>
</html>
<?php if(@$_REQUEST['msg']!==''){?>
<script type="text/javascript">
     /* $(document).ready(function () {
        $('#myModal').load(function () {
            $('#myModal').modal('show');
        });
      });*/
</script>
<?php }?>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#cus_otp,#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errorr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>
<script type="text/javascript">
  
(function ( $ ) {

  $.fn.bootstrapNumber = function( options ) {

    var settings = $.extend({
      upClass: 'default',
      downClass: 'default',
      upText: '+',
      downText: '-',
      center: true
      }, options );

    return this.each(function(e) {
      var self = $(this);
      var clone = self.clone(true, true);

      var min = self.attr('min');
      var max = self.attr('max');
      var step = parseInt(self.attr('step')) || 1;

      function setText(n) {
        if (isNaN(n) || (min && n < min) || (max && n > max)) {
          return false;
        }

        clone.focus().val(n);
        clone.trigger('change');
        return true;
      }

      var group = $("<div class='input-group'></div>");
      var down = $("<button type='button'>" + settings.downText + "</button>").attr('class', 'btn btn-' + settings.downClass).click(function() {
        setText(parseInt(clone.val() || clone.attr('value')) - step);
      });
      var up = $("<button type='button'>" + settings.upText + "</button>").attr('class', 'btn btn-' + settings.upClass).click(function() {
        setText(parseInt(clone.val() || clone.attr('value')) + step);
      });
      $("<span class='input-group-btn'></span>").append(down).appendTo(group);
      clone.appendTo(group);
      if(clone && settings.center) {
        clone.css('text-align', 'center');
      }
      $("<span class='input-group-btn'></span>").append(up).appendTo(group);

      // remove spins from original
      clone.prop('type', 'text').keydown(function(e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
          (e.keyCode == 65 && e.ctrlKey === true) ||
          (e.keyCode >= 35 && e.keyCode <= 39)) {
          return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
        }

        var c = String.fromCharCode(e.which);
        var n = parseInt(clone.val() + c);

        if ((min && n < min) || (max && n > max)) {
          e.preventDefault();
        }
      });

      self.replaceWith(group);
    });
  };
} ( jQuery ));

</script>
    </body>
</html>
