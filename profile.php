<?php
include 'header.php';
?>
<style >
    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #ffffff !important;background: #d89f1c; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none;  color: #d89f1c !important; background: #fff; }
        .nav-tabs > li > a::after { content: ""; background: #d89f1c; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #d89f1c none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}
.nav-tabs > li  {width:20%; text-align:center;}
.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }


@media all and (max-width:724px){
.nav-tabs > li > a > span {display:none;}   
.nav-tabs > li > a {padding: 5px 5px;}
}

</style>
            <!-- Breadcrumb Start -->
            <div class="bread-crumb">
                <div class="container">
                    <div class="matter">
                        <h2>Profile </h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Shop Start -->
            <div class="shop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row shopdetail">
                                   <div class="col-md-12"> 
      <!-- Nav tabs -->
      <div class="card">
        <ul class="nav nav-tabs" role="tablist">
         
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Profile</span></a></li>
          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-envelope-o"></i>  <span>Order History</span></a></li>
          <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>  <span>Wallet</span></a></li>
          <li role="presentation"><a href="#extra" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-plus-square-o"></i>  <span>Coming Soon</span></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          
          <div role="tabpanel" class="tab-pane active" id="profile">
          
            <h4>User Information</h4>
            
            <dir class="row">
                <div class="col-md-10 col-10 col-xs-10">
                <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <h5>Fill Profile</h5>  
                    <?php 
                    $mob=$_SESSION['user_mobile'];
                    $customer="SELECT * FROM customers WHERE cus_mobile='$mob'";
                    $result=mysqli_query($db,$customer) or die('database not connected!');
                    $data=mysqli_fetch_assoc($result);
                    ?>
                     <fieldset> 
                            <div class="form-group">
                                <span>Mobile Number</span>
                                <input name="mobile" placeholder="Mobile no" id="input-firstname" class="form-control" type="text" disabled="disabled" value="<?php echo $_SESSION['user_mobile'];?>">
                            </div>
                            <div class="form-group">
                                <span>First Name</span>
                                <input name="firstname" placeholder="First Name" id="input-firstname" class="form-control" type="text" disabled="disabled" value="<?php echo $data['cus_name'];?>">
                            </div>
                           
                            <div class="form-group">
                                <span>Email Address</span>
                                <input name="email" placeholder="Email" id="input-email" class="form-control" type="text" disabled="disabled" value="<?php echo $data['cus_email'];?>">
                            </div>
                    </fieldset>                       
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6 col-12">
                    <h5>Contact information</h5>
                        <fieldset>  
                            <div class="form-group">
                                <span>State</span>
                                <input name="state" placeholder="State" id="input-state" class="form-control" type="text" disabled="disabled" value="<?php echo $data['state'];?>">
                            </div>
                            <div class="form-group">
                                <span>City</span>
                                <input name="city" placeholder="City" id="input-City" class="form-control" type="text" disabled="disabled" value="<?php echo $data['city'];?>">
                            </div>
                            <div class="form-group">
                                <span>Zip Code</span>
                                <input name="zipcode" placeholder="Zip Code" id="input-code" class="form-control" type="text" disabled="disabled" value="<?php echo $data['zipcode'];?>">
                            </div>
                            <div class="form-group">
                                <span> Address</span>
                                <input name="address" placeholder="Address" id="input-address" class="form-control" type="text" disabled="disabled" value="<?php echo $data['cus_address'];?>">
                            </div>
                        </fieldset>  
                </div>
            </div>
                  
                </div>

                <div class="col-md-2 col-2 col-xs-2">
                    <h5>Action</h5>
                    <a href="#" class="btn-info btn" id="#Profile" data-toggle="modal" data-target="#Profile" >
                    Edit Profile</a>
                </div>

            </dir>
          </div>
          <div role="tabpanel" class="tab-pane" id="messages">
            <div class="table-responsive-md">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Wallet</td>
                            <td class="text-center">Total Price</td>
                            <td class="text-center">Qty.</td>
                            <td class="text-center">Status</td>                           
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                    $mob=$_SESSION['user_mobile'];
                     $order="SELECT * FROM `order` WHERE order_mobile='$mob'";
                    $orders=mysqli_query($db,$order) or die('database not connected!');
                    while($ord_rec=mysqli_fetch_assoc($orders)){
                    ?>
                        <tr>
                            <td>                                
                                <div class="name">
                                    <h4><?php echo $ord_rec['order_product_name'];?></h4>
                                    <p><?php echo $ord_rec['order_product_name'];?></p>
                                    
                                </div>
                            </td>
                            <td class="text-center"><?php echo $ord_rec['order_total'];?></td>
                            <td class="text-center">
                                <p class="qtypara">                                    
                                  <?php echo $ord_rec['quantity'];?>                                                                     
                                </p>
                            </td>
                            <td class="text-center">
                               <?php if($ord_rec['confirmation']==1)
                               {  
                                echo "Confirm"; } else { echo "Pending"; } ?>
                                    
                                </td>                            
                        </tr>
                        
                      <?php }?> 
                    </tbody>
                </table>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="settings">
              <div class="table-responsive-md">
                <p class="float-left">Wallet Transcation History</p>
                <p class="float-right">Add Wallet Balance </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Hamara Tiffin</td>
                            <td class="text-center">Price</td>
                            <td class="text-center">Qty.</td>
                            <td class="text-center">Status</td>                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>                                
                                <div class="name">
                                    <h4>Food Title Here</h4>
                                    <p>Curses / Dictum / Risus</p>
                                    
                                </div>
                            </td>
                            <td class="text-center">$ 23.00</td>
                            <td class="text-center">
                                <p class="qtypara">                                    
                                   12                                                                    
                                </p>
                            </td>
                            <td class="text-center">Pending</td>                            
                        </tr>
                        <tr>
                            <td>                               
                                <div class="name">
                                    <h4>Food Title Here</h4>
                                    <p>Curses / Dictum / Risus</p>                                    
                                </div>
                            </td>
                            <td class="text-center">$23.50</td>
                            <td class="text-center">
                                <p class="qtypara">                                   
                                   123                                  
                                </p>
                            </td>
                            <td class="text-center">Delivered</td>                            
                        </tr>
                       
                    </tbody>
                </table>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="extra">
              <h3>Amazing New Features Coming Soon</h3>
              <p>We are working on that.</p>
          </div>
        </div>
      </div>
    </div>
                             </div>

                              
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop End -->
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
            <div class="modal fade" id="Profile" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header"><h4 class="modal-title float-left" >Edit Your Profile</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                   <form 
                     <fieldset> 
                            <div class="form-group">                                
                                <input name="mobile" placeholder="Mobile no" id="input-firstname" class="form-control" type="text" value="<?php echo $_SESSION['user_mobile'];?>">
                            </div>
                            <div class="form-group">
                                <input name="firstname" placeholder="First Name" id="input-firstname" class="form-control" type="text" >
                            </div>
                            <div class="form-group">
                                <input name="address" placeholder="Address" id="input-address" class="form-control" type="text" >
                            </div>
                            <div class="form-group">
                                <input name="email" placeholder="Email" id="input-email" class="form-control" type="text" >
                            </div>

                            
                    </fieldset>
                       
                </div>

                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-lg-5 col-md-6 col-12">
                   
                        <fieldset>  
                        <div class="form-group">
                                <input name="country" placeholder="Country" id="input-country" class="form-control" type="text" >
                            </div>
                            <div class="form-group">
                                <input name="state" placeholder="State" id="input-state" class="form-control" type="text" >
                            </div>
                            <div class="form-group">
                                <input name="city" placeholder="City" id="input-City" class="form-control" type="text" >
                            </div>
                            <div class="form-group">
                                <input name="zipcode" placeholder="Zip Code" id="input-code" class="form-control" type="text" >
                            </div>
                            
                        </fieldset>
                   
                        <div class="form-group row col-sm-4">
                </div>
                   
                </div>
                    <div class="buttons float-right">
                     <input type="submit" class="btn btn-theme btn-md btn-wide" name="submit" value="Save Profile">
                    </div>               
                 
            </div>

                          
                        </div>
                       
                    </div>
                  
                </div>
            </div>
  
  <?php
include 'footer.php';
?>