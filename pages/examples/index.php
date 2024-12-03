<?php 
session_start();
include 'db_connection.php';
$error = NULL;

if (isset($_POST['submit'])) {
  
$email= $_POST['email'];
$passwd= $_POST['passwd'];

// $sql = "SELECT * FROM users WHERE email = '$email'";
// $result= $connection ->query($sql);
// $row = $result ->fetch_assoc();
// $hash_pwd = $row['passwd'];
// $hash= password_verify($passwd, $hash_pwd);

// if ($hash == 0) {
//   header("Location: login.php?error=incorrect");
//   exit();

// }else{
if (empty($email) or empty($passwd)) {
  $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Fill out all fields!!
              </div>';
}else{
          //$result= $connection ->query($query);
          //$row = $result ->fetch_assoc();
          $query = "SELECT * FROM users WHERE email = '$email' AND passwd = '$passwd'";
          $result = mysqli_query($connection, $query);
          $row = mysqli_fetch_assoc($result);

          $queryadmin = "SELECT * FROM admins WHERE username = '$email' AND passwd = '$passwd'";
          $resultadmin = mysqli_query($connection, $queryadmin);
          $rowadmin = mysqli_fetch_assoc($resultadmin);

           $querysuperadmin = "SELECT * FROM adminmkuu WHERE username = '$email' AND passwd = '$passwd'";
           $resultsuperadmin = mysqli_query($connection, $querysuperadmin);
           $rowsuperadmin = mysqli_fetch_assoc($resultsuperadmin);

           if (mysqli_num_rows($result) > 0) {
            $_SESSION['userid'] = $row['userid'];
             header("Location:dashboarduser.php");

           }elseif (mysqli_num_rows($resultadmin) > 0) {
             $_SESSION['id_admin'] = $rowadmin['id'];
             header("Location:dashboardadmin.php");

           }elseif (mysqli_num_rows($resultsuperadmin) > 0) {
             $_SESSION['id_superadmin'] = $rowsuperadmin['id'];
             header("Location:dashboard.php");
           }
           else{
            // $error = "Incorrect Password or Username";
             $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Incorrect Password or Username!!
              </div>';
           }
}
}

 ?>
<?php 
include 'header.php';
 ?>
 <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
     <a href="index.php"><b>RITA</b>Tanzania</a><br>
    <img src="../../dist/img/imglogo.png" class="img-circle" alt="User Image" style="height: 100px; width: 100px;">
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="width: 100%; height: 35vh;" >
    <p class="login-box-msg" style="padding-top:10px; font-size: 18px; font-weight: bold;">SIGN IN PAGE</p>
    <?php echo $error; ?>
    <form  method="post" style="padding: 10px;">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email/Username" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter your Password" name="passwd">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button  class="btn btn-info btn-block btn-flat" name="submit">LOGIN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
 

    <!-- /.social-auth-links -->

 
    <a href="register.php" class="text-center" style="margin-left: 27px; font-size: 15px;">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<?php require_once 'script.php'; ?>
</body>
</html>
