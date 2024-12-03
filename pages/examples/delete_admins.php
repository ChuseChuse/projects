<?php 
require 'db_connection.php';


 
// 2: PERFORMING DATABASE QUERY

   $query   ="SELECT * FROM admins";
   $result  = mysqli_query($connection, $query);
  // TEST IF THERE IS A QUERY ERROR
   $admin=mysqli_fetch_assoc($result);

   $id= $admin['id'];

  
  $query1 = "DELETE FROM admins WHERE id = {$id} LIMIT 1";
  $result1  = mysqli_query($connection, $query1); 
  
   if ($result1 && mysqli_affected_rows($connection) == 1) {
   	//success
   	$_SESSION["message"]="Admin deleted.";
   	header("Location: manageadmins.php");
   	
   	}

        

      



 ?>


<
