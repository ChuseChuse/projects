
<?php 
session_start();
require 'db_connection.php';
$success=NULL;

if (!isset($_SESSION['id_admin'])) {
  header("location:index.php");
}else{
   $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Successful login!!
              </div';
  $user = $_SESSION['id_admin'];
}
  $sql = "SELECT * FROM admins WHERE id = '$user'";
  $run = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($run);
?>
<?php 
include "userheader.php";
include "navadmin.php";

 ?>
<div class="content-wrapper content-width" style="margin-left: 280px;">
  <section class="content-header">
    <h1 style="font-weight: bold;">Welcome to Online Rita Registration system.</h1>
    <p style="font-size: 20px;">This is officers pannel</p>
  </section>
  <section class="content">
       <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h4 style="font-size: 26px;">90 DAYS APPLICATION</h4>

              <p style="font-size: 18px;">Start Application</p>
            </div>
            <div class="icon">
              <i class="fa  fa-user"></i>
            </div>
            <a href="90dayformadmin.php" class="small-box-footer"  style="font-size: 20px;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4 style="font-size: 26px;">BELOW 10 YEARS APPLICATION</h4>

              <p style="font-size: 18px;">Start Application</p>
            </div>
            <div class="icon">
              <i class="fa  fa-male"></i>
              <i class="fa  fa-female"></i>
            </div>
            <a href="below10formadmin.php" class="small-box-footer" style="font-size: 20px;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4 style="font-size: 26px;">ABOVE 10 YEARS APPLICATION</h4>

              <p style="font-size: 18px;">Start Application</p>
            </div>
            <div class="icon">
              <i class="fa  fa-group"></i>
              <i class="fa  fa-users"></i>
            </div>
            <a href="above10formadmin.php" class="small-box-footer"  style="font-size: 20px;">Click here <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  </section>

</div>
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