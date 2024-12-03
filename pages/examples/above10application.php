
<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id_superadmin'])) {
  header("location:index.php");
}else{
  $user = $_SESSION['id_superadmin'];
}


  $sqlid = "SELECT * FROM mtototable WHERE age='above10'";
  $result = mysqli_query($connection, $sqlid);



 ?>
<?php  include 'header2.php'; ?>
<!-- Site wrapper -->
  <?php include 'navsuperadmin.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 280px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Above 10 years Applications List</h3>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Application</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/NO</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Place of Birth</th>
                  <th>Region of birth</th>
                  <th>view</th>
                  <th>Report</th>
                  <th>status</th>
                </tr>
                </thead>
                <tbody>
                   <?php 
                   $cnt = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td>'.$cnt.'</td>
                  <td>'.$row['fname'].'</td>
                  <td>'.$row['sname'].'</td>
                  <td>'.$row['lname'].'</td>
                  <td>'.$row['gender'].'</td>
                  <td>'.$row['date_birth'].'</td>
                  <td>'.$row['nameofplace'].'</td>
                  <td>'.$row['regionofbirth'].'</td>';
                  if ($row['status'] == 2 || $row['statusmama'] == 4 || $row['statusbaba'] == 6 || $row['statustaarifa'] == 8 || $row['statushati'] == 10) {
                    echo '
                    <td><a href="information_user.php" class="btn btn-success btn-block disabled">view</a></td>
                    ';
                  }else{
                    echo ' 
                    <td><a href="information_user.php?'.$row['mtotoid'].'" class="btn btn-success btn-block">view</a></td>
                    ';
                  }
                  echo '';
                  if ($row['status'] == 1 && $row['statusmama'] == 3 && $row['statusbaba'] == 5 && $row['statustaarifa'] == 7 && $row['statushati'] == 9) {
                    echo ' 
                    <td class="text-center"><a href="report.php?'.$row['mtotoid'].'" class="btn btn-warning"><span class="fa fa-download"></span>Generate</a></td>
                    ';
                  }else{
                    echo ' 
                    <td class="text-center"><a href="" class="btn btn-warning disabled"><span class="fa fa-download"></span>Generate</a></td>
                    ';
                  }
                  echo '';
                  if ($row['status_gen'] == 1) {
                   echo '<td><span class="fa fa-check-circle fa-3x text-success"></span></td>';
                  }else{
                    echo '<td><span class="fa fa-times-circle fa-3x text-danger"></span></td>';
                  }
                  
                  echo '
                  </tr>';
               $cnt = $cnt+1;
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
