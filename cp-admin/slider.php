<?php include'header.php';
include'../config.php';

if($_REQUEST['del'])
{
  $val=$_REQUEST['del'];
  
  $sql1="DELETE FROM `slider` WHERE slider_id='$val'";
  $query1=mysqli_query($db, $sql1) or die(mysqli_error());
  if($query1)
  {
    ob_start();
    header("Location:slider.php?msg=Slider deleted successfull!");
  } else {
    $error="Slider deleted Not successfull!";
  }
}else{ echo ""; }
$sql="SELECT * FROM `slider`";
$query=mysqli_query($db,$sql) or die('database not connect');
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Slider</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">
              <a class="btn btn-primary" href="slider-add.php">Slider Add</a></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Slider Name</th>
                      <th>Slider Image</th>
                      <th>Slider Content</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php $i=1;while($data=mysqli_fetch_assoc($query)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $data['slider_name'];?></td>
                      <td><img src="../sliders/<?php echo $data['slider_image'];?>" height="100" width="100"></td>
                      <td><?php echo $data['slider_content'];?></td>
                      <td><a class="btn btn-info" href="slider-edit.php?edit=<?php echo $data['slider_id'];?>"><i class="fas fa-pen" aria-hidden="true"></i></a><a class="btn btn-danger" href="slider.php?del=<?php echo $data['slider_id'];?>"><i class="fas fa-trash-alt" aria-hidden="true"></i></a></td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php include'footer.php';?>