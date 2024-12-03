<?php 
session_start();
require 'db_connection.php';
$success=NULL;
$error=NULL;

if (!isset($_SESSION['id_admin'])) {
  header("location:index.php");
}else{
  $adminid = $_SESSION['id_admin'];
}


  $sqlid = "SELECT * FROM admins WHERE id='$adminid'";
  $idrun = mysqli_query($connection, $sqlid);
  $rowuser = mysqli_fetch_assoc($idrun);
  $adminid = $rowuser['id'];

if (isset($_POST['wasilishamtoto'])) {

  $jinalakwanza = $_POST['jinalakwanza'];
  $jinalapili = $_POST['jinalapili'];
  $jinalamwisho = $_POST['jinalamwisho'];
  $jinalingine = $_POST['jinalingine'];
  $jinsia = $_POST['jinsia'];
  $tareheyakuzaliwa = $_POST['tareheyakuzaliwa'];
  $mahalipakuzaliwa = $_POST['mahalipakuzaliwa'];
  $jinamahali = $_POST['jinamahali'];
  $mkoaaliozaliwa = $_POST['mkoaaliozaliwa'];
  $wilayaaliozaliwa = $_POST['wilayaaliozaliwa'];
  $kataaliyozaliwa = $_POST['kataaliyozaliwa'];
  $kijijialichozaliwa = $_POST['kijijialichozaliwa'];
  $mkoamakazi = $_POST['mkoamakazi'];
  $wilayamakazi = $_POST['wilayamakazi'];
  $katayamakazi = $_POST['katayamakazi'];
  $kijijichamakazi = $_POST['kijijichamakazi'];
  $age=$_POST['age'];

  $sqlselect = "SELECT * FROM mtototable WHERE fname='$jinalakwanza' AND sname='$jinalapili' AND lname = '$jinalamwisho' AND othername='$jinalingine'";
  $sqlrun = mysqli_query($connection, $sqlselect); 
  $checkname = mysqli_num_rows($sqlrun);

  if ($checkname > 0) {
    $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Jina la mtoto limetumika!!
              </div>';
  }else{

    $sqlinsert = "INSERT INTO mtototable(fname,sname,lname,othername,gender,date_birth,placeofbirth,nameofplace,regionofbirth,districtofbirth,wardofbirth, streetofbirth,region,district,ward,street,phone,userid,age,status,statusmama,statusbaba,statustaarifa,statushati,comment) VALUES('$jinalakwanza','$jinalapili','$jinalamwisho','$jinalingine','$jinsia','$tareheyakuzaliwa','$mahalipakuzaliwa','$jinamahali','$mkoaaliozaliwa','$wilayaaliozaliwa','$kataaliyozaliwa','$kijijialichozaliwa','$mkoamakazi','$wilayamakazi','$katayamakazi','$kijijichamakazi','NULL','$iduser','$age',0,0,0,0,0,'-')";
    $insertrun = mysqli_query($connection, $sqlinsert);

    $takesql = "SELECT * FROM mtototable WHERE fname='$jinalakwanza' AND sname='$jinalapili' AND lname = '$jinalamwisho' AND othername='$jinalingine'";
    $runtake = mysqli_query($connection, $takesql);
    $fetch = mysqli_fetch_assoc($runtake);
    $kidid  = $fetch['mtotoid'];

    $sqlattach = "INSERT INTO atachments(mtotoid,typeofattach,hospital_note,baruamtendaji,passport) VALUES('$kidid', '-','-','-','-')";
    $runattach  = mysqli_query($connection, $sqlattach);


    $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa za mtoto zimetumwa kikamilifu!!
              </div>';
  }
}


$selectmtoto1 = "SELECT * FROM mtototable";
$sqlmtoto1 = mysqli_query($connection, $selectmtoto1);

$selectmtoto2 = "SELECT * FROM mtototable";
$sqlmtoto2 = mysqli_query($connection, $selectmtoto2);

$selectmtoto3 = "SELECT * FROM mtototable";
$sqlmtoto3 = mysqli_query($connection, $selectmtoto3);

