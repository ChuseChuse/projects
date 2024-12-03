<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['userid'])) {
  header("location:index.php");
}else{
  $user = $_SESSION['userid'];
}

$url = $_SERVER['REQUEST_URI'];
$cut = explode('?', $url);
$mtotoid = end($cut);

$select = "SELECT * FROM mtototable WHERE mtotoid='$mtotoid'";
$run = mysqli_query($connection, $select);
$data = mysqli_fetch_assoc($run);

$selectmama = "SELECT * FROM mamatable WHERE mtotoid='$mtotoid'";
$runmama = mysqli_query($connection, $selectmama);
$result = mysqli_fetch_assoc($runmama);

$selectbaba = "SELECT * FROM babatable WHERE mtotoid='$mtotoid'";
$runbaba = mysqli_query($connection, $selectbaba);
$row = mysqli_fetch_assoc($runbaba);

$selectaarifa = "SELECT * FROM taarifatable WHERE mtotoid='$mtotoid'";
$runtaarifa = mysqli_query($connection, $selectaarifa);
$choose = mysqli_fetch_assoc($runtaarifa);

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


    $queryupdate = "UPDATE mtototable SET fname = '$jinalakwanza', sname='$jinalapili', lname ='$jinalamwisho', othername='$jinalingine', gender='$jinsia',date_birth = '$tareheyakuzaliwa', placeofbirth = '$mahalipakuzaliwa', nameofplace = '$jinamahali', regionofbirth = '$mkoaaliozaliwa', districtofbirth = '$wilayaaliozaliwa', wardofbirth = '$kataaliyozaliwa', streetofbirth = '$kijijialichozaliwa', region = '$mkoamakazi', district = '$wilayamakazi', ward = '$katayamakazi', street = '$kijijichamakazi', status = 0 WHERE mtotoid='$mtotoid'";
    $insertrun = mysqli_query($connection, $queryupdate);
    header("location: update_application.php?".$mtotoid);


}
if (isset($_POST['wasilishamama'])) {

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


  
    $sqliupdate = "UPDATE mamatable SET mtotoid= '$mtotoid',fname = '$jinalakwanza', sname='$jinalapili', lname ='$jinalamwisho', othername='$jinalingine',nation='$nchialiyozaliwamama', dateofbirth='$tareheyakuzaliwa', region = '$mkoamakazi', district = '$wilayamakazi', ward = '$katayamakazi', street = '$kijijichamakazi',phone='$nambayasimumama',job='$kaziyamama' WHERE mtotoid='$mtotoid'"; 
    $insertrun = mysqli_query($connection, $sqliupdate);
    $sqlistatus = "UPDATE mtototable SET statusmama = 0 WHERE mtotoid = '$mtotoid'";
    $statusrun = mysqli_query($connection, $sqlistatus);
     header("location: update_application.php?".$mtotoid);
   
  }

  if (isset($_POST['wasilishababa'])) {

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
  $nambayasimubaba = $_POST['nambayasimubaba'];
  $kaziyababa = $_POST['kaziyababa'];

  $sqliupdate = "UPDATE babatable SET mtotoid= '$mtotoid',fname = '$jinalakwanza', sname='$jinalapili', lname ='$jinalamwisho', othername='$jinalingine',nation='$nchialiyozaliwamama', dateofbirth='$tareheyakuzaliwa', region = '$mkoamakazi', district = '$wilayamakazi', ward = '$katayamakazi', street = '$kijijichamakazi',phone='$nambayasimubaba',job='$kaziyababa' WHERE mtotoid='$mtotoid'"; 
    $insertrun = mysqli_query($connection, $sqliupdate);
    $sqlistatus = "UPDATE mtototable SET statusbaba = 0 WHERE mtotoid = '$mtotoid'";
    $statusrun = mysqli_query($connection, $sqlistatus);
     header("location: update_application.php?".$mtotoid);
   }

   if (isset($_POST['wasilishataarifa'])) {

  $jinalakwanzataarifa =$_POST['jinalakwanzataarifa'];
  $jinalapilitaarifa =$_POST['jinalapilitaarifa'];
  $uhusiano =$_POST['uhusiano'];
  $anuani =$_POST['anuani'];
  $nambayasimutaarifa =$_POST['nambayasimutaarifa'];
  $nambayautambulishotaarifa =$_POST['nambayautambulishotaarifa'];
  $baruapepe =$_POST['baruapepe'];
  

  $sqliupdate = "UPDATE taarifatable  SET  mtotoid ='$mtotoid', fname='jinalakwanzataarifa', sname='jinalapilitaarifa', relationship='$uhusiano',  address='$anuani', phone='nambayasimutaarifa', email='$baruapepe' WHERE mtotoid =  '$mtotoid'";
  $insertrun = mysqli_query($connection, $sqliupdate);
  $sqlistatus = "UPDATE mtototable SET statustaarifa = 0 WHERE mtotoid = '$mtotoid'";
  $statusrun = mysqli_query($connection, $sqlistatus);
   header("location: update_application.php?".$mtotoid);
   }

   if (isset($_POST['wasilishahati'])) {

  $file = $_FILES['file'];
  $typedoc = $_POST['typedoc'];


    // $idsql = "SELECT * FROM mtototable WHERE fname='$name17' AND sname='$name18' AND lname = '$name19' AND othername = '$name20'";
    // $idrun = mysqli_query($connection, $idsql);
    // $fetchid = mysqli_fetch_assoc($idrun);
    // $idmtoto = $fetchid['mtotoid'];

     // $select = "SELECT * FROM atachments WHERE mtotoid='$mtotoid'";
     // $run = mysqli_query($connection, $select);
     //$checkmtoto = mysqli_num_rows($run);

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
            
            $sqldoc = "UPDATE atachments SET hospital_note = '$filedestination' WHERE mtotoid ='$mtotoid'";
            $rundoc = mysqli_query($connection, $sqldoc);

            $updst = mysqli_query($connection, "update mtototable set statushati = 0,comment = '' where mtotoid = '$mtotoid'");
            header("location: update_application.php?".$mtotoid);  
          }elseif ($typedoc == 'Barua ya Mtendaji') {
            $sqldoc2 = "UPDATE atachments SET baruamtendaji = '$filedestination' WHERE mtotoid ='$mtotoid'";
            $rundoc2 = mysqli_query($connection, $sqldoc2);
              $updst = mysqli_query($connection, "update mtototable set statushati = 0,comment = '' where mtotoid = '$mtotoid'");
            header("location: update_application.php?".$mtotoid);
          }else{
            $sqldoc3 = "UPDATE atachments SET other = '$filedestination' WHERE mtotoid ='$mtotoid'";
            $rundoc3 = mysqli_query($connection, $sqldoc3);
              $updst = mysqli_query($connection, "update mtototable set statushati = 0,comment = '' where mtotoid = '$mtotoid'");
            header("location: update_application.php?".$mtotoid);
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


<?php  include 'userheader.php'; ?>
<!-- Site wrapper -->
  <?php include 'navuser.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content-header">
             <div class="col-md-4 pull-right">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Maelezo ya Urudishwaji Taarifa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body text-bold">
              <?php echo $data['comment']; ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          <a href="90dayapplicationuser.php" class="btn btn-success">Go back!</a>
      <h3>90 Days Applications Information for <b><?php echo $data['fname'].' '.$data['sname']; ?></b></h3><br>

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form method="POST">
        <div class="col-md-6">

     
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary  collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MTOTO 
                <?php 
                  if ($data['status'] == 1) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?>
              </h3>

              <div class="box-tools pull-right">
                <?php if ($data['status'] == 2) {
                  echo '<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>';
                } 
                ?>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanza" class="form-control" value="<?php echo $data['fname']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapili" class="form-control" value="<?php echo $data['sname']; ?>" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwisho" class="form-control" value="<?php echo $data['lname']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalingine" class="form-control" value="<?php echo $data['othername']; ?>" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jinsia:</label>
                    <input type="text" name="jinsia" class="form-control" value="<?php echo $data['gender']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwa" class="form-control" value="<?php echo $data['date_birth']; ?>" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mahali alipozaliwa:</label>
                    <input type="text" name="mahalipakuzaliwa" class="form-control" value="<?php echo $data['placeofbirth']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la mahali alipozaliwa:</label>
                    <input type="text" name="jinamahali" class="form-control" value="<?php echo $data['nameofplace']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa aliozaliwa:</label>
                    <input type="text" name="mkoaaliozaliwa" class="form-control" value="<?php echo $data['regionofbirth']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya aliyozaliwa</label>
                    <input type="text" name="wilayaaliozaliwa" class="form-control" value="<?php echo $data['districtofbirth']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata aliyozaliwa:</label>
                    <input type="text" name="kataaliyozaliwa" class="form-control" value="<?php echo $data['wardofbirth']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa alichozaliwa:</label>
                    <input type="text" name="kijijialichozaliwa" class="form-control" value="<?php echo $data['streetofbirth']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazi" class="form-control" value="<?php echo $data['region']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazi" class="form-control" value="<?php echo $data['district']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazi" class="form-control" value="<?php echo $data['ward']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazi" class="form-control" value="<?php echo $data['street']; ?>">
                  </div>
                </div>
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <input type="hidden" name="age" value="90day">
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <button name="wasilishamtoto" class=" btn btn-block btn-success">Update</button>
                  </div>
              
                </div>
              </div>
                       <!-- /.box -->
          </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
            </div>
            <!-- /.box-body -->
      <div class="box-body">

              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MAMA
                <?php 
                  if ($data['statusmama'] == 3) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?>
              </h3>

              <div class="box-tools pull-right">
                <?php if ($data['statusmama'] == 4) {
                  echo '<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>';
                } 
                ?>
                
              </div>
              <!-- /.box-tools -->
            </div>
             <form method="POST" enctype="multipart/form-data">           <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <p class="container">
                    Hakiki Taarifa za Mama kwa mtoto <b><?php echo $data['fname'].' '.$data['sname']; ?></b>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzamama" class="form-control" value="<?php echo $result['fname']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilimama" class="form-control" value="<?php echo $result['sname']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishomama" class="form-control" value="<?php echo $result['lname']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginemama" class="form-control" value="<?php echo $result['othername']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwamama" class="form-control" value="<?php echo $result['nation']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwamama" class="form-control" value="<?php echo $result['dateofbirth']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazimama" class="form-control" value="<?php echo $result['region']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazimama" class="form-control" value="<?php echo $result['district']; ?>" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazimama" class="form-control" value="<?php echo $result['ward']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazimama" class="form-control" value="<?php echo $result['street']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimumama" class="form-control" value="<?php echo $result['phone']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya Mama</label>
                    <input type="text" name="kaziyamama" class="form-control" value="<?php echo $result['job']; ?>">
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishomama" class="form-control" value="<?php echo $result['idno']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <button name="wasilishamama" class=" btn btn-block btn-success">Update</button>
                  </div>
              
                </div>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
                      <!-- iCheck -->
          <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">WASILISHA HATI </h3>

              <div class="box-tools pull-right">
               
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
      
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <form method="POST" enctype="multipart/form-data">
           <div class="box-body">

              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Chagua Aina ya Hati:</label>
                    <select class="form-control select2">
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

              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA BABA
                <?php 
                  if ($data['statusbaba'] == 5) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?>
              </h3>

              <div class="box-tools pull-right">
                <?php if ($data['statusbaba'] == 6) {
                  echo '<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>';
                } 
                ?>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
                              <!-- /.box-header -->
          <form method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <div class="row">
                  <p class="container">
                    Hakiki Taarifa za Baba kwa mtoto <b><?php echo $data['fname'].' '.$data['sname']; ?></b>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzababa" class="form-control"  value="<?php echo $row['fname']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilibaba" class="form-control" value="<?php echo $row['sname']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishobaba" class="form-control" value="<?php echo $row['lname']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginebaba" class="form-control" value="<?php echo $row['othername']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwababa" class="form-control" value="<?php echo $row['nation']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwababa" class="form-control" value="<?php echo $row['dateofbirth']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazibaba" class="form-control" value="<?php echo $row['region']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazibaba" class="form-control" value="<?php echo $row['district']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazibaba" class="form-control" value="<?php echo $row['ward']; ?>" >
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazibaba" class="form-control" value="<?php echo $row['street']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimubaba" class="form-control" value="<?php echo $row['phone']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya baba</label>
                    <input type="text" name="kaziyababa" class="form-control" value="<?php echo $row['job']; ?>">
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishobaba" class="form-control" value="<?php echo $row['idno']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <button name="wasilishababa" class=" btn btn-block btn-success">Update</button>
                  </div>
              
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>

          <!-- iCheck -->
          <div class="box-body">

              <!-- Date dd/mm/yyyy -->
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MTOA TAARIFA 
                <?php 
                  if ($data['statustaarifa'] == 7) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?></h3>

               <div class="box-tools pull-right">
                <?php if ($data['statustaarifa'] == 8) {
                  echo '<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>';
                } 
                ?>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
                              <!-- /.box-header -->
            <form method="POST">                  
            <div class="box-body">
              <div class="form-group">
              <div class="row">
                  <p class="container">
                    Hakiki Taarifa za Mtoa taarifa kwa mtoto <b><?php echo $data['fname'].' '.$data['sname']; ?></b>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzataarifa" class="form-control" value="<?php echo $choose['fname']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilitaarifa" class="form-control" value="<?php echo $choose['sname']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Uhusiano:</label>
                    <input type="text" name="" class="form-control" value="<?php echo $choose['relationship']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Anuani</label>
                    <input type="text" name="anuani" class="form-control" value="<?php echo $choose['address']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimutaarifa" class="form-control" value="<?php echo $choose['phone']; ?>">
                  </div>
                  <div class="col col-md-6">
                    <label>Barua pepe</label>
                    <input type="text" name="baruapepe" class="form-control" value="<?php echo $choose['email']; ?>">
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishotaarifa" class="form-control" value="<?php echo $choose['idno']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                   <button name="wasilishataarifa" class=" btn btn-block btn-success">Update</button>
                  </div>
              
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
          </div>
      </form>
            </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->

        <!-- /.modal -->
    </section>
    <!-- mwisho -->
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



