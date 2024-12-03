<?php 
require 'db_connection.php';
if (isset($_POST['submit'])) {
  # code...
$first= $_POST['first'];
$last= $_POST['last'];
$email= $_POST['email'];
$username= $_POST['username'];
$passwd= $_POST['passwd'];
$passwd2=$_POST['passwd2'];

if (empty($first) or empty($last) or empty($email) or empty($passwd) or empty($passwd2)) {
 header("Location: registeradmin.php?error=empty");
 exit();
}


elseif ($passwd !== $passwd2) {
  header("Location: registeradmin.php?error=mismatch");
  exit();
}


else{
 // $encrypted_passwd = password_hash($passwd, PASSWORD_DEFAULT);

        $query = "INSERT INTO admins (first, last, username, email, passwd) 
                  VALUES ('$first', '$last', '$username', '$email', '$passwd')";
          $result= $connection ->query($query);

          header("Location: loginadmin.php");

        }

      }



 ?>


<?php require_once 'header.php'; ?>
 <?php 
    $url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty') !== false) {
        $empty = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               <center>Fill Out All field!!</center>
              </div>";
          echo $empty;
      } 

      else if (strpos($url, 'error=mismatch') !== false) {
         $match = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
               <center>Password didn't match!!</center>
              </div>";
            echo $match;
      }
 
 

    ?>
<body class="hold-transition register-page">
<div class="register-box" >
  <div class="register-logo">
    
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">ADMINS REGISTRATION</p>

    <form action="registeradmin.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First name" name="first">
     
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last name" name="last">
    
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
    
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
       
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="passwd">
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Comfirm password" name="passwd2">
        
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
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<?php require_once 'script.php'; ?>

</body>
</html>
