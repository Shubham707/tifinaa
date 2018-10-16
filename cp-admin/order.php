<?php include'header.php';
include'../config.php';

if($_REQUEST['del'])
{
  $val=$_REQUEST['del'];
  
  $sql1="DELETE FROM `orders` WHERE `orders`.`id`='$val'";
  $query1=mysqli_query($db, $sql1) or die(mysqli_error());
  if($query1)
  {
    ob_start();
    header("Location:order.php?msg=Order deleted successfull!");
  } else {
    header("Location:order.php?msg=Order Not Deleted ");
  }
} else { echo ""; }

ob_start();

if($_REQUEST['evt']){
  $id=$_REQUEST['evt'];
  $sql="UPDATE `orders` SET `delivery_status`='1' WHERE id='$id'";
  $query=mysqli_query($db,$sql) or die('database not connected!');
  if($quesry==1)
  {
    header('locaton:order.php?msg=delivery ok');
  }
  else{
    header('locaton:order.php?msg=delivery not sucess');
  }
}

$sql="SELECT * FROM `orders` order by delivery_status ASC";
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
              <a class="btn btn-primary" href="order-add.php">Order Add</a>
              <div class="text-center" style="color: red"><?php echo @$_REQUEST['msg']; @$error;?></div></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Product Id</th>
                      <th>Order Price</th>
                      <th>Order Total</th>
                      <td>Mobile NO</td>
                      <td>Address</td>
                      <th>Time</th>
                      <th>Order Deliver</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php $i=1;while($data=mysqli_fetch_assoc($query)){?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $data['order_no'];?></td>
                      <td><?php echo $data['total_amount'];?></td>
                      <td><?php echo $data['total_product'];?></td>
                      <td><?php echo $data['user_mobile'];?></td>
                      <td><?php echo $data['address'];?></td>
                      <td><?php echo $data['delivery_time'];?></td>
                      <td><?php if($data['delivery_status']==1){?>
                        <button type="button" class="btn btn-success">Deliver</button>
                        <?php }else{ ?>
                        <button type="button" onclick="updateOrder('<?php echo $data['id'];?>');" class="btn btn-danger">Order</button>
                        <?php }?>
                            
                      </td>
                      <td><!-- <a class="btn btn-info" href="oder-edit.php?edit=<?php echo $data['order_id'];?>"><i class="fas fa-pen" aria-hidden="true"></i></a> --><a class="btn btn-danger" href="order.php?del=<?php echo $data['id'];?>"><i class="fas fa-trash-alt" aria-hidden="true"></i></a></td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>
        </div>
        <!-- /.container-fluid -->
<?php include'footer.php';?>
<script type="text/javascript">
function updateOrder(evt){
  window.location.href="order.php?evt="+evt;
}
</script>