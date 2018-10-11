<?php include'header.php';
include'../config.php';
if($_REQUEST['edit'])
{
  $id=$_REQUEST['edit'];
  $sqli="SELECT * FROM thali where id='$id'";
  $query1=mysqli_query($db, $sqli) or die(mysqli_error());
  $data=mysqli_fetch_assoc($query1);
}
else{ echo ""; }
if($_REQUEST['submit'])
{
  $val=$_REQUEST['id'];
  $name=$_POST['title'];
  $content=$_POST['description'];
  $price=$_POST['price'];
  $discount=$_POST['discount'];
  $total=$_POST['total'];
  if($_FILES['image']['name'])
  {
    $image=rand(99999,10000).'-'.$_FILES['image']['name'];
    $loc=$_FILES['image']['tmp_name'];
    move_uploaded_file($loc,'../thalis/'.$image);
    $url=$_SERVER['REMOTE_ADDR'].'/thalis/'.$image;
  }
  else{
    $image=$_REQUEST['imagess'];
  }
  $sql="UPDATE `thali` SET `title`='$name',`img_url`='$url',`description`='$content',`price`='$price',`image`='$image',`discount`='$discount',`total_price`='$total' WHERE id='$val'";
  $query=mysqli_query($db, $sql) or die(mysqli_error());
  if($query)
  {
    ob_start();
    header("Location:thali.php?msg=Thali Update successfull!");
  } else {
    $error="Slider Added Not successfull!";
  }
}else{ echo ""; }




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
              Thali Update <span style="color: red;" class="pull-right"><?php echo @$error;?></span></div>
           
            <div class="card-footer small text-muted">
               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Thali </div>
        <div class="card-body">
           <form action="#" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="title" id="inputEmail" class="form-control" placeholder="Thali" value="<?php echo  $data['title']?>">
                <label for="inputEmail">Thali Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="file" id="inputEmail" name="image" class="form-control" placeholder="Thali Image">
                <label for="inputEmail">Thali Image</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="description" id="inputEmail" class="form-control" placeholder="Description"  value="<?php echo $data['description']?>">
                <label for="inputEmail">Thali Description</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="price" id="cBalance"  class="form-control" placeholder="Price" value="<?php echo $data['price']?>">
                <label for="inputEmail">Thali Price</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="discount" id="chDiscount" class="form-control" placeholder="Discount" value="<?php echo $data['discount']?>">
                <label for="inputEmail">Thali Discount</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="total" id="total" class="form-control" placeholder="Total" value="<?php echo $data['total_price']?>" readonly>
                <label for="inputEmail">Thali Total Price</label>
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <input type="hidden" name="imagess" value="<?php echo $data['image']?>">
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
</script>