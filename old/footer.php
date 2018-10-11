        <!-- #main -->
         <footer id="colophon" class="site-footer clearfix">
            <div id="quaternary" class="sidebar-container " role="complementary">
               <div class="sidebar-inner">
                  <div class="widget-area clearfix">
                     <div id="azh_widget-2" class="widget widget_azh_widget">
                        <div data-section="section">
                           <div class="container">
                              <div class="row">
                                 <div class="col-sm-4 col-md-3">
                                    <img src="img/logo.png" alt="logo">
                                 </div>
                                 <div class="col-sm-4 col-md-3">
                                    <h4>About Us</h4>
                                    <ul data-cloneable>
                                       <li>
                                          <a href="#about">About us</a>
                                       </li>
                                       <li>
                                          <a href="#price">Price</a>
                                       </li>
                                       <li>
                                          <a href="#contact">Contact Us</a>
                                       </li>
                                       <li>
                                          <a href="#quaternary">Order Now</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-sm-4 col-md-3">
                                    <h4>How it Works</h4>
                                    <ul data-cloneable>
                                       <li>
                                          <a href="#">Enter your location</a>
                                       </li>
                                       <li>
                                          <a href="#">Choose restaurant</a>
                                       </li>
                                       <li>
                                          <a href="#">Choose meal</a>
                                       </li>
                                       <li>
                                          <a href="#">Pay via credit card </a>
                                       </li>
                                       <li>
                                          <a href="#">Wait for delivery</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-sm-4 col-md-3">
                                    <h4>Pages</h4>
                                    <ul data-cloneable>
                                       <li>
                                          <a href="#">Search results page</a>
                                       </li>
                                       <li>
                                          <a href="#">User Sign Up Page</a>
                                       </li>
                                       <li>
                                          <a href="#">Pricing page</a>
                                       </li>
                                       <li>
                                          <a href="#quaternary">Make order</a>
                                       </li>
                                    </ul>
                                 </div>
                           </div>
                        </div>
                        <div data-section="section">
                           <div class="container">
                              <div class="row">
                                <div class="col-sm-3">
                                </div>
                                 <div class="col-sm-3">
                                    <h4>Payment Options</h4>
                                    <p class="hasimg">
                                       <img src="wp-content/uploads/2016/09/payment.png" alt="payment">
                                    </p>
                                 </div>
                                 <div class="col-sm-3">
                                    <h4>Address</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Sharma Niwas,320/21, Madan Puri, Gali No.-5, Jyoti Park, Gurugram</p>
                                    <p>
                                       <span class="strong">Phone: </span>
                                       <span class="highlighted">18002702853</span><br>
                                       <span class="highlighted">7065955551, 9999417007</span>
                                    </p>
                                 </div>
                                 <div class="col-sm-3">
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .widget-area -->
               </div>
               <!-- .sidebar-inner -->
            </div>
            <!-- #quaternary -->
         </footer>
         <!-- #colophon -->
      </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type='text/javascript' src='wp-content/themes/foodpicky/js/fontenda796.js'></script>
      <!--  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="app/js/handleCounter.js"></script>
    <script>
        $(function ($) {
            var options = {
                minimum: 1,
                maximize: 10,
                onChange: valChanged,
                onMinimum: function(e) {
                    //console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    //console.log('reached maximize'+e)
                }
            }
            $('#handleCounter').handleCounter(options)
            $('#handleCounter2').handleCounter(options)
         $('#handleCounter3').handleCounter({maximize: 100})
        })
        function valChanged(d) {
//            console.log(d)
        }
    </script> -->
    <script type="text/javascript">
      $(document).ready(function() {
    $("#mobile").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
    </script>
   </body>
</html>

