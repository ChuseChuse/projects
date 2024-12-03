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




// 2: PERFORMING DATABASE QUERY

   $query   ="SELECT * FROM  users";
   $result  = mysqli_query($connection, $query);
  // TEST IF THERE IS A QUERY ERROR

// DELETE
   if (isset($_POST['delete'])) {
    $userid = $_POST['userid'];

    $sqldlt = "DELETE FROM users WHERE userid = '$userid'";
    $sqlrun = mysqli_query($connection, $sqldlt);
    header("location: manageusers.php?success=delete");
   }
 

?>
<?php  include 'header2.php'; ?>
  <?php include 'navsuperadmin.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 280px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>List of Users.</h3>

      <?php 
      echo $error;
      echo $success;

    $url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
   if (strrpos($url, 'success=delete') !== false) {
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
              <h3 class="box-title">List of Users</h3>
    
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $count=1;
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td>'.$count.'</td>
                  <td>'.$row['first'].'</td>
                  <td>'.$row['last'].'</td>
                  <td>'.$row['email'].'</td>
                 
                 <td>

                  <button  class="btn btn-danger  btn-block" data-toggle="modal" data-target="#modal-danger'.$row['userid'].'">
                <span class="fa fa-trash"></span>
              </button>
         <form method="POST">
     
         <div class="modal modal-danger fade" id="modal-danger'.$row['userid'].'">
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
                <input type="hidden" value="'.$row['userid'].'" name="userid">
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
