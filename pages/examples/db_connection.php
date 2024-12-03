<?php 
// 1: CONNECT TO DATABASE
$dbhost= "localhost";
$dbuser= "root";
$dbname= "project";

//$dbpass= "neema";
$connection= mysqli_connect($dbhost, $dbuser, '', $dbname);
   //TEST IF THE CONNECTION OCCURS

if (mysqli_connect_errno()) {
	# code...
	die("Database connection failed: " .
         mysqli_connect_error() .

         "(". mysqli_connect_errno() .")"
		);
}
 ?>