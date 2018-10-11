 <?php   
 session_start();  
 include'config.php'; 
  
include'header.php';
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

 
           <div class="container" style="width:700px;">  
            
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($db, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <form action="shopping-cart.php" method="post">
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="35%">Item Name</th>  
                               <th width="25%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><input type="text" name="title[]" value="<?php echo $values["item_name"]; ?>" size="2" id="title" class="form-control" readonly  "/></td>  
                               <td>
                               <div class="col-md-12 handle-counter" id="handleCounter" style="display: flex;">
                                         <button type="button" class="counter-minus btn btn-info" onclick="changeMinus('<?php echo $values['item_id'];?>','<?php echo $values['item_price'] ?>','<?php echo $values['item_quantity'] ?>')">-</button>
                                        <input type="text" name="quantity[]" value="<?php echo $values["item_quantity"] ;?>" size="2" id="quantity" class="form-control" readonly  "/>
                                         <button type="button" class="counter-plus btn btn-info" onclick="changeplus('<?php echo $values['item_id'];?>','<?php echo $values['item_price'] ?>','<?php echo $values['item_quantity'] ?>')">+</button>
                                        </div></td>  
                               <td>&#8377; <?php echo $values["item_price"]; ?></td>  
                               <td>&#8377; <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><button onclick="selectProduct('<?php echo $values["item_id"]; ?>');"><span class="text-danger">Remove</span></button></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">&#8377; <input type="text" name="total_amount" value="<?php echo number_format($total, 2); ?>" size="2" id="total_amount" class="form-control" readonly  "/>
                               </td>  
                               <td><input type="submit" name="submit" value="Pay Now" class="btn btn-success"></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
                </form> 
           </div>  
 <?php include'footer.php';?>
 <script src="app/js/handleCounter.js"></script>
 <script type="text/javascript">
    function selectProduct(arg)
    {
        $.ajax({
            url: 'cart.php',
            type: 'POST',
            data: {'action': 'delete','id':arg },
            success: function(res)
           {
                if(res)
                {
                  alert(res);
                  location.reload(true);
                }else{
                   alert('Thali not added');
                }
           }
         });  
    }
</script>

 
    <script>
       /* $(function ($) {
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
         
        }*/
        /*function changeValue(id)
        {
            setTimeout(function(){  test(); }, 0);
            function test(){
                var price=$('#total1').val();
            var qut =$('#quantity').val();
            
            var t=parseInt(price * qut);
             $('#total_price').val(t);
            $('#total').val(t);
            }
            
        }*/  
        function changeplus(id,price,qut)
        {
           //alert(id+','+qut+','+price)
          $.ajax({
            url: 'cart_update.php',
            type: 'POST',
            data: { item_id: id, price:price, item_quantity:qut, update:'plus' },
            success: function(res)
           {
                  if(res)
                  {
                    alert(res);
                    location.reload(true);
                  }else{
                     alert('Thali not Add');
                  }
             }
          });
          
          
        } 
        function changeMinus(id,price,qut)
        {
          //alert(id+','+qut+','+price)
          $.ajax({
            url: 'cart_update.php',
            type: 'POST',
            data: { item_id: id, price:price, item_quantity:qut, update:'minus' },
            success: function(res)
           {
                  alert(res);

                if(res)
                {
                  location.reload(true);
                }else{
                   alert('Thali not Minus');
                }
           }
          });
        }
    </script>

