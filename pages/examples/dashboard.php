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

 ?>

<?php 
include "header2.php";
include "navsuperadmin.php";

 ?>
<div class="content-wrapper"style="margin-left: 280px;">
	<section class="content-header">
		<h1 style="font-size: 25px; font-weight: bold;"></h1><br>
 <p style="font-size: 20px; text-align: center;">Welcome to RITA administartor Pannel</p>
	</section>
	<section class="content">
		   <section class="content">
      <!-- Small boxes (Stat box) -->
     
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