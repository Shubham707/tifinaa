 <?php  
//print_r($_POST);die;

 session_start();  
 include'config.php'; 
 if(isset($_POST["add_to_cart"]))  
 {  
          $id=$_POST["add_to_cart"]; 
          $sql="SELECT * FROM thali WHERE id='$id'";
         $query=mysqli_query($db,$sql) or die('database not connected!');
         $data=mysqli_fetch_assoc($query);
         $rand='sku-'.rand(99999,55555);
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                    $item_array = array(
                     'item_sku'               =>     $rand,   
                     'item_id'               =>     $data["id"],  
                     'item_name'               =>     $data["title"],  
                     'item_price'          =>     $data["price"],  
                     'item_quantity'          =>     1  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array; 
                echo "Add thali"; 
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           } 
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $data["id"],  
                'item_name'               =>     $data["title"],  
                'item_price'          =>     $data["price"],  
                'item_quantity'          =>     1  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      } 
}  
if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_sku"] == $_POST["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo 'Item Removed';  
                     //echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 } 

 ?>  