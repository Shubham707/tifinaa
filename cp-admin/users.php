<?php include'header.php';
include'../config.php';

if($_REQUEST['del']){
  $id=$_REQUEST['del'];
  $sqli="DELETE FROM `customers` WHERE `customers`.`cus_id` = '$id'";
  $query1=mysqli_query($db,$sqli) or die('database not connect');
  if($query1)
  {
    $success="Order is deleted";
  }
}
$sql="SELECT * FROM `customers`";
$query=mysqli_query($db,$sql) or die('database not connect');

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Users</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Customer <span style="color:green; text-align: center;"><?php echo @$success;?></span></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Name</th>
                      <th>Mobile No</th>
                      <th>Address</th>
                      <th>Order</th>
                      <th>Order Date</th>
                      <th>OTP Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; while($data=mysqli_fetch_assoc($query)){ ?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $data['cus_name'];?></td>
                      <td><?php echo $data['cus_mobile'];?></td>
                      <td><?php echo $data['cus_address'];?></td>
                      <td><?php echo $data['cus_order'];?></td>
                      <td><?php echo $data['cus_date'];?></td>
                      <td><?php echo $data['otp_status'];?></td>
                      <td><a class="btn btn-danger" href="users.php?del=<?php echo $data['cus_id'];?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <!-- /.container-fluid -->
<?php include'footer.php';?>