<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id_superadmin'])) {
  header("location:index.php");
}else{
  $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Successful login!!
              </div';
  $user = $_SESSION['id_superadmin'];
}


  $query   ="SELECT * FROM  adminmkuu";
   $result  = mysqli_query($connection, $query); 
 ?>
<?php 
include "header2.php";
include "navsuperadmin.php";

 ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Dashboard</h1>
 <p>Welcome to RITA administartor Pannel</p>
	</section>
	<section class="content">
		   <section class="content">
        <div class="row">
       <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/imglogo.png" alt="User profile picture">

              <h3 class="profile-username text-center">
                <?php while ($row=mysqli_fetch_assoc($result)) { echo strtoupper($row['first_name']." ".$row['last_name']); } ?>
        
             </h3>

              <p class="text-muted text-center">System Admin</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Number of certificate isssued</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>New Applicants</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Number of unissued certificates</b> <a class="pull-right">13,287</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
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