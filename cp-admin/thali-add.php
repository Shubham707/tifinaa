<?php include'header.php';
include'../config.php';
if($_REQUEST['submit'])
{
  
  $name=$_POST['title'];
  $price=$_POST['price'];
  $discount=$_POST['discount'];
  $total=$_POST['total'];
  $content=$_POST['description'];
  if($_FILES['image']['name'])
  {
    $image=rand(99999,10000).'-'.$_FILES['image']['name'];
    $loc=$_FILES['image']['tmp_name'];
    move_uploaded_file($loc,'../thalis/'.$image);
    $url=$_SERVER['REMOTE_ADDR'].'/thalis/'.$image;
  }
  $sql="INSERT INTO `thali`(`title`,  `image`,`img_url`,`description`, `price`, `discount`, `total_price`) VALUES ('$name','$image','$url,'$content','$price','$discount','$total')";
  $query=mysqli_query($db, $sql) or die(mysqli_error());
  if($query){
    ob_start();
  header("Location:thali.php?msg=Thali Saved successfull!");
  }else{
  $error="Thali Added Not successfull!";
  }
}


?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Thali</li>
          </ol> -->

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">
              Thali Add <span style="color: red;" class="pull-right"><?php echo @$error;?></span></div>
           
            <div class="card-footer small text-muted">
               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Thali </div>
        <div class="card-body">
           <form action="#" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="title" id="inputEmail" class="form-control" placeholder="Thali" required>
                <label for="inputEmail">Thali Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="file" id="inputEmail" name="image" class="form-control" placeholder="Thali Image" required>
                <label for="inputEmail">Thali Image</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="description" id="inputEmail" class="form-control" placeholder="Description" required>
                <label for="inputEmail">Thali Description</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="price" id="cBalance"  class="form-control" placeholder="Price" required>
                <label for="inputEmail">Thali Price</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="discount" id="chDiscount" class="form-control" placeholder="Discount" required>
                <label for="inputEmail">Thali Discount</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="total" id="total" class="form-control" placeholder="Total" required readonly>
                <label for="inputEmail">Thali Total Price</label>
              </div>
            </div>
            
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
          </form>
          <div class="text-center">
          </div>
        </div>
      </div>
    </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php include'footer.php';?>
<script type="text/javascript">

$(document).on("change keyup blur", "#chDiscount", function() {
var main = $('#cBalance').val();
var disc = $('#chDiscount').val();
var dec = (disc/100).toFixed(3); //its convert 10 into 0.10
var mult = main*dec; // gives the value for subtract from main value
var discont = main-mult;
$('#total').val(discont);
});
</script>
