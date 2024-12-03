<?php 
require 'db_connection.php';

$first= $_POST['first'];
$last= $_POST['last'];
$email= $_POST['email'];
$passwd= $_POST['passwd'];


$query = "INSERT INTO users (first, last, email, passwd) 
                VALUES ('$first', '$last', '$email', '$passwd')";

          $result= $connection ->query($query);

 

     	header("Location: login.php");
     

 ?>