<?php
include 'header.php';
?>
            <!-- Header End   -->

            <!-- Breadcrumb Start -->
            <div class="bread-crumb">
                <div class="container">
                    <div class="matter">
                        <h2>Contact Us</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Contact us Start -->
            <div class="contactus">
                <div class="container">
                    <div class="row">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Get In Touch</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>We respond to email messages in the order that they are received, and will respond to your inquiry as soon as possible.You can also use your App for raising a complaint.  </p>
                            <p><?php if(@$_REQUEST['error']){?>
                                <div class="alert alert-danger">
                              <strong>Wrong!</strong> Message did not send!
                            </div>
                               <?php  } ?>
                               <?php if(@$_REQUEST['msg']){?>
                                <div class="alert alert-succss">
                              <strong>Success!</strong> Message send Successfully!
                            </div>
                               <?php  } ?></p>
                        </div>
                        <!-- Title Content End -->

                        <div class="col-md-5 col-12">
                            <!--  Contact form Start  -->
                            <form method="post" action="order.php"  class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="icofont icofont-ui-user"></i>
                                        <input type="text" name="name"  id="input-name" class="form-control" placeholder="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="icofont icofont-ui-message"></i>
                                        <input type="text" name="subject"  id="input-email" class="form-control" placeholder="Subject"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="icofont icofont-ui-message"></i>
                                        <input type="text" name="email"  id="input-email" class="form-control" placeholder="email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <i class="icofont icofont-phone"></i>	
                                        <input type="text" name="phone"  id="input-phone" class="form-control" placeholder="mobile number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <i class="icofont icofont-pencil-alt-5"></i>
                                        <textarea name="message" id="input-enquiry" class="form-control" rows="5" placeholder="message"></textarea>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <input class="btn btn-theme btn-block" name="send" type="submit" value="Send Message" />
                                </div>
                            </form>
                            <!--  Contact form End  -->
                        </div>
                        <div class="col-md-7 col-12">
                            <!--  Map Start  -->
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224567.66183074078!2d76.84969507565934!3d28.423187823625035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C+Haryana!5e0!3m2!1sen!2sin!4v1539070493528" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!--  Map End  -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Contact Us End  -->

            <!-- Address Start  -->
            <div class="address">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address-box">
                                <div class="box text-center">
                                    <div class="icon">
                                        <i class="icofont icofont-home"></i>
                                    </div>
                                    <h4>ADDRESS</h4>
                                    <p>Sharma Niwas,320/21, Madan Puri, Gali No.-5, Jyoti Park, Gurugram</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address-box">
                                <div class="box text-center">
                                    <div class="icon">
                                        <i class="icofont icofont-phone"></i>
                                    </div>
                                    <h4>PHONE NO.</h4>
                                    <p>18002702853,<br>+91 7065955551,+919999417007</p>
                                </div>	
                            </div>	
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address-box">
                                <div class="box text-center">
                                    <div class="icon">
                                        <i class="icofont icofont-ui-message"></i>	
                                    </div>
                                    <h4>EMAIL</h4>
                                    <p><a href="#">info@hamaratiffin.com</a><br><a href="#">contact@hamaratiffin.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address-box">
                                <div class="box social">
                                    <h4>SOCIAL LINKES</h4>
                                    <ul class="list-inline ">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="icofont icofont-social-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://in.pinterest.com/" target="_blank"><i class="icofont icofont-social-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.stumbleupon.com/" target="blank"><i class="icofont icofont-social-stumbleupon"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.youtube.com/" target="_blank"><i class="icofont icofont-social-youtube-play"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.yelp.com/" target="_blank"><i class="icofont icofont-social-yelp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Address End  -->

            <!-- Testimonials Start  -->
            <div class="testimonials">
                <div class="container">
                    <div class="testimonials-inner">
                        <div class="row ">
                            <!-- Title Content Start -->
                            <div class="col-sm-12 col-xs-12 commontop white text-center">
                                <h4>What Our Customers Say</h4>
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="icofont icofont-ui-press hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div>
                            <!-- Title Content End -->
                            <div class="col-sm-12 col-xs-12">
                                <div class="owl-carousel owl-theme owl-testi">
                                    <div class="item">
                                        <p>Thanks. appreciate this level of customer service- quite commendable. Keep it up!</p>
                                        <span>- Kashif Kazmi</span>
                                    </div>
                                    <div class="item">
                                        <p>I would like to applaud you guys for delivering such delectable & healthy food.... I am really happy that I chose Hamara Tiffin.....your food makes me feel at home :)</p>
                                        <span>- Shubham Sahu</span>
                                    </div>
                                    <div class="item">
                                        <p>Thank you for your hospitality & the warmth you bring to my table with the Ghar-ka-Khana touch :) I relish it & look forward to a long association with you.</p>
                                        <span>- Geeta </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Testimonials End  -->
<?php
include 'footer.php';
?>