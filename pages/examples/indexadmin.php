<?php 
session_start();
require 'db_connection.php';
$success=NULL;

if (!isset($_SESSION['id_admin'])) {
  header("location:login.php");
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




<?php include 'header2.php'; ?>
<!-- Site wrapper -->
<div class="wrapper">

  <!-- =============================================== -->

 <?php include 'navindex.php' ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php echo $success; ?>
      <h3>Welcome to RITA online birth registraton system Admin area......</h3>


    </section>

    <!-- Main content -->
    <section class="content">

<p> Please choose from navigation the certification based on the  age of the person and fill out all the information needed</p>
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
<<?php require 'script1.php'; ?>
</body>
</html>
