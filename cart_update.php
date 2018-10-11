<?php
//print_r($_POST); die;

 session_start();  
 include'config.php';
  //data: {'item_id': id,'price':price,'item_quantity':qut,'update':'plus'},
 if($_POST['update'])
 {
    if($_POST['update']=='minus')
    {
       echo "dhfdsjhkf";
      foreach($_SESSION["shopping_cart"] as $keys => $values)  
       {  
            if($values["item_id"] == $_POST["item_id"])  
            {  
                 echo $_SESSION["shopping_cart"][$keys]['item_quantity']--;  
                 echo 'Quantity Removed';  
                   
            }  
       }
    } else {
      foreach($_SESSION["shopping_cart"] as $keys => $values)  
       {  
            if($values["item_id"] == $_POST["item_id"])  
            {  
                 $_SESSION["shopping_cart"][$keys]['item_quantity']++;  
                 echo 'Quantity Addedd';  
                 //echo '<script>window.location="index.php"</script>';  
            }  
       }
    }
 }