<?php include'header.php';
include'../config.php';
if($_REQUEST['submit'])
{
  $name=$_POST['slider_name'];
  $content=$_POST['slider_content'];
  if($_FILES['slider_image']['name'])
  {
    $image=rand(99999,10000).'-'.$_FILES['slider_image']['name'];
    $loc=$_FILES['slider_image']['tmp_name'];
    move_uploaded_file($loc,'../sliders/'.$image);
    $url=$_SERVER['REMOTE_ADDR'].'/sliders/'.$image;
  }
  $sql="INSERT INTO `slider`(`slider_name`, `slider_image`, `slider_content`,`img_url`) VALUES ('$name','$image','$content','$url')";
  $query=mysqli_query($db, $sql) or die(mysqli_error());
  if($query){
    ob_start();
  header("Location:slider.php?msg=Slider Saved successfull!");
  }else{
  $error="Slider Added Not successfull!";
  }
}


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
              Slider Add <span style="color: red;" class="pull-right"><?php echo @$error;?></span></div>
           
            <div class="card-footer small text-muted">
               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Slider </div>
        <div class="card-body">
           <form action="#" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="slider_name" id="inputEmail" class="form-control" placeholder="Slider" required>
                <label for="inputEmail">Slider Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="file" id="inputEmail" name="slider_image" class="form-control" placeholder="Slider Image" required>
                <label for="inputEmail">Slider Image</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="slider_content" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Slider Content</label>
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