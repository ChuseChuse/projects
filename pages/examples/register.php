<?php 
require 'db_connection.php';
$error=NULL;
if (isset($_POST['submit'])) {
  # code...
$first= $_POST['first'];
$last= $_POST['last'];
$email= $_POST['email'];
$passwd= $_POST['passwd'];
$passwd2=$_POST['passwd2'];

$sqlselect = "SELECT * FROM users WHERE email = '$email'";
$runselect = mysqli_query($connection, $sqlselect);
$checkmail = mysqli_num_rows($runselect);

if (empty($first) or empty($last) or empty($email) or empty($passwd) or empty($passwd2)) {
   $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Fill out all fields!!
              </div>';
}elseif ($passwd !== $passwd2) {
    $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Password mismatch!!
              </div>';
}elseif ($checkmail > 0) {
   $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               The email entered already exist!!
              </div>';
}
else{
  //$encrypted_passwd = password_hash($passwd, PASSWORD_DEFAULT);
 // $encrypted_passwd2 = password_hash($passwd2, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (first, last, email, passwd) 
                  VALUES ('$first', '$last', '$email', '$passwd')";
        //$result= $connection ->query($query);
        $run = mysqli_query($connection, $query);

          header("Location: index.php");

        }

      }



 ?>


<?php require_once 'header.php'; ?>
 <?php 
   /* $url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty') !== false) {
      echo "Fill out all fields!";
      } else if (strpos($url, 'error=mismatch') !== false) {
      echo "password mismatch!";
      }elseif (strrpos($url, 'error=exist') !== false) {
       echo "Email is already exist!!";
      }
      */
    ?>
<body class="hold-transition register-page">
<div class="register-box" >
  <div class="register-logo">
    
  </div>
 <?php echo $error; ?>
  <div class="register-box-body">
    <p class="login-box-msg">REGISTER FOR NEW CERTIFICATE</p>

    <form action="register.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="first name" name="first">
     
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="last name" name="last">
    
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
       
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="passwd">
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="passwd2">
        
      </div>
      <div class="row">
        <div class="col-xs-8">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" >REGISTER</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="index.php" class="text-center">LOGIN</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<?php require_once 'script.php'; ?>

</body>
</html>
