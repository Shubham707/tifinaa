<?php include'header.php';
include'../config.php';
if($_REQUEST['edit'])
{
  $id=$_REQUEST['edit'];
  $sqli="SELECT * FROM slider where slider_id='$id'";
  $query1=mysqli_query($db, $sqli) or die(mysqli_error());
  $data=mysqli_fetch_assoc($query1);
}
else{ echo ""; }
if($_REQUEST['submit'])
{
  $val=$_REQUEST['slider_id'];
  $name=$_POST['slider_name'];
  $content=$_POST['slider_content'];
  if($_FILES['slider_image']['name'])
  {
    $image=rand(99999,10000).'-'.$_FILES['slider_image']['name'];
    $loc=$_FILES['slider_image']['tmp_name'];
    move_uploaded_file($loc,'../sliders/'.$image);
     $url=$_SERVER['REMOTE_ADDR'].'/sliders/'.$image;
  }
  else{
    $image=$_REQUEST['image'];
  }
  $sql="UPDATE `slider` SET `slider_name`='$name',`img_url`='$url',`slider_image`='$image',`slider_content`='$content' WHERE slider_id='$val'";
  $query=mysqli_query($db, $sql) or die(mysqli_error());
  if($query)
  {
    ob_start();
    header("Location:slider.php?msg=Slider Update successfull!");
  } else {
    $error="Slider Added Not successfull!";
  }
}else{ echo ""; }




?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Slider</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">
              Slider Edit <span style="color: red;" class="pull-right"><?php echo @$error;?></span></div>
           
            <div class="card-footer small text-muted">
               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Slider </div>
        <div class="card-body">
           <form action="#" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="slider_name" id="inputEmail" class="form-control" placeholder="Slider" value="<?php echo $data['slider_name']?>">
                <label for="inputEmail">Slider Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="file" id="inputEmail" name="slider_image" class="form-control" placeholder="Slider Image">
                <label for="inputEmail">Slider Image</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="slider_content" id="inputEmail" class="form-control" placeholder="Email address"  value="<?php echo $data['slider_content']?>">
                <label for="inputEmail">Slider Content</label>
              </div>
            </div>
            <input type="hidden"  name="image" value="<?php echo $data['slider_image']?>">
            <input type="hidden"  name="slider_id" value="<?php echo $data['slider_id']?>">
            
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