$selectmtoto4 = "SELECT * FROM mtototable";
$sqlmtoto4 = mysqli_query($connection, $selectmtoto4);

$selectmtoto5 = "SELECT * FROM mtototable";
$sqlmtoto5 = mysqli_query($connection, $selectmtoto5);

$selectmtoto6 = "SELECT * FROM mtototable";
$sqlmtoto6 = mysqli_query($connection, $selectmtoto6);

$selectmtoto7 = "SELECT * FROM mtototable";
$sqlmtoto7 = mysqli_query($connection, $selectmtoto7);

$selectmtoto8 = "SELECT * FROM mtototable";
$sqlmtoto8 = mysqli_query($connection, $selectmtoto8);

$selectmtoto9 = "SELECT * FROM mtototable";
$sqlmtoto9 = mysqli_query($connection, $selectmtoto9);

$selectmtoto10 = "SELECT * FROM mtototable";
$sqlmtoto10 = mysqli_query($connection, $selectmtoto10);

$selectmtoto11 = "SELECT * FROM mtototable";
$sqlmtoto11 = mysqli_query($connection, $selectmtoto11);

$selectmtoto12 = "SELECT * FROM mtototable";
$sqlmtoto12 = mysqli_query($connection, $selectmtoto12);

$selectmtoto13 = "SELECT * FROM mtototable";
$sqlmtoto13 = mysqli_query($connection, $selectmtoto13);

$selectmtoto14 = "SELECT * FROM mtototable";
$sqlmtoto14 = mysqli_query($connection, $selectmtoto14);

$selectmtoto15 = "SELECT * FROM mtototable";
$sqlmtoto15 = mysqli_query($connection, $selectmtoto15);

$selectmtoto16 = "SELECT * FROM mtototable";
$sqlmtoto16 = mysqli_query($connection, $selectmtoto16);

$selectmtoto17 = "SELECT * FROM mtototable";
$sqlmtoto17= mysqli_query($connection, $selectmtoto17);

$selectmtoto18= "SELECT * FROM mtototable";
$sqlmtoto18= mysqli_query($connection, $selectmtoto18);

$selectmtoto19 = "SELECT * FROM mtototable";
$sqlmtoto19 = mysqli_query($connection, $selectmtoto19);

$selectmtoto20 = "SELECT * FROM mtototable";
$sqlmtoto20 = mysqli_query($connection, $selectmtoto20);

if (isset($_POST['wasilishamama'])) {

  $name1 = $_POST['name1'];
  $name2 = $_POST['name2'];
  $name3 = $_POST['name3'];
  $name4 = $_POST['name4'];
  $jinalakwanza = $_POST['jinalakwanzamama'];
  $jinalapili = $_POST['jinalapilimama'];
  $jinalamwisho = $_POST['jinalamwishomama'];
  $jinalingine = $_POST['jinalinginemama'];
  $nchialiyozaliwamama = $_POST['nchialiyozaliwamama'];
  $tareheyakuzaliwa = $_POST['tareheyakuzaliwamama'];
  $mkoamakazi = $_POST['mkoamakazimama'];
  $wilayamakazi = $_POST['wilayamakazimama'];
  $katayamakazi = $_POST['katayamakazimama'];
  $kijijichamakazi = $_POST['kijijichamakazimama'];
  $nambayasimumama = $_POST['nambayasimumama'];
  $kaziyamama = $_POST['kaziyamama'];


    $idsql = "SELECT * FROM mtototable WHERE fname='$name1' AND sname='$name2' AND lname = '$name3' AND othername = '$name4'";
    $idrun = mysqli_query($connection, $idsql);
    $fetchid = mysqli_fetch_assoc($idrun);
    $idmtoto = $fetchid['mtotoid'];

    $select = "SELECT * FROM mamatable WHERE mtotoid='$idmtoto'";
    $run = mysqli_query($connection, $select);
    $checkmtoto = mysqli_num_rows($run);

    $sqlselect = "SELECT * FROM mamatable WHERE fname='$jinalakwanza' AND sname='$jinalapili' AND lname = '$jinalamwisho' AND othername='$jinalingine' AND mtotoid='$idmtoto'";
    $sqlrun = mysqli_query($connection, $sqlselect); 
    $checkmama = mysqli_num_rows($sqlrun);

    if ($checkmama > 0) {
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za mama kwa mtoto huyu zimeshatumika!!
              </div>';
    }elseif ($checkmtoto > 0) {
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za mtoto aliechaguliwa zimeshatumika!!
              </div>';
    }else{

    $sqlinsert = "INSERT INTO mamatable(mtotoid,fname,sname,lname,othername,nation,dateofbirth,region,district,ward,street,phone,job,idno) VALUES('$idmtoto','$jinalakwanza','$jinalapili','$jinalamwisho','$jinalingine','$nchialiyozaliwamama','$tareheyakuzaliwa','$mkoamakazi','$wilayamakazi','$katayamakazi','$kijijichamakazi','$nambayasimumama','$kaziyamama','2012')";
    $insertrun = mysqli_query($connection, $sqlinsert);
    $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa za mama zimetumwa kikamilifu!!
              </div>';
  }
  
}

