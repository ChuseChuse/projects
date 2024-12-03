
<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id_superadmin'])) {
  header("location:index.php");
}else{
  $user = $_SESSION['id_superadmin'];
}

$sql = "SELECT  * FROM adminmkuu WHERE id = '$user'";
$run = mysqli_query($connection, $sql);
$result = mysqli_fetch_assoc($run);


/* include autoloader */
// require 'vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

$url = $_SERVER['REQUEST_URI'];
$cut = explode('?', $url);
$mtotoid = end($cut);

$select = "SELECT * FROM mtototable WHERE mtotoid='$mtotoid'";
$runselect = mysqli_query($connection, $select);
$data = mysqli_fetch_assoc($runselect);

$select2 = "SELECT * FROM babatable WHERE mtotoid='$mtotoid'";
$runselect2 = mysqli_query($connection, $select2);
$data2 = mysqli_fetch_assoc($runselect2);

$select3 = "SELECT * FROM mamatable WHERE mtotoid='$mtotoid'";
$runselect3 = mysqli_query($connection, $select3);
$data3 = mysqli_fetch_assoc($runselect3);
/* reference the Dompdf namespace */
  $finish = 2;
     while($finish != 1){ 
  $ver = rand(10000000000,99999999999);
  $sql3 = "SELECT * FROM verification WHERE ver_code='$ver'";
  $run3 = mysqli_query($connection,$sql3);

  if (mysqli_num_rows($run3)) {
   $finish = 2;
  }else{
     $sql = "INSERT INTO verification (ver_code, mtotoid) VALUES ('$ver', '$mtotoid')";
     $run = mysqli_query($connection,$sql);
    $finish = 1;
}
}



use Dompdf\Dompdf;


/* instantiate and use the dompdf class */
$dompdf = new Dompdf();

$html = array();
array_push($html,'
		<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

  <link rel="stylesheet" href="style.css">

</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: times new roman">
<div>
<h2 class="text text-center text-bold" style="font-family: times new roman">
  <img src="logo/logo.png" width="100" height="100"><br>
  THE UNITED REPUBLIC OF TANZANIA <br> CERTIFICATE OF BIRTH</h2>
<table cellspacing="0" border="1" align="center" width="700 ">
  <tr height="70" class="text-center">
    <td>Entry <br>No</td>
    <td>Where <br>  Born</td>
    <td>Name</td>
    <td>Sex</td>
    <td>Father <br> Name</td>
    <td>Father<br> Country of Birth</td>
    <td>Mother <br> Name</td>
    <td>Mother <br> Country of Birth</td>
    <td>Birth <br> Date</td>
    <td>Registration <br> Date</td>
    <td>Registrar <br> General</td>
  </tr>
  <tr height="800" class="text-center">
  <td>'.$ver.'</td>
  <td>'.strtoupper($data['nameofplace']).'</td>    
  <td>'.strtoupper($data['fname']).'</td>
  <td>'.$data['gender'].'</td>
  <td>'.strtoupper($data2['fname']).' '.strtoupper($data2['sname']).'</td>
  <td>'.strtoupper($data2['nation']).'</td>
  <td>'.strtoupper($data3['fname']).' '.strtoupper($data3['sname']).'</td>
  <td>'.strtoupper($data3['nation']).'</td>
  <td>'.strtoupper($data['date_birth']).'</td>
  <td>'.date("Y/m/d").'</td>
  <td>'.strtoupper($result['first_name']).' '.strtoupper($result['last_name']).'</td>
	</tr>');
array_push($html,'</table>
  <br>
<p class="text-left" style="font-size: 15px;">Certified under the Birth and Deaths Registration Act(Cap 108 R.E 2002) to be copy of an entry in the Registrar General\'s custody </p><br>
<p class="pull-right"  style="font-size: 20px;">Dated this :<u> '.date("Y/m/d").'</u></p>
<br><br><br><br>
  <p class="pull-left"  style="font-size: 20px;"><b>NB: This Certificate is not proof of Citizenship </b> <p class="pull-right" style="font-size: 20px; text-decoration: overline;"><i>for <b>Registrar General</b></i></p></p>
</div>
		</body>
		</html>');

			$count = count($html);
            $html2 = "";
            for ($i = 0; $i<$count; $i++) {
            	$html2 = $html2 . $html[$i];
            }

$dompdf->loadHtml($html2);

/* Render the HTML as PDF */

$dompdf->setPaper('A4','landscape');
$dompdf->render();
/* Output the generated PDF to Browser */

$dompdf->stream();


$updstatus = mysqli_query($connection, "update mtototable set status_gen = 1 where mtotoid = '$mtotoid'");
header("location: 90dayapplication.php");
?>