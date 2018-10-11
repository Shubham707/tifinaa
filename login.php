<?php
include 'include/header.php';
?>

            <!-- Breadcrumb Start -->
            <div class="bread-crumb">
                <div class="container">
                    <div class="matter">
                        <h2>Login</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Login Start -->
            <div class="login">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 commontop text-center">
                            <h4>Login to Your Account</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="loginnow">
                                        <h5>Login</h5>
                                        <p>Don't have an account? So <a href="register.html">Register</a> And starts less than a minute</p>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <i class="icofont icofont-ui-message"></i><input type="text" name="email" value="" placeholder="EMAIL" id="email" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <i class="icofont icofont-lock"></i><input type="password" name="password" value="" placeholder="PASSWORD" id="input-password" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <div class="links">
                                                    <label><input type="checkbox" class="radio-inline"/>Remember Me</label> <a class="float-right sign" href="forgot-password.html">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="SIGN IN" class="btn btn-theme btn-md btn-wide" />
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="loginto loginnow">
                                        <h5>Login via social accounts</h5>
                                        <ul class="list-unstyled text-center">
                                            <li><a href="#" target="_blank"><i class="icofont icofont-social-facebook"></i> Login with Facebook</a></li>
                                            <li><a href="#" target="_blank"><i class="icofont icofont-social-twitter"></i> Login with Twitter</a></li>
                                            <li><a href="#" target="_blank"><i class="icofont icofont-social-google-plus"></i> Login with Google+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login End -->

<?php
include 'include/footer.php';
?>