if (isset($_POST['submit'])) {

  $name5 = $_POST['name5'];
  $name6 = $_POST['name6'];
  $name7 = $_POST['name7'];
  $name8 = $_POST['name8'];
  $jinalakwanza = $_POST['jinalakwanzababa'];
  $jinalapili = $_POST['jinalapilibaba'];
  $jinalamwisho = $_POST['jinalamwishobaba'];
  $jinalingine = $_POST['jinalinginebaba'];
  $nchialiyozaliwamama = $_POST['nchialiyozaliwababa'];
  $tareheyakuzaliwa = $_POST['tareheyakuzaliwababa'];
  $mkoamakazi = $_POST['mkoamakazibaba'];
  $wilayamakazi = $_POST['wilayamakazibaba'];
  $katayamakazi = $_POST['katayamakazibaba'];
  $kijijichamakazi = $_POST['kijijichamakazibaba'];
  $nambayasimumama = $_POST['nambayasimubaba'];
  $kaziyamama = $_POST['kaziyababa'];


    $idsql = "SELECT * FROM mtototable WHERE fname='$name5' AND sname='$name6' AND lname = '$name7' AND othername = '$name8'";
    $idrun = mysqli_query($connection, $idsql);
    $fetchid = mysqli_fetch_assoc($idrun);
    $idmtoto = $fetchid['mtotoid'];

    $select = "SELECT * FROM babatable WHERE mtotoid='$idmtoto'";
    $run = mysqli_query($connection, $select);
    $checkmtoto = mysqli_num_rows($run);

    $sqlselect = "SELECT * FROM babatable WHERE fname='$jinalakwanza' AND sname='$jinalapili' AND lname = '$jinalamwisho' AND othername='$jinalingine' AND mtotoid='$idmtoto'";
    $sqlrun = mysqli_query($connection, $sqlselect); 
    $checkbaba = mysqli_num_rows($sqlrun);

    if ($checkbaba > 0) {
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za baba kwa mtoto huyu zimeshatumika!!
              </div>';
    }elseif ($jinalakwanza !== $name6  || $jinalamwisho !== $name7) {
       $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za baba sio sahihi!!
              </div>';
    }elseif ($checkmtoto > 0) {
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za mtoto aliechaguliwa zimeshatumika!!
              </div>';
    }else{

    $sqlinsert = "INSERT INTO babatable(mtotoid,fname,sname,lname,othername,nation,dateofbirth,region,district,ward,street,phone,job,idno) VALUES('$idmtoto','$jinalakwanza','$jinalapili','$jinalamwisho','$jinalingine','$nchialiyozaliwamama','$tareheyakuzaliwa','$mkoamakazi','$wilayamakazi','$katayamakazi','$kijijichamakazi','$nambayasimumama','$kaziyamama','2012')";
    $insertrun = mysqli_query($connection, $sqlinsert);
    $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa za baba zimetumwa kikamilifu!!
              </div>';
  }
  
}
if (isset($_POST['wasilishataarifa'])) {
  $name9  = $_POST['name9'];
  $name10 = $_POST['name10'];
  $name11 = $_POST['name11'];
  $name12 = $_POST['name12'];

  $jinalakwanzataarifa =$_POST['jinalakwanzataarifa'];
  $jinalapilitaarifa =$_POST['jinalapilitaarifa'];
  $uhusiano =$_POST['uhusiano'];
  $anuani =$_POST['anuani'];
  $nambayasimutaarifa =$_POST['nambayasimutaarifa'];
  $nambayautambulishotaarifa =$_POST['nambayautambulishotaarifa'];
  $baruapepe =$_POST['baruapepe'];


    $idsql = "SELECT * FROM mtototable WHERE fname='$name9' AND sname='$name10' AND lname = '$name11' AND othername = '$name12'";
    $idrun = mysqli_query($connection, $idsql);
    $fetchid = mysqli_fetch_assoc($idrun);
    $idmtoto = $fetchid['mtotoid'];

     $select = "SELECT * FROM taarifatable WHERE mtotoid='$idmtoto'";
     $run = mysqli_query($connection, $select);
     $checkmtoto = mysqli_num_rows($run);

    if ($checkmtoto > 0) {
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Samahani taarifa za mtoto aliechaguliwa zimeshatumika!!
              </div>';
}else{

    $sqlinsert = "INSERT INTO taarifatable( mtotoid, fname, sname, relationship,  address, phone, email, idno) VALUES('$idmtoto','$jinalakwanzataarifa','$jinalapilitaarifa','$uhusiano','$anuani','$nambayasimutaarifa','$baruapepe',2012)";
     $insertrun = mysqli_query($connection, $sqlinsert);
      $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa zako zimetumwa kikamilifu!!
              </div>';
}
}


