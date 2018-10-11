<?php include'header.php';
include'../config.php';
if($_REQUEST['change'])
{
  $name=$_POST['name'];
  $content=md5($_POST['password']);
  
  $sql="UPDATE `admin` SET `id`='1',`name`='$name',`password`='$content' WHERE id=1";
  $query=mysqli_query($db, $sql) or die(mysqli_error());
  if($query){
    ob_start();
  header("Location:change-password.php?msg=Password chnage successfull!");
  }else{
  $error="Password Not chnage!";
  }
}
  $sql1="select * from admin";
  $query2=mysqli_query($db, $sql1) or die(mysqli_error());
  $data=mysqli_fetch_assoc($query2);

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>

          <!-- Page Content -->
          <div class="card mb-3">
            <div class="card-header">Change  <span style="color:green;"><?php echo @$_REQUEST['msg']?></span></div>
           
            <div class="card-footer small text-muted">
               <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Password </div>
        <div class="card-body">
           <form action="#" method="post" enctype="multipart/form-data">
           <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Admin Name" value="<?php echo $data['name']?>">
                <label for="inputEmail">Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="password" id="password" class="form-control" placeholder="Password" required autocomplete autofocus="">
                <label for="inputEmail">New Password</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="passwordConfirm" name="confirm" class="form-control" placeholder="Confirm Password" required autocomplete autofocus="">
                <label for="inputEmail">Confirm Password</label>
              </div>
            </div>
            <div id="passwordConfirmError"></div>
            
            <input class="btn btn-primary" id="submit" name="change" type="submit" value="Submit">
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

<script>

$(document).ready(function() {

// check for password

$('#submit').click(function()

{

var password = $('#password').val();

if (password == "Password" || password == "") {

$('#passwordError').fadeIn(500).css('color', 'red').html('<p>Please provide a password</p>');

return false;

}

else {

$('#passwordError').fadeOut(500);

}

// check for confirmation of password

var passwordConfirm = $('#passwordConfirm').val();

if (passwordConfirm == "Confirm password" || passwordConfirm == "") {

$('#passwordConfirmError').fadeIn(500).css('color', 'red').html('<p>Please confirm your password</p>');

return false;

}

else {

$('#passwordConfirmError').fadeOut(500);

}

if (passwordConfirm == "Confirm password" || passwordConfirm == "" || passwordConfirm != password) {

$('#passwordConfirmError').fadeIn(500).css('color', 'red').html('<p>Password does not match</p>');

return false;

}

else {

$('#passwordConfirmError').fadeOut(500);

}

});

});

</script>