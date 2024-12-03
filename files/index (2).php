<?php 
session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}else{
  $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Successful login!!
              </div';
  $user = $_SESSION['id'];
}
  $sql = "SELECT * FROM users WHERE id = '$user'";
  $run = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($run);
?>

<?php include 'header2.php'; ?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RIT</b>A</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

       <ul class="nav navbar-nav navbar-right">
        <form action="logout.php" method="POST">
           <li><button class="btn btn-primary" type="submit">Logout</button></li>
         </form>
         </ul>
    </nav>
  </header>

  <!-- =============================================== -->

  <?php include 'navindex.php' ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php echo $success; ?>
      <h3>Welcome to RITA online birth registraton system. It is our pleasure to save you.</h3>


    </section>

    <!-- Main content -->
    <section class="content">

<p> Please choose from navigation the certification based on the  age and fill the information needed</p>
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
