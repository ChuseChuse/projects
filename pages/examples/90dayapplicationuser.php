<?php 
session_start();
require 'db_connection.php';
$success=NULL;
$error=NULL;

if (!isset($_SESSION['userid'])) {
 header("location:index.php");
}else{
  $userid = $_SESSION['userid'];
}


  $sqlid = "SELECT * FROM mtototable WHERE age='90day' AND userid='$userid'";
  $result = mysqli_query($connection, $sqlid);

 // $iduser = $rowuser['userid'];

 ?>



<?php  include 'userheader.php'; ?>
<!-- Site wrapper -->
  <?php include 'navuser.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 280px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>90 Days Applications List</h3>
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Application</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="font-size: 16px; text-align: center;">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Place of Birth</th>
                  <th>Region of birth</th>
                  <th>Taarifa za mtoto</th>
                  <th>Taarifa za mama</th>
                  <th>Taarifa za baba</th>
                  <th>Taarifa za mtoa taarifa</th>
                  <th>Taarifa za hati</th>
                  <th>Taarifa za cheti</th>
                  <th>view</th>
                </tr>
                </thead>
                <tbody>
                   <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td style="font-size: 20px;">'.$row['fname'].'</td>
                  <td style="font-size: 20px;">'.$row['sname'].'</td>
                  <td style="font-size: 20px;">'.$row['lname'].'</td>
                  <td style="font-size: 20px;">'.$row['gender'].'</td>
                  <td style="font-size: 20px;">'.$row['date_birth'].'</td>
                  <td style="font-size: 20px;">'.$row['nameofplace'].'</td>
                  <td style="font-size: 20px;">'.$row['regionofbirth'].'</td>';
                  //taarifa za mtoto
                  if ($row['status'] == 1) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-check-circle text-success bg-success">Taarifa za mtoto zipo sahihi</span></td>';
                  }elseif ($row['status'] == 2) {
                     echo '<td style="font-size: 20px;"><span class="fa fa-times-circle  text-danger bg-primary">Taarifa za mtoto hazipo sahihi</span></td>';
                  }else{
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle text-danger">Taarifa za mtoto hazijahakikiwa</span></td>';
                  }

                  //taarifa za mama
                  echo '';

                  if ($row['statusmama'] == 3) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-check-circle text-success bg-success">Taarifa za mama zipo sahihi</span></td>';
                  }elseif ($row['statusmama'] == 4) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle  text-danger bg-primary">Taarifa za mama hazipo sahihi</span></td>';
                  }else{
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle text-danger">Taarifa za mama hazijahakikiwa</span></td>';
                  }
                  //taarifa za baba
                  echo '';

                  if ($row['statusbaba'] == 5) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-check-circle text-success bg-success">Taarifa za baba zipo sahihi</span></td>';
                  }elseif ($row['statusbaba'] == 6) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle  text-danger bg-primary">Taarifa za baba hazipo sahihi</span></td>';
                  }else{
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle text-danger">Taarifa za baba hazijahakikiwa</span></td>';
                  }
                  //taarifa za mtoa taarifa
                  echo '';

                  if ($row['statustaarifa'] == 7) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-check-circle text-success bg-success">Taarifa za mtoa taarifa zipo sahihi</span></td>';
                  }elseif ($row['statustaarifa'] == 8) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle  text-danger bg-primary">Taarifa za mtoa taarifa hazipo sahihi</span></td>';
                  }else{
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle text-danger">Taarifa za mtoa taarifa hazijahakikiwa</span></td>';
                  }
                  //tarifa za hati
                   echo '';

                  if ($row['statushati'] == 9) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-check-circle text-success bg-success">Taarifa za hati ni sahihi</span></td>';
                  }elseif ($row['statushati'] == 10) {
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle  text-danger bg-primary">Taarifa za hati  hazipo sahihi</span></td>';
                  }else{
                    echo '<td style="font-size: 20px;"><span class="fa fa-times-circle text-danger">Taarifa za hati hazijahakikiwa</span></td>';
                  }
                  //cheti taaarifa
                  echo '';
                   if ($row['status_gen']== 1) {
                     echo '<td style="font-size: 20px;"><span class="text-warning">Cheti chako kipo tayari</span></td>';
                   }else{
                     echo '<td style="font-size: 20px;"><span class="text-warning">Uhakiki wa taarifa zako unaendelea</span></td>';
                   };
                  //view button
                  echo'';
                  
                  if ($row['status'] == 2) {
                    echo '<td><a href="update_application.php?'.$row['mtotoid'].'" class="btn btn-success">View</a></td>';
                  }elseif ($row['statusmama'] == 3) {
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }elseif ($row['statusmama'] == 4) {
                    echo '<td><a href="update_application.php?'.$row['mtotoid'].'" class="btn btn-success">View</a></td>';
                  }elseif ($row['statusbaba'] == 5) {
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }elseif ($row['statusbaba'] == 6) {
                    echo '<td><a href="update_application.php?'.$row['mtotoid'].'" class="btn btn-success">View</a></td>';
                  }elseif ($row['statustaarifa'] == 7) {
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }elseif ($row['statustaarifa'] == 8) {
                    echo '<td><a href="update_application.php?'.$row['mtotoid'].'" class="btn btn-success">View</a></td>';
                  }elseif ($row['statushati'] == 9) {
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }elseif ($row['statushati'] == 10) {
                    echo '<td><a href="update_application.php?'.$row['mtotoid'].'" class="btn btn-success">View</a></td>';
                  }elseif ($row['status'] == 1) {
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }else{
                    echo '<td><a href="" class="btn btn-success disabled">View</a></td>';
                  }
                  echo '</tr>';
                }
                  ?>
                </tbody>  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
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

 <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->

<!-- ./wrapper -->
<?php require 'script_form.php'; ?>
<?php require 'script1.php'; ?>

</body>
</html>
