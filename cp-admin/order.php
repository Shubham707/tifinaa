<?php include'header.php';
include'../config.php';

if($_REQUEST['del'])
{
  $val=$_REQUEST['del'];
  
  $sql1="DELETE FROM `order` WHERE `order`.`order_id`='$val'";
  $query1=mysqli_query($db, $sql1) or die(mysqli_error());
  if($query1)
  {
    ob_start();
    header("Location:order.php?msg=Order deleted successfull!");
  } else {
    $error="Order deleted Not successfull!";
  }
} else { echo ""; }

ob_start();

if($_REQUEST['evt']){
  $id=$_REQUEST['evt'];
  $sql="UPDATE `order` SET `deliver_start`='1' WHERE order_id='$id'";
  $query=mysqli_query($db,$sql) or die('database not connected!');
  if($quesry==1)
  {
    header('locaton:order.php');
  }
  else{
    header('locaton:order.php');
  }
}

$sql="SELECT * FROM `order` order by deliver_start ASC";
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
              <a class="btn btn-primary" href="order-add.php">Order Add</a></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Product Id</th>
                      <th>Order Name</th>
                      <th>Order Price</th>
                      <th>Order Total</th>
                      <td>Mobile NO</td>
                      <td>Address</td>
                      <th>Order Content</th>
                      <th>Time</th>
                      <th>Order Deliver</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php $i=1;while($data=mysqli_fetch_assoc($query)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $data['product_id'];?></td>
                      <td><?php echo $data['order_product_name'];?></td>
                      <td><?php echo $data['order_price'];?></td>
                      <td><?php echo $data['order_total'];?></td>
                      <td><?php echo $data['order_mobile'];?></td>
                      <td><?php echo $data['order_address'];?></td>
                      <td><?php echo $data['slider_content'];?></td>
                      <td><?php echo $data['arrivel_time'];?></td>
                      <td><?php if($data['deliver_start']==1){?>
                        <button type="button" class="btn btn-success">Deliver</button>
                        <?php }else{ ?>
                        <button type="button" onclick="updateOrder('<?php echo $data['order_id'];?>');" class="btn btn-danger">Order</button>
                        <?php }?>
                            
                      </td>
                      <td><!-- <a class="btn btn-info" href="oder-edit.php?edit=<?php echo $data['order_id'];?>"><i class="fas fa-pen" aria-hidden="true"></i></a> --><a class="btn btn-danger" href="order.php?del=<?php echo $data['order_id'];?>"><i class="fas fa-trash-alt" aria-hidden="true"></i></a></td>
                      
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
<script type="text/javascript">
function updateOrder(evt){
  window.location.href="order.php?evt="+evt;
}
</script>