if (isset($_POST['wasilishahati'])) {
  $name17 = $_POST['name17'];
  $name18 = $_POST['name18'];
  $name19 = $_POST['name19'];
  $name20 = $_POST['name20'];
  $file = $_FILES['file'];
  $typedoc = $_POST['typedoc'];


    $idsql = "SELECT * FROM mtototable WHERE fname='$name17' AND sname='$name18' AND lname = '$name19' AND othername = '$name20'";
    $idrun = mysqli_query($connection, $idsql);
    $fetchid = mysqli_fetch_assoc($idrun);
    $idmtoto = $fetchid['mtotoid'];

     $select = "SELECT * FROM atachments WHERE mtotoid='$idmtoto'";
     $run = mysqli_query($connection, $select);
     $checkmtoto = mysqli_num_rows($run);

//     if ($checkmtoto > 0) {
//       $error = '<div class="alert alert-danger alert-dismissible">
//                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
//                 Samahani taarifa za mtoto aliechaguliwa zimeshatumika!!
//               </div>';
// }else


  $filename = $_FILES['file']['name'];
  $filetempname = $_FILES['file']['tmp_name'];
  $filesize = $_FILES['file']['size'];
  $fileerror = $_FILES['file']['error'];
  $filetype = $_FILES['file']['type'];


  $fileext = explode('.', $filename);
  $fileactualext = strtolower(end($fileext));
  $allowedext = array('pdf');

  if (in_array($fileactualext, $allowedext)) {
    if ($fileerror === 0) {
      if ($filesize < 2000000) {
        $filenamenew = uniqid('', true).'.'.$fileactualext;
        $filedestination = "uploads/".$filenamenew;
        move_uploaded_file($filetempname, $filedestination);

          if ($typedoc == 'Hospital Notification') {
            
            $sqldoc = "UPDATE atachments SET hospital_note = '$filedestination' WHERE mtotoid ='$idmtoto'";
            $rundoc = mysqli_query($connection, $sqldoc);
            $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa zako zimetumwa kikamilifu!!
              </div>';
          }elseif ($typedoc == 'Barua ya Mtendaji') {
            $sqldoc2 = "UPDATE atachments SET baruamtendaji = '$filedestination' WHERE mtotoid ='$idmtoto'";
            $rundoc2 = mysqli_query($connection, $sqldoc2);
            $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa zako zimetumwa kikamilifu!!
              </div>';
          }else{
            $sqldoc3 = "UPDATE atachments SET other = '$filedestination' WHERE mtotoid ='$idmtoto'";
            $rundoc3 = mysqli_query($connection, $sqldoc3);
            $success = '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Taarifa zako zimetumwa kikamilifu!!
              </div>';
          }
        
      }else{
        $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                File is too big!!
              </div>';
      }
    }else{
      $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                There was an error in uploading this file!!
              </div>';
    }
  }else{
    $error = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                You can not upload type of this file!!
              </div>';
  }



}
 ?>


