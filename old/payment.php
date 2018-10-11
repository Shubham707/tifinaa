<?php include'header.php'; 
include'config.php';
$thali=str_replace('%20',' ',$_REQUEST['thali']);
if($_REQUEST['thali'])
{
echo $sqli="SELECT * FROM thali WHERE title='$thali'";
$res=mysqli_query($db,$sqli) or die('database not comnnect');
$value=mysqli_fetch_assoc($res);
}
else{
$error="data not found";
}
?>
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
<h2 class="title">Payment Hamara Tiffin</h2>
<p class="subtitle">24x7 get Order your Tiffin</p>
<div class="row">
<div class="col-md-8 about">
<form method="post" class="azqf-query-form filter_form" data-name="filter_form" action="track/form.php">
<span class="toggle"></span>
<div class="wrapper">

<div class="section">
   <input id="uniqid0" type="checkbox" style="position: absolute; clip: rect(0, 0, 0, 0);">
   <div></div>
   <label for="uniqid0">Payment Information :</label>
   <div class="row">
     <div class="col-md-4">
        <div class="azen-food-form-white-field">
         <input name="cus_name" type="text"  placeholder="Your name" required>
      </div>
     </div>
     <div class="col-md-4">
         <div class="azen-food-form-white-field">
            <input name="cus_email" type="text"  placeholder=" Email" required>
         </div>
     </div>
     <div class="col-md-4"> 
      <div class="azen-food-form-white-field">
         <input name="cus_mobile" type="text"  placeholder="Phone" required>
      </div>
   </div>

   </div>
</div>

<div class="section">
   <input id="uniqid2" type="checkbox" style="position: absolute; clip: rect(0, 0, 0, 0);">
   <div></div>
<label for="uniqid2">Order Your Thali & Quantity</label>
   
   <div class="row">

     <div class="col-md-4">
        <div class="handle-counter" id="handleCounter">                            
            <fieldset >
              <div class="form-group">
                <label class="control-label">Special Thali :</label>
                <?php if($value['title']==$thali){?>
                <input id="colorful" name="quantity" class="form-control" type="number" value="1" min="1" max="90" value="1" />
                <?php } else { ?>
                 <input id="colorful" name="quantity" class="form-control" type="number"  value="0" min="1" max="90"  />
                <?php }?>
              </div>
            </fieldset>
         </div>
     </div>
     <div class="col-md-4">
         <div class="handle-counter" id="handleCounter">
            <fieldset>
              <div class="form-group">
                <label class="control-label">Thali Price :</label>
                  <input  class="form-control" type="text" name="price" id="price" value="<?php echo $value['price']?>" />
              </div>
            </fieldset>
          </div>
     </div>
     <div class="col-md-4">
        <div class="handle-counter" id="handleCounter">
            <fieldset >
              <div class="form-group">
                <label class="control-label">Thali Total Price :</label>
                
                <input  class="form-control" type="text" name="total_price" id="total_price" value="<?php echo $value['price']?>" />
            
              </div>
            </fieldset>
          </div>
     </div>
   </div>
</div>
<div class="section">
   <input id="uniqid3" type="checkbox" style="position: absolute; clip: rect(0, 0, 0, 0);">
   <div></div>
   <label for="uniqid3">Customer Information</label>
   <div class="">
      <div class="row">
        <div class="col-md-12">
         <textarea placeholder="Street Address " oninput="this.className = ''" id="address" name="address" required></textarea>
        <br></div>
        <div class="col-md-6">
           <input type="text" placeholder="City" oninput="this.className = ''" name="city" id="city" required > 
        </div>
        <div class="col-md-6">
           <input type="text" id="state" placeholder=" State / Province" oninput="this.className = ''" name="state" required ">
        <br></div>
        <div class="col-md-6">
           <input type="text" id="country" placeholder=" Country" oninput="this.className = ''" name="country" required >
        </div>
        <div class="col-md-6">
           <input type="text" placeholder=" Postal / Zip Code" oninput="this.className = ''" id="zipcode" name="zipcode" required ">
        </div>
      </div> 
   </div>
   <div class="">
    <div class="row">
        <div class="col-md-12">
         <textarea placeholder="Extra on order" oninput="this.className = ''" id="extra" name="extra" required></textarea>
        <br></div>
        
        <div class="col-md-3">
           <input type="radio" placeholder="Cash" oninput="this.className = ''" id="zipcode" name="cash" value="cash">
        </div>
        <div class="col-md-3">
           <input type="radio" placeholder="Online" oninput="this.className = ''" id="Online" name="cash" value="online">
        </div>
      </div> 
   </div>
</div>
<div class="">
<!--    <input type="hidden" name="post_type" value="product">
   <input type="hidden" name="role" value="vendor"> -->
   <div class="submit"><input type="submit" value="Order Your Thali"></div>
</div>
</div>
</form>

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
<?php $sql="select * from thali";
$query=mysqli_query($db,$sql) or die('database not connect');
while($data=mysqli_fetch_assoc($query)){
?>
<div class="shop-product post-172 product type-product status-publish has-post-thumbnail product_cat-burgers product_tag-alcohol product_tag-beer product_tag-health  instock shipping-taxable purchasable product-type-variable has-children">
<div class="entry" itemscope itemtype="#">
   <div class="entry-thumbnail">
      <a href="#">
         <img class="image lazy " src="thalis/<?php echo $data['image'];?>" style="height: 215px;" data-width="360" data-height="215">
         
      </a>
   </div>
   <div class="entry-data">
      <div class="entry-header">
         <a class="entry-title" href="#">
            <h3 itemprop="name"><?php echo $data['title'];?></h3>
         </a>
      </div>
      <div class="entry-summary"><?php echo $data['description'];?></div>
      <div class="entry-footer basic">
         <span class="price"><span class="prefix"></span><span class="woocommerce-Price-amount amount"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $data['total_price'];?><span class="decimals">.00</span></span></span>
         <a rel="nofollow" href="payment.php?thali=<?php echo $data['id'];?>" data-quantity="1" data-product_id="228" data-product_sku="" class="button product_type_variable add_to_cart_button ajax_add_to_cart">Order Now</a>
      </div>
   </div>
</div>
</div>
<?php }?>
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
<?php include'footer.php'; ?>
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
<script>
$("[name='checkbox2']").change(function() {
if(!confirm('Do you wanna cancel me!')) {
this.checked = true;
}
});

$('#after').bootstrapNumber();
$('#colorful').bootstrapNumber({
upClass: '#a8518a',
downClass: 'danger'
});
</script>
<script type="text/javascript">

$(document).on("change keyup blur", "#colorful", function() {
var main = $('#price').val() * $(this).val();
$('#total_price').val(main);
});
</script>