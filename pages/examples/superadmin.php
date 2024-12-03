<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id'])) {
  header("location:index.php");
}else{
  $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Successful login!!
              </div';
  $user = $_SESSION['id'];
}

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
           <li><a href="logout.php">Logout</a></li>
         </ul>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/imglogo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>RITA TANZANIA</p>
        </div>
      </div>
       
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

       <li><a href="#">
            <i class="fa fa-file"></i> <span>90days</span>
            <span class="pull-right-container">
             
            </span>
          </a>
</li>
        <li><a href="#">
            <i class="fa fa-file"></i> <span>Below 10 years</span>
            <span class="pull-right-container">
             
            </span>
          </a>
</li>
        <li><a href="#">
            <i class="fa fa-file"></i> <span>Above 10 years</span>
            <span class="pull-right-container">
             
            </span>
          </a>
</li> 
<hr>
   <li><a href="manageadmins.php">
            <i class="fa fa-user"></i> <span>Manage Admins</span>
            <span class="pull-right-container">
             
            </span>
          </a>
   </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Welcome to RITA SuperAdmin area</h3>


    </section>

    <!-- Main content -->
    <section class="content">


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
