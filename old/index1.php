<?php include'header.php';?>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}
#regForm1 {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input,select,textarea {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

<div id="middle" class="sidebar-container " role="complementary">
               <div class="sidebar-inner">
                  <div class="widget-area clearfix">
                     <div id="azh_widget-4" class="widget widget_azh_widget">
                        <div data-section="section">
                           <div class="homepage-header-background" style="background-image: url('img/banner.jpg')"></div>
                           <div class="static-header homepage-header">
                              <div class="container">
                                 <h1>Place Your Order Now </h1>
                                 <p>Place your order in just 3 easy steps</p>
                               
                                 <form method="post" id="myform" class="azqf-query-form profiles" action="">
                                    <span class="toggle"></span>
                                    <div class="wrapper">
                                       <div class="geo-location">
                                          <div class="location">
                                          <input class="input-number" type="tel" name="mobile"  id="mobile"  max="10" placeholder="Enter Mobile Number" required>
                                          </div>
                                       </div>
                                       
                                       <div class="submit">
                                       <input type="submit"  name="mobile_sub" value="Submit">

                                       </div>
                                    </div>
                                 </form>
                                 <img src="wp-content/uploads/2016/09/steps.png" alt="steps">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .widget-area -->
               </div>
               <!-- .sidebar-inner -->
            </div>
            <!-- #middle -->
         <!-- #masthead -->
         <div id="main" class="site-main">
            <div id="primary" class="content-area">
               <div id="content" class="site-content" role="main">
                  <div id="post-4" class="entry post-4 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div data-section="autolocation" class="line-widget autolocation">
                           <div class="container"><span>Swad</span> Jo Sada Rahe yaad</div>
                        </div>
                        <div data-section="popular-products" class="section" id="about">
                           <div class="container">
                              <h2 class="title">About Hamara Tiffin</h2>
                              <p class="subtitle">24x7 get Order your Tiffin</p>
                              <div class="row">
                                <div class="col-md-8 about">
                                    <p style="text-align:justify">We, at Hamara Tiffin, realized the need for a simple solution to the challenge faced on daily basis: to include healthy and tasty food in our diet! As most of us get busy in our lives having no time to cook our own meals, grabbing a quick bite of fast food or settling down for the average food available around the corner sounds good enough to get through the day. But why settle for good enough?</p>
                                    <p style="text-align:justify">With our app, create your own personalized weekly plan of healthy and delicious meals when you have time, so that you set aside your worries when you don’t. Schedule your choice of meal from wide variety of options available from across the country and beyond. Choose your own time of delivery along with the address for each day. Get to know the ingredients and nutrition value of your meal as well.</p>
                                    <p style="text-align:justify" >We don’t believe in shortcuts. Therefore, each meal is prepared with finest ingredients and is sent out only if it is finger licking delicious and heartwarming good.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="img/men.png">
                                </div>
                              </div>
                           </div>
                        </div>
                        <div data-section="popular-products" class="section" id="price">
                           <div class="container">
                              <h2 class="title">Popular This Month In Your City</h2>
                              <p class="subtitle">The easiest way to Quality Service, Outdoor Catering, Packed Lunch (Tiffin), Packed Dinner (Tiffin)</p>
                              <div data-element="shortcode: 67eca4ff89abb927cc230225a496e899">
                                 <div class="posts-list-wrapper horizontal-list-3">
                                    <div class="posts-list shop-product  horizontal-list-3" data-contents-per-item="1" data-width="360" data-height="215" data-stagePadding="0" data-margin="0" data-full-width="" data-center="" data-loop="">
                                       <div class="shop-product post-172 product type-product status-publish has-post-thumbnail product_cat-burgers product_tag-alcohol product_tag-beer product_tag-health  instock shipping-taxable purchasable product-type-variable has-children">
                                          <div class="entry" itemscope itemtype="#">
                                             <div class="entry-thumbnail">
                                                <a href="payment.php?thali=3">
                                                   <img class="image lazy " src="img/basic.jpg" style="height: 215px;" data-width="360" data-height="215">
                                                   
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <a class="entry-title" href="#">
                                                      <h3 itemprop="name">Basic Thali</h3>
                                                   </a>
                                                </div>
                                                <div class="entry-summary">Packed Lunch, Packed Dinner</div>
                                                <div class="entry-summary">Dal, Sabzi, Paneer, Papad, Salad, Achar, 4 Roti, Rice</div>
                                                <div class="entry-footer basic">
                                                   <span class="price"><span class="prefix"></span><span class="woocommerce-Price-amount amount"><i class="fa fa-inr" aria-hidden="true"></i>70<span class="decimals">.00</span></span></span>
                                                   <a rel="nofollow" href="order.html" data-quantity="1" data-product_id="228" data-product_sku="" class="button product_type_variable add_to_cart_button ajax_add_to_cart">Order Now</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="shop-product post-171 product type-product status-publish has-post-thumbnail product_cat-pasta product_tag-beef product_tag-chilly product_tag-grill product_tag-hot last instock shipping-taxable purchasable product-type-variable has-children">
                                          <div class="entry" itemscope itemtype="#">
                                             <div class="entry-thumbnail">
                                                <a href="payment.php?thali=4">
                                                   <img class="image lazy " src="img/special.jpg" style="height: 215px;" data-width="360" data-height="215">
                                                   
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <a class="entry-title" href="#">
                                                      <h3 itemprop="name">Regular Thali</h3>
                                                   </a>
                                                </div>
                                                <div class="entry-summary">Packed Lunch, Packed Dinner</div>
                                                <div class="entry-summary">Dal, Sabzi, Paneer, Papad, Salad, Achar, 2 Roti, 1 Naan, Rice</div>
                                                <div class="entry-footer">
                                                   <span class="price"><span class="prefix"></span><span class="woocommerce-Price-amount amount"><i class="fa fa-inr" aria-hidden="true"></i> 110<span class="decimals">.00</span></span></span>
                                                   <a rel="nofollow" href="order.html" data-quantity="1" data-product_id="231" data-product_sku="" class="button product_type_variable add_to_cart_button ajax_add_to_cart">Order Now</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="shop-product post-169 product type-product status-publish has-post-thumbnail product_cat-burgers product_tag-beef product_tag-grill product_tag-hot  instock shipping-taxable purchasable product-type-variable has-children">
                                          <div class="entry" itemscope itemtype="#">
                                             <div class="entry-thumbnail">
                                                <a href="payment.php?thali=5">
                                                   <img class="image lazy " src="img/regular.jpg" style="height: 215px;" data-width="360" data-height="215">
                                                  
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <a class="entry-title" href="product/maximus-nibh-facilisis/index.html">
                                                      <h3 itemprop="name">Special Thali</h3>
                                                   </a>
                                                </div>
                                                <div class="entry-summary">Packed Lunch, Packed Dinner</div>
                                                <div class="entry-summary">Dal, Sabzi, Paneer, Raita, Sweet, Achar, Salad, Lachha Prantha, Naan, Rice</div>
                                                <div class="entry-footer">
                                                   <span class="price"><span class="prefix"></span><span class="woocommerce-Price-amount amount"><i class="fa fa-inr" aria-hidden="true"></i> 150<span class="decimals">.00</span></span></span>
                                                   <a rel="nofollow" href="order.html" data-quantity="1" data-product_id="231" data-product_sku="" class="button product_type_variable add_to_cart_button ajax_add_to_cart">Order Now</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div data-section="ordering-steps" class="section dark" style="background-image: url(wp-content/uploads/2016/09/dark-pattern.jpg)">
                           <img src="wp-content/uploads/2016/09/leaves.png" alt="leaves" class="leaves"/><img src="wp-content/uploads/2016/09/nuts.png" alt="nuts" class="nuts"/>
                           <div class="container">
                              <h2 class="title">Easy 3 Step Order</h2>
                              <div class="order-step-wrapper row">
                                 <div class="arrow solid" style="background-image: url(wp-content/uploads/2016/09/solid-arrow.png)"></div>
                                 <div class="arrow dotted" style="background-image: url(wp-content/uploads/2016/09/dotted-arrow.png)"></div>
                                 <div class="order-step-inner">
                                    <div class="col-sm-4 order-step">
                                       <div class="order-step-border">
                                          <div class="order-step-number">1</div>
                                          <img src="wp-content/uploads/2016/09/restaurant.png" alt="restaurant" class="order-step-icon"/>
                                       </div>
                                       <h4>Enter Mobile Number</h4>
                                       <p>We&#8217;ve got your covered with menus from several locations online.</p>
                                    </div>
                                    <div class="col-sm-4 order-step">
                                       <div class="order-step-border">
                                          <div class="order-step-number">2</div>
                                          <img src="wp-content/uploads/2016/09/dish.png" alt="dish" class="order-step-icon"/>
                                       </div>
                                       <h4>Order Food</h4>
                                       <p>We&#8217;ve got your covered with menus from over 345 delivery restaurants online.</p>
                                    </div>
                                    <div class="col-sm-4 order-step">
                                       <div class="order-step-border">
                                          <div class="order-step-number">3</div>
                                          <img src="wp-content/uploads/2016/09/delivery.png" alt="delivery" class="order-step-icon"/>
                                       </div>
                                       <h4>Delivery or Take-out</h4>
                                       <p>Get your food delivered! And enjoy your meal! Pay online on pickup or delivery</p>
                                    </div>
                                 </div>
                              </div>
                              <p class="subtitle">Pay by Cash on delivery, Card</p>
                           </div>
                           <div class="city" style="background-image: url(wp-content/uploads/2016/09/city.png)"></div>
                        </div>
                        <!--<div data-section="restaurants" class="section profile-tabs">
                           <div class="container">
                              <h3>Featured restaurants</h3>
                              <div data-element="shortcode: 9117ac1bfa44aae0987492ceb7647d85">
                                 <div class="posts-list-wrapper horizontal-list-2">
                                    <div class="list-filter">
                                       <div class="filter-term active">All</div>
                                       <div class="filter-term" data-term="beverages">Beverages</div>
                                       <div class="filter-term" data-term="burgers">Burgers</div>
                                       <div class="filter-term" data-term="pasta">Pasta</div>
                                       <div class="filter-term" data-term="pizza">Pizza</div>
                                       <div class="filter-term" data-term="sandwiches">Sandwiches</div>
                                       <div class="filter-term" data-term="seafood">Seafood</div>
                                       <div class="filter-term" data-term="soup-and-salads">Soup and salads</div>
                                    </div>
                                    <div class="posts-list profile-item  horizontal-list-2" data-contents-per-item="1" data-width="108" data-height="108" data-stagePadding="0" data-margin="0" data-full-width="" data-center="" data-loop="">
                                       <div class="filterable beverages burgers pasta pizza sandwiches seafood soup-and-salads">
                                          <div class="entry profile-item post-58 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-delivery delivery-type-pickup">
                                             <script type="application/json" data-post="58">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":58,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/central-caffe-pizzeria\/","title":"Central caffe pizzeria","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/central-caffe-pizzeria\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/x.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","latitude":["39.945843"],"longitude":["-75.161657"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/central-caffe-pizzeria/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/x.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/central-caffe-pizzeria/index.html" rel="bookmark">Central caffe pizzeria</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 5 out of 5">
                                                      <span style="width:100%">
                                                      <strong class="rating">5</strong> out of <span>5</span>                        based on <span class="rating">1</span> user rating                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/central-caffe-pizzeria/index.html#comments"><span class="count">3</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="filterable beverages burgers pasta pizza sandwiches seafood soup-and-salads">
                                          <div class="entry profile-item post-111 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-delivery delivery-type-pickup">
                                             <script type="application/json" data-post="111">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":111,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/central-pizzeria\/","title":"Central pizzeria","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/central-pizzeria\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/x1.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","latitude":["40.464574"],"longitude":["-74.361531"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/central-pizzeria/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/x1.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/central-pizzeria/index.html" rel="bookmark">Central pizzeria</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 4.5 out of 5">
                                                      <span style="width:90%">
                                                      <strong class="rating">4.5</strong> out of <span>5</span>                        based on <span class="rating">2</span> user ratings                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/central-pizzeria/index.html#comments"><span class="count">7</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="filterable beverages burgers pasta pizza seafood">
                                          <div class="entry profile-item post-48 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-delivery delivery-type-pickup">
                                             <script type="application/json" data-post="48">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":48,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/fabio-al-porto-ristorante\/","title":"Fabio al porto ristorante","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/fabio-al-porto-ristorante\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/fabio.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","longitude":["-72.970942"],"latitude":["40.824393"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/fabio-al-porto-ristorante/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/fabio-108x108.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/fabio-al-porto-ristorante/index.html" rel="bookmark">Fabio al porto ristorante</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 5 out of 5">
                                                      <span style="width:100%">
                                                      <strong class="rating">5</strong> out of <span>5</span>                        based on <span class="rating">1</span> user rating                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/fabio-al-porto-ristorante/index.html#comments"><span class="count">11</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="filterable beverages burgers pasta pizza sandwiches seafood soup-and-salads">
                                          <div class="entry profile-item post-62 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-delivery">
                                             <script type="application/json" data-post="62">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":62,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/jagnetina-na-raznju\/","title":"Jagnetina na raznju","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/jagnetina-na-raznju\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/x3.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","latitude":["39.929360"],"longitude":["-75.185656"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/jagnetina-na-raznju/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/x3.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/jagnetina-na-raznju/index.html" rel="bookmark">Jagnetina na raznju</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 4 out of 5">
                                                      <span style="width:80%">
                                                      <strong class="rating">4</strong> out of <span>5</span>                        based on <span class="rating">1</span> user rating                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/jagnetina-na-raznju/index.html#comments"><span class="count">2</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="filterable beverages burgers pasta pizza sandwiches seafood soup-and-salads">
                                          <div class="entry profile-item post-72 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-pickup">
                                             <script type="application/json" data-post="72">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":72,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/maenaam-thai-restaurant\/","title":"Maenaam Thai Restaurant","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/maenaam-thai-restaurant\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/xxx.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","latitude":["38.864007"],"longitude":["-76.938318"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/maenaam-thai-restaurant/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/xxx.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/maenaam-thai-restaurant/index.html" rel="bookmark">Maenaam Thai Restaurant</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 5 out of 5">
                                                      <span style="width:100%">
                                                      <strong class="rating">5</strong> out of <span>5</span>                        based on <span class="rating">1</span> user rating                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/maenaam-thai-restaurant/index.html#comments"><span class="count">5</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="filterable beverages burgers pasta pizza sandwiches seafood soup-and-salads">
                                          <div class="entry profile-item post-51 azl_profile type-azl_profile status-publish has-post-thumbnail hentry delivery-type-delivery delivery-type-pickup">
                                             <script type="application/json" data-post="51">{"thumbnail":"","extra":"","meta":"","header":"","footer":"","data":"","id":51,"marker_image":"","url":"http:\/\/azexo.com\/foodpicky\/profile\/tratoria-due-sarajevo\/","title":"Tratoria due Sarajevo","description":"","image":"                \n    <a href=\"http:\/\/azexo.com\/foodpicky\/profile\/tratoria-due-sarajevo\/\">\n                                    <div class=\"image \" style='background-image: url(\"http:\/\/azexo.com\/foodpicky\/wp-content\/uploads\/2016\/09\/tratoria.jpg\"); height: 1024px;' data-width=\"1024\" data-height=\"1024\">\n                <\/div>\n                        <\/a>\n    ","latitude":["40.877289"],"longitude":["-73.146796"]}</script>                                                            
                                             <div class="entry-thumbnail">
                                                <a href="profile/tratoria-due-sarajevo/index.html">
                                                   <div class="image " style='background-image: url("wp-content/uploads/2016/09/tratoria-108x108.jpg"); height: 108px;' data-width="108" data-height="108">
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="entry-data">
                                                <div class="entry-header">
                                                   <h2 class="entry-title"><a href="profile/tratoria-due-sarajevo/index.html" rel="bookmark">Tratoria due Sarajevo</a></h2>
                                                </div>
                                                <div class="entry-summary">Burgers, American, Sandwiches, Fast Food, BBQ, Breakfast</div>
                                                <div class="entry-footer">
                                                   <span class="meta-field address ">  <span class="value">68 5th Avenue New York <span class="units"></span></span></span>                
                                                   <div class="star-rating" title="Rated 4 out of 5">
                                                      <span style="width:80%">
                                                      <strong class="rating">4</strong> out of <span>5</span>                        based on <span class="rating">1</span> user rating                    </span>
                                                   </div>
                                                   <span class="reviews">
                                                   <a href="profile/tratoria-due-sarajevo/index.html#comments"><span class="count">5</span><span class="label">Reviews</span></a>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                        <div data-section="application" class="section app-section">
                           <div class="container">
                              <div class="row">
                                    <div class="col-md-4 col-md-offset-1 col-sm-6">
                                        <img src="wp-content/uploads/2016/09/app.png" alt="application" class="app"/>
                                    </div>
                                 <div class="col-md-5 col-md-offset-1 col-sm-6">
                                    <h2>The Best Tiffin full of Food</h2>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--<div class="contact" data-group="content">
                            <div class="con1">
                                <div class="azen-content-get">
                                    <div class="azen-content-title">
                                        Contacts                        
                                    </div>
                                    <div class="azen-content-fields" data-cloneable="">
                                        <div>
                                            <span>Visit us</span>
                                            <span class="az-inline">Sarajevo, Cengic vila, 12</span>
                                        </div>
                                        <div>
                                            <span>Say hello by phone </span>
                                            <span class="az-inline">
                                            +387 080 21201
                                            </span>
                                        </div>
                                        <div>
                                            <span>
                                            Or by email</span>
                                            <a href="#" class="az-inline">hello@azexo.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="azen-content-wrapper  az-column">
                                <div class="azen-form-title">Drop us a line
                                </div>
                                <form action="#" method="post" data-cfdb="[cfdb-save-form-post]" class="azen-food-form-white-container" data-group="form" data-white="false">
                                    <input type="hidden" name="form_title" value="contact">
                                    <div data-cloneable="">
                                        <div class="azen-food-form-white-field">
                                            <input name="name" type="text" value="" placeholder="Your name">
                                        </div>
                                        <div class="azen-food-form-white-field">
                                            <input name="phone" type="text" value="" placeholder="Phone or email"></div>
                                            <div class="azen-food-form-white-field">
                                                <textarea name="message" cols="45" rows="8" placeholder="Message"></textarea>
                                            </div>
                                            <div class="azen-food-form-white-field">
                                                <button type="submit">Send</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>-->
                        <!-- Modal -->
                            
                     <!-- .entry-content -->
                  </div>
                  <!-- #post -->
               </div>
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                      <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
               <!-- #content -->
               
            </div>
            <!-- #primary -->
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Customer Information</h4>
                        </div>
                        <div class="modal-body">

                       <h1>Customer :</h1>
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
                       <div class="tab" id="successs">
                       <span id="hiden">
                      Sms Already Send!<br> Please Check OTP NO Your Mobile</span>
                       <p><input type="text" placeholder="OTP Check" oninput="this.className = ''" minlength="6" maxlength="6" name="cus_otp" id="cus_otp" required onkeyup="selectValue(this.value);"></p>
                       <span id="errorr"></span>
                        
                       </div>
                     
                       
                     
                       <div class="tab">
                       
                         <p><input type="text" placeholder="Full name..." oninput="this.className = ''" name="fname" id="fname" required></p>
                           <span style="color: red; text-align: center">Not mendatory Email Id</span>
                          <p><input type="email" id="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                        
                         <p><textarea placeholder="Street Address " oninput="this.className = ''" id="address" name="address" required></textarea></p>
                          <p><input type="text" placeholder="City" oninput="this.className = ''" name="city" id="city" required></p>
                        <p><input type="text" id="state" placeholder=" State / Province" oninput="this.className = ''" name="state" required></p>
                        <p><input type="text" id="country" placeholder=" Country" oninput="this.className = ''" name="country" required></p>

                        <p><input type="text" placeholder=" Postal / Zip Code" oninput="this.className = ''" id="zipcode" name="zipcode" required></p>
                       </div>
                       <div class="tab">Order Date:
                         
                         <p>
                          <div class="handle-counter" id="handleCounter">
                          <span>Special Thali</span>
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
                          </p>
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
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                  
                </div>
            </div>
            
</div>
 <?php include 'footer.php';?>
 <?php if(@$_REQUEST['msg']!==''){?>
<script type="text/javascript">
     /* $(document).ready(function () {
        $('#myModal').load(function () {
            $('#myModal').modal('show');
        });
      });*/
</script>
<?php }?>
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
            if(res==1)
            {
              $('#empModal').modal('show');
            }else{
               alert('Mobile no is wrong');
               $('#empModal').hide();
            }
           }
         });
});
</script>
<script type="text/javascript">
function selectValue(erc){
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
               $('#empModal').hide();
            }
           }
         });
  }
  else{
    $('#successs').html('Otp no is wrong');
  }
  }
</script>

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
  $("#cus_otp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errorr").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});

</script>
