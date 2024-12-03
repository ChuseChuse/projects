<?php 

session_start();
require 'db_connection.php';
$success=NULL;
$error = NULL;
if (!isset($_SESSION['id_superadmin'])) {
  header("location:index.php");
}else{
  $not = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Successful login!!
              </div';
  $user = $_SESSION['id_superadmin'];
}


if (isset($_POST['submit'])) {
  # code...
$first= $_POST['fname'];
$last= $_POST['lname'];
$email= $_POST['email'];
$username= $_POST['username'];
$passwd= $_POST['pwd1'];
$passwd2=$_POST['pwd2'];

$sqlselect = "SELECT * FROM admins WHERE email='$email'";
$runsql = mysqli_query($connection, $sqlselect);
$checkmail = mysqli_num_rows($runsql);


$sqluser = "SELECT * FROM admins WHERE username='$username' AND passwd= '$passwd'";
$runuser = mysqli_query($connection, $sqluser);
$checkuser = mysqli_num_rows($runuser);

if ($checkmail > 0) {
  $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Email is already exist!!
              </div';
}elseif ($checkuser > 0) {
  $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Such user is already exist!!
              </div';
}
elseif ($passwd !== $passwd2) {
   $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Password did not match!!
              </div';
}else{
 // $encrypted_passwd = password_hash($passwd, PASSWORD_DEFAULT);

        $query = "INSERT INTO admins (first, last, username, email, passwd) 
                  VALUES ('$first', '$last', '$username', '$email', '$passwd')";
          $result= $connection ->query($query);

           $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Data Added!!
              </div';

        }

      }

// 2: PERFORMING DATABASE QUERY

   $query   ="SELECT * FROM admins";
   $result  = mysqli_query($connection, $query);
  // TEST IF THERE IS A QUERY ERROR

// DELETE
   if (isset($_POST['delete'])) {
    $userid = $_POST['userid'];

    $sqldlt = "DELETE FROM admins WHERE id = '$userid'";
    $sqlrun = mysqli_query($connection, $sqldlt);
    header("location: adminofficer.php?success=delete");
   }
 
// UPDATE
    if (isset($_POST['update'])) {

      $first= $_POST['fname'];
      $last= $_POST['lname'];
      $email= $_POST['email'];
      $username= $_POST['username'];
      $passwd= $_POST['pwd1'];
      $passwd2=$_POST['pwd2'];
      $userid = $_POST['userid'];

if($passwd !== $passwd2) {
   $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Password did not match!!
              </div';
}else{
 // $encrypted_passwd = password_hash($passwd, PASSWORD_DEFAULT);

        $query = "UPDATE admins SET first='$first', last='$last', email='$email', username='$username', passwd = '$passwd' WHERE id= '$userid'";
        $result= $connection ->query($query);
        header("location: adminofficer.php?success=update");
        }
    }
?>
<?php  include 'header2.php'; ?>
  <?php include 'navsuperadmin.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 280px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>List of Administative Officers.</h3>

      <?php 
      echo $error;
      echo $success;

    $url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'success=update') !== false) {
      echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Data Updated!!
              </div';
      }elseif (strrpos($url, 'success=delete') !== false) {
       echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Data Deleted!!
              </div';
      }
       ?>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Officers</h3>
              <button type="button" class="pull-right btn btn-primary" data-toggle="modal" data-target="#modal-default">
                <span class="fa fa-plus"></span> Add New Account
              </button>
        <form method="POST">
                    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center; font-weight: bold;">Add new Admin Account</h4>
              </div>
              <div class="modal-body">
                <p>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="text" name="fname" class="form-control" placeholder="Enter first name" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="text" name="lname" class="form-control" placeholder="Enter last name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="password" name="pwd1" class="form-control" placeholder="Enter Password" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="password" name="pwd2" class="form-control" placeholder="Confirm Password" required>
                      </div>
                    </div>
                  </div>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button name="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

               <?php $count=1; ?>
                <tr>
                  <th>S/no</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td>'.$count.'</td>
                  <td>'.$row['first'].'</td>
                  <td>'.$row['last'].'</td>
                  <td>'.$row['username'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>
                  <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modal-warning'.$row['id'].'">
                <span class="fa fa-edit"></span>
              </button>
                 <form method="POST">
                  <div class="modal fade" id="modal-warning'.$row['id'].'">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align:center;">Edit Admin Details</h4>
              </div>
              <div class="modal-body">
                <p>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="text" name="fname" class="form-control" value="'.$row['first'].'" placeholder="Enter first name" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="text" name="lname" class="form-control" value="'.$row['last'].'"  placeholder="Enter last name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="text" name="username" class="form-control" value="'.$row['username'].'"  placeholder="Enter username" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="email" name="email" class="form-control" value="'.$row['email'].'"  placeholder="Enter email" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-6">
                        <input type="password" name="pwd1" class="form-control" placeholder="Enter Password" required>
                      </div>
                      <div class="col col-md-6">
                        <input type="password" name="pwd2" class="form-control" placeholder="Confirm Password" required>
                      </div>
                    </div>
                  </div>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="hidden" value="'.$row['id'].'" name="userid">
                <button name="update" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </form>
        </td>
        <td>

                  <button  class="btn btn-danger  btn-block" data-toggle="modal" data-target="#modal-danger'.$row['id'].'">
                <span class="fa fa-trash"></span>
              </button>
         <form method="POST">
     
         <div class="modal modal-danger fade" id="modal-danger'.$row['id'].'">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete admin</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete '.strtoupper($row['first']).'?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <input type="hidden" value="'.$row['id'].'" name="userid">
                <button name="delete" class="btn btn-outline">Delete</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                      </form>
               </td>
                  </tr>';
                  $count=$count+1;
                }
                 ?>
                </tbody>  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Rita</b>Tanzania
    </div>
    <strong>Copyright &copy; 2020 </strong> All rights
    reserved.
  </footer>

<!-- ./wrapper -->
<?php require 'script_form.php'; ?>
<?php require 'script1.php'; ?>

</body>
</html>
