            <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header"><h4 class="modal-title float-left" >ORDER YOUR THALI</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                       <form class="form-login" action="check_login.php" method="post" id="login-form">
                       <div  id="successs"><h3>OTP Verify :</h3> 
                       
                       Please Check OTP NO Your Mobile</span>
                       <p>
                       <div id="otp"></div>
                        <input type="text" placeholder="OTP Check" minlength="6" maxlength="6" class="cus_otp" name="cus_otp" id="cus_otp1" required onkeyup="selectValues(this.value);">
                        
                       </p>
                        <p><input type="text" placeholder="ENTER YOUR MOBILE NO."  minlength="10" maxlength="10" name="mobile" id="mobile" required ></p>
                         <p><button type="submit" class="btn btn-default" name="login_button" id="login_button">
                            <span class="glyphicon glyphicon-log-in"></span>   Login
                            </button></p>
                       
                       </div>
                     
                       
                     </form>
                          
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <div id="newsletter">
                
            </div> 
          
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
         <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              </div>
              <div class="modal-body">
                <p style="color: red;"><?php echo @$_REQUEST['msg'];?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        </div>

        <!-- jquery -->
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
<?php if(@$_REQUEST['msg']){?>
<script type="text/javascript">
    $(document).ready(function () {
         $(window).load(function(){        
       $('#myModal').modal('show');
        }); 
      });
</script>
<?php }?>


<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $(".cus_otp,#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#otp").html("Digits Only").show().fadeOut("slow");
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
setTimeout(function(){  
  addcarts();
 },100);
function addcarts()
{
   $('#addcart').html('<?php echo count($_SESSION["shopping_cart"]);?>'); 
}
function selectValues(arg)
{
  if(arg.length==6)
  {
    $.ajax({
      url: 'order.php',
      type: 'POST',
      data: {'check_otp': arg},
      success : function(result)
      {
        console.log(result)
        if(result==1)
        {
          console.log(result)
          $('#otp').html("<span style='color:green;'>Otp Successfull</span>");
        }
        else
        {
          console.log(result)
          $('#otp').html("<span style='color:red;'>Otp did not match!</span>");
          
        }
       
      }
    });
  }
}

</script>
    </body>
</html>
