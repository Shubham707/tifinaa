<?php include'header.php';
include'../config.php';
 $order1="SELECT MONTH(`created_date`) AS date, SUM(`total_product`) AS total_sales, count(`total_product`) AS total_count, sum(`total_amount`) AS total_price FROM `orders` GROUP BY date";
 $orders1=mysqli_query($db,$order1) or die('database not connected!');
$data2=mysqli_fetch_assoc($orders1);   
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
             <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <?php
                 $Cus="SELECT count(`cus_id`) AS total_id FROM `customers`";
                    $Cust=mysqli_query($db,$Cus) or die('database not connected!');
                    $data3=mysqli_fetch_assoc($Cust); 
                  ?>
                  <div class="mr-5">(<?php echo $data3['total_id']?>) User</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="users.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">(<?php echo $data2['total_price']?>) Total Sale</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <?php $order="SELECT count(delivery_status) as total FROM `orders` WHERE delivery_status='0'";
                  $orders=mysqli_query($db,$order) or die('not connected orders list');
                  $data=mysqli_fetch_assoc($orders);
                  ?>
                  <div class="mr-5">(<?php echo $data['total'];?>) New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="order.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">(<?php echo $data2['total_count'] ?>) Total Quantity Sale</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             Quantity and order</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Date And Order Daily</div>
          </div>

        </div>
        <!-- /.container-fluid -->
       
<?php include'footer.php'; ?>

<script src="vendor/chart.js/Chart.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <script src="js/sb-admin.min.js"></script>
    <script type="text/javascript">
      // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
      labels: ["OCT", "NOV", "DEC", "JAN", "FEB","MAR", "APL", "MAY", "JUNE", "JULY", "AUG", "SEP" ],
    
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [<?php while($data1=mysqli_fetch_assoc($orders1)){ echo $data1['total_sales'].','; }?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

    </script>