<?php include'header.php';
include'../config.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mobile</th>
                      <th>Transaction Id</th>
                      <th>Payment Type</th>
                      <th>Status</th>
                      <th>Amount</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php $i=1; 
                  $sql="SELECT * FROM `transaction`";
                  $query=mysqli_query($db,$sql) or die('Data base not connected');
                  while($data=mysqli_fetch_assoc($query)){
                  ?>
                    <tr>
                      <td><?php echo $data['mobile']?></td>
                      <td><?php echo $data['trans_id']?></td>
                      <td><?php echo $data['pay_type']?></td>
                      <td><?php if($data['status']==1){ echo 'OK'; } else{ echo "NOT PAY"; } ?></td>
                      <td><?php echo $data['amount']?></td>
                      <td><?php echo $data['created_date']?></td>
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