<?php 
include 'userheader.php'; 
 ?>
 
<?php include 'navadmin.php'; ?>


<div class="content-wrapper" style="margin-left: 280px;">
  
  <section class="content-header">
    <h1>BELOW 10 YEARS APPLICATION</h1>
  </section>
    <!-- Main content -->

    <section class="content">
      <?php 
    echo $success;
    echo $error;
     ?>
      <!-- /.box -->
      
      <div class="row">
        <div class="col-md-6">

     
            <div class="box-body">
               <form method="POST">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary  collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MTOTO</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanza" class="form-control" placeholder="Jina la kwanza" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapili" class="form-control" placeholder="Jina la Pili" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwisho" class="form-control" placeholder="Jina la Mwisho" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalingine" class="form-control" placeholder="Jina lingine" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jinsia:</label>
                    <select class="form-control" name="jinsia">
                      <option selected disabled>--</option>
                      <option>KIKE</option>
                      <option>KIUME</option>
                    </select>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwa" class="form-control" placeholder="Tarehe ya kuzaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mahali alipozaliwa:</label>
                    <select class="form-control" name="mahalipakuzaliwa">
                      <option selected disabled>--</option>
                      <option>KITUO CHA TIBA</option>
                      <option>NYUMBANI</option>
                      <option>MAHALI PENGINE</option>
                    </select>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la mahali alipozaliwa:</label>
                    <input type="text" name="jinamahali" class="form-control" placeholder="Jina la mahali alipozaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa aliozaliwa:</label>
                    <input type="text" name="mkoaaliozaliwa" class="form-control" placeholder="Mkoa aliozaliwa" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya aliyozaliwa</label>
                    <input type="text" name="wilayaaliozaliwa" class="form-control" placeholder="Wilaya aliyozaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata aliyozaliwa:</label>
                    <input type="text" name="kataaliyozaliwa" class="form-control" placeholder="Kata aliyozaliwa" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa alichozaliwa:</label>
                    <input type="text" name="kijijialichozaliwa" class="form-control" placeholder="Kijiji/Mtaa alichozaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazi" class="form-control" placeholder="Jina la Mkoa makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazi" class="form-control" placeholder="Jina la Wilaya ya makazi" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazi" class="form-control" placeholder="Jina la Kata ya makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazi" class="form-control" placeholder="Jina la Kijiji cha makazi" required>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <input type="hidden" name="age" value="below10">
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <button class="btn btn-primary btn-block" name="wasilishamtoto">Wasilisha</button>
                  </div>
              
                </div>
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </form>
            </div>
            <!-- /.box-body -->
      <div class="box-body">
        <form method="POST">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MAMA</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
                        <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-3">
                      <label>Chagua jina la kwanza la mtoto:</label>
                    <select class="form-control select2" name="name1" id="kidname">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result1 = mysqli_fetch_assoc($sqlmtoto1)) {
                          echo '<option>'.$result1['fname'].'</option>';
                        }
                         ?>
                      </select>
                    </div>
                      <div class="col col-md-3">
                      <label>Chagua jina la pili la mtoto:</label>
                    <select class="form-control select2" name="name2">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result2 = mysqli_fetch_assoc($sqlmtoto2)) {
                          echo '<option>'.$result2['sname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina la mwisho la mtoto:</label>
                    <select class="form-control select2" name="name3">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result3 = mysqli_fetch_assoc($sqlmtoto3)) {
                          echo '<option>'.$result3['lname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina lengine la mtoto:</label>
                    <select class="form-control select2" name="name4">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result4 = mysqli_fetch_assoc($sqlmtoto4)) {
                          echo '<option>'.$result4['othername'].'</option>';
                        }
                         ?>
                      </select>
                </div> 
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzamama" class="form-control" placeholder="Jina la kwanza" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilimama" class="form-control" placeholder="Jina la Pili" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishomama" class="form-control" placeholder="Jina la Mwisho" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginemama" class="form-control" placeholder="Jina lingine" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwamama" class="form-control" placeholder="Nchi aliyozaliwa" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwamama" class="form-control" placeholder="Tarehe ya kuzaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazimama" class="form-control" placeholder="Jina la Mkoa makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazimama" class="form-control" placeholder="Jina la Wilaya ya makazi" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazimama" class="form-control" placeholder="Jina la Kata ya makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazimama" class="form-control" placeholder="Jina la Kijiji cha makazi" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimumama" class="form-control" placeholder="Namabari ya simu" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya Mama</label>
                    <input type="text" name="kaziyamama" class="form-control" placeholder="Namabari ya simu" required>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishomama" class="form-control" placeholder="Namabari ya utambulisho" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <button class="btn btn-primary btn-block" name="wasilishamama">Wasilisha</button>
                  </div>
              
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </form>
            </div>
                      <!-- iCheck -->
          <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">WASILISHA HATI</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <div class="form-group">
                <form method="POST" enctype="multipart/form-data" > 
                <div class="row">
                  <div class="col col-md-3">
                      <label>Chagua jina la kwanza la mtoto:</label>
                    <select class="form-control select2" name="name17" id="kidname">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result17 = mysqli_fetch_assoc($sqlmtoto17)) {
                          echo '<option>'.$result17['fname'].'</option>';
                        }
                         ?>
                      </select>
                    </div>
                      <div class="col col-md-3">
                      <label>Chagua jina la pili la mtoto:</label>
                    <select class="form-control select2" name="name18">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result18 = mysqli_fetch_assoc($sqlmtoto18)) {
                          echo '<option>'.$result18['sname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina la mwisho la mtoto:</label>
                    <select class="form-control select2" name="name19">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result19 = mysqli_fetch_assoc($sqlmtoto19)) {
                          echo '<option>'.$result19['lname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina lengine la mtoto:</label>
                    <select class="form-control select2" name="name20">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result20 = mysqli_fetch_assoc($sqlmtoto20)) {
                          echo '<option>'.$result20['othername'].'</option>';
                        }
                         ?>
                      </select>
                </div> 
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Chagua Aina ya Hati:</label> 
                    <select class="form-control " id="select2" name="typedoc">
                        <option selected disabled>--</option>
                        <option>Hospital Notification</option>
                        <option>Barua ya Mtendaji</option>
                  </select>
                  </div>
                  <div class="col col-md-6">
                    <label>Wasilisha Hati</label>
                    <input type="file" name="file" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <button class="btn btn-primary btn-block" name="wasilishahati">Wasilisha</button>
                  </div>
              
                </div>
              </div>
               </form>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
         <div class="box-body">
          <form method="POST">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA BABA</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
                              <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-3">
                      <label>Chagua jina la kwanza la mtoto:</label>
                    <select class="form-control select2" name="name5">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result5 = mysqli_fetch_assoc($sqlmtoto5)) {
                          echo '<option>'.$result5['fname'].'</option>';
                        }
                         ?>
                      </select>
                    </div>
                      <div class="col col-md-3">
                      <label>Chagua jina la pili la mtoto:</label>
                    <select class="form-control select2" name="name6">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result6 = mysqli_fetch_assoc($sqlmtoto6)) {
                          echo '<option>'.$result6['sname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina la mwisho la mtoto:</label>
                    <select class="form-control select2" name="name7">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result7 = mysqli_fetch_assoc($sqlmtoto7)) {
                          echo '<option>'.$result7['lname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina lengine la mtoto:</label>
                    <select class="form-control select2" name="name8">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result8 = mysqli_fetch_assoc($sqlmtoto8)) {
                          echo '<option>'.$result8['othername'].'</option>';
                        }
                         ?>
                      </select>
                </div> 
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzababa" class="form-control" placeholder="Jina la kwanza" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilibaba" class="form-control" placeholder="Jina la Pili" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishobaba" class="form-control" placeholder="Jina la Mwisho" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginebaba" class="form-control" placeholder="Jina lingine" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwababa" class="form-control" placeholder="Nchi aliyozaliwa" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwababa" class="form-control" placeholder="Tarehe ya kuzaliwa" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazibaba" class="form-control" placeholder="Jina la Mkoa makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazibaba" class="form-control" placeholder="Jina la Wilaya ya makazi" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazibaba" class="form-control" placeholder="Jina la Kata ya makazi" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazibaba" class="form-control" placeholder="Jina la Kijiji cha makazi" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimubaba" class="form-control" placeholder="Namabari ya simu" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya baba</label>
                    <input type="text" name="kaziyababa" class="form-control" placeholder="Namabari ya simu" required>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishobaba" class="form-control" placeholder="Namabari ya utambulisho" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <button class="btn btn-primary btn-block" name="submit">Wasilisha</button>
                  </div>
              
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </form>
            </div>

          <!-- iCheck -->
          <div class="box-body">
            <form method="POST">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MTOA TAARIFA </h3>

               <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
                              <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-3">
                      <label>Chagua jina la kwanza la mtoto:</label>
                    <select class="form-control select2" name="name9">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result9 = mysqli_fetch_assoc($sqlmtoto9)) {
                          echo '<option>'.$result9['fname'].'</option>';
                        }
                         ?>
                      </select>
                    </div>
                      <div class="col col-md-3">
                      <label>Chagua jina la pili la mtoto:</label>
                    <select class="form-control select2" name="name10">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result10 = mysqli_fetch_assoc($sqlmtoto10)) {
                          echo '<option>'.$result10['sname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina la mwisho la mtoto:</label>
                    <select class="form-control select2" name="name11">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result11 = mysqli_fetch_assoc($sqlmtoto11)) {
                          echo '<option>'.$result11['lname'].'</option>';
                        }
                         ?>
                      </select>
                </div>
                <div class="col col-md-3">
                      <label>Chagua jina lengine la mtoto:</label>
                    <select class="form-control select2" name="name12">
                        <option selected="selected">--</option>
                        <?php 
                        while ($result12 = mysqli_fetch_assoc($sqlmtoto12)) {
                          echo '<option>'.$result12['othername'].'</option>';
                        }
                         ?>
                      </select>
                </div>  
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzataarifa" class="form-control" placeholder="Jina la kwanza" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilitaarifa" class="form-control" placeholder="Jina la Pili" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Uhusiano:</label>
                    <select class="form-control">
                        <option selected="selected" name="uhusiano">--</option>
                        <option>BABA</option>
                        <option>MAMA</option>
                        <option>MTUMISHI WA TIBA</option>>
                        <option>MWENGINE YOYOTE</option>>
                      </select>
                  </div>
                  <div class="col col-md-6">
                    <label>Anuani</label>
                    <input type="text" name="anuani" class="form-control" placeholder="Anuani" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimutaarifa" class="form-control" placeholder="Namabari ya simu" required>
                  </div>
                  <div class="col col-md-6">
                    <label>Barua pepe</label>
                    <input type="text" name="baruapepe" class="form-control" placeholder="Barua Pepe (sio lazima)" required>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishotaarifa" class="form-control" placeholder="Namabari ya utambulisho" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <button class="btn btn-primary btn-block" name="wasilishataarifa">Wasilisha</button>
                  </div>
              
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </form>
            </div>
          <!-- /.box -->

    </div>
  </div>
</div>
</section>
</div>
        
        
           
          <!-- /.box -->

        </div>
        </div>
      </div>
    </section>
  </div>



    

<?php require 'script1.php'; ?>

<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Rita</b>Tanzania
    </div>
    <strong>Copyright &copy; 2020 </strong> All rights
    reserved.
  </footer>



