<?php 

session_start();
require 'db_connection.php';
$success=NULL;
if (!isset($_SESSION['id_superadmin'])) {
  header("location:index.php");
}else{
  $user = $_SESSION['id_superadmin'];
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


if (isset($_POST['sahihimtoto'])) {

  $sqlupdate = "UPDATE mtototable SET status = 1, comment = '-' WHERE mtotoid='$mtotoid'";
  $runupdate = mysqli_query($connection, $sqlupdate);
  header("location: information_user.php?".$mtotoid);
}
if (isset($_POST['siosahihimtoto'])) {
  $maelezo = $_POST['maelezo'];

  $runmaelezo = mysqli_query($connection, "UPDATE mtototable SET status= 2,comment = '$maelezo' WHERE mtotoid = '$mtotoid'");
  header("location: 90dayapplication.php");

}

if (isset($_POST['sahihimama'])) {

  $sqlupdate = "UPDATE mtototable SET statusmama = 3, comment = '-' WHERE mtotoid='$mtotoid'";
  $runupdate = mysqli_query($connection, $sqlupdate);
  header("location: information_user.php?".$mtotoid);
}
if (isset($_POST['siosahihimama'])) {
  $maelezomama = $_POST['maelezomama'];

  $runmaelezo = mysqli_query($connection, "UPDATE mtototable SET statusmama= 4,comment = '$maelezomama' WHERE mtotoid = '$mtotoid'");
  header("location: 90dayapplication.php");

}

if (isset($_POST['sahihibaba'])) {

  $sqlupdate = "UPDATE mtototable SET statusbaba = 5, comment = '-' WHERE mtotoid='$mtotoid'";
  $runupdate = mysqli_query($connection, $sqlupdate);
  header("location: information_user.php?".$mtotoid);
}
if (isset($_POST['siosahihibaba'])) {
  $maelezobaba = $_POST['maelezobaba'];

  $runmaelezo = mysqli_query($connection, "UPDATE mtototable SET statusbaba= 6,comment = '$maelezobaba' WHERE mtotoid = '$mtotoid'");
  header("location: 90dayapplication.php");

}


if (isset($_POST['sahihitaarifa'])) {

  $sqlupdate = "UPDATE mtototable SET statustaarifa = 7, comment = '-' WHERE mtotoid='$mtotoid'";
  $runupdate = mysqli_query($connection, $sqlupdate);
  header("location: information_user.php?".$mtotoid);
}
if (isset($_POST['siosahihitaarifa'])) {
  $maelezotaarifa = $_POST['maelezotaarifa'];

  $runmaelezo = mysqli_query($connection, "UPDATE mtototable SET statustaarifa= 8,comment = '$maelezotaarifaa' WHERE mtotoid = '$mtotoid'");
  header("location: 90dayapplication.php");

}

if (isset($_POST['sahihihati'])) {

  $sqlupdate = "UPDATE mtototable SET statushati = 9, comment = '-' WHERE mtotoid='$mtotoid'";
  $runupdate = mysqli_query($connection, $sqlupdate);
  header("location: information_user.php?".$mtotoid);
}
if (isset($_POST['siosahihihati'])) {
  $maelezo = $_POST['maelezohati'];

  $runmaelezo = mysqli_query($connection, "UPDATE mtototable SET statushati= 10,comment = '$maelezo' WHERE mtotoid = '$mtotoid'");
  header("location: 90dayapplication.php");

}

$runattach = mysqli_query($connection, "select * from atachments where mtotoid = '$mtotoid'");
$attach = mysqli_fetch_assoc($runattach);
?>


<?php  include 'header2.php'; ?>
<!-- Site wrapper -->
  <?php include 'navsuperadmin.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
          <a href="90dayapplication.php" class="btn btn-success">Go back!</a>
      <h3>90 Days Applications Information for <b><?php echo $data['fname'].' '.$data['sname']; ?></b></h3>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
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
                    <input type="text" name="jinalakwanza" class="form-control" value="<?php echo $data['fname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapili" class="form-control" value="<?php echo $data['sname']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwisho" class="form-control" value="<?php echo $data['lname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalingine" class="form-control" value="<?php echo $data['othername']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jinsia:</label>
                    <input type="text" name="jinsia" class="form-control" value="<?php echo $data['gender']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwa" class="form-control" value="<?php echo $data['date_birth']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mahali alipozaliwa:</label>
                    <input type="text" name="" class="form-control" value="<?php echo $data['placeofbirth']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la mahali alipozaliwa:</label>
                    <input type="text" name="jinamahali" class="form-control" value="<?php echo $data['nameofplace']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa aliozaliwa:</label>
                    <input type="text" name="mkoaaliozaliwa" class="form-control" value="<?php echo $data['regionofbirth']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya aliyozaliwa</label>
                    <input type="text" name="wilayaaliozaliwa" class="form-control" value="<?php echo $data['districtofbirth']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata aliyozaliwa:</label>
                    <input type="text" name="kataaliyozaliwa" class="form-control" value="<?php echo $data['wardofbirth']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa alichozaliwa:</label>
                    <input type="text" name="kijijialichozaliwa" class="form-control" value="<?php echo $data['streetofbirth']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazi" class="form-control" value="<?php echo $data['region']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazi" class="form-control" value="<?php echo $data['district']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazi" class="form-control" value="<?php echo $data['ward']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazi" class="form-control" value="<?php echo $data['street']; ?>" disabled>
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
              <table border="0">
                <tr>
                  <td> 
                  <div class="col col-md-12">
                    <form method="POST">
                    <button class="btn btn-success" name="sahihimtoto"><span class="fa fa-thumbs-o-up"></span> Sahihi</button>

                    <div class="modal modal-warning fade" id="modal-warning">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Maelezo ya urudishaji taarifa</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              <label>Maelezo: </label>
                              <textarea class="form-control" cols="8" rows="6" name="maelezo"></textarea>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button name="siosahihimtoto" class="btn btn-outline">Rudisha</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>

                    </form> 
                                       
                  </div>

            </td>
                <td>    
                  <button class="btn btn-danger" name="" data-toggle="modal" data-target="#modal-warning"><span class="fa fa-thumbs-o-down"></span> Sio Sahihi</button>
                </td>

                
 
              </tr>
              </table>
             
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
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
                        <!-- /.box-header -->
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
                    <input type="text" name="jinalakwanzamama" class="form-control" value="<?php echo $result['fname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilimama" class="form-control" value="<?php echo $result['sname']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishomama" class="form-control" value="<?php echo $result['lname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginemama" class="form-control" value="<?php echo $result['othername']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwamama" class="form-control" value="<?php echo $result['nation']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwamama" class="form-control" value="<?php echo $result['dateofbirth']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazimama" class="form-control" value="<?php echo $result['region']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazimama" class="form-control" value="<?php echo $result['district']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazimama" class="form-control" value="<?php echo $result['ward']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazimama" class="form-control" value="<?php echo $result['street']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimumama" class="form-control" value="<?php echo $result['phone']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya Mama</label>
                    <input type="text" name="kaziyamama" class="form-control" value="<?php echo $result['job']; ?>" disabled>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishomama" class="form-control" value="<?php echo $result['idno']; ?>" disabled>
                  </div>
                </div>
              </div>
              <table border="0">
                <tr>
                  <td> 
                  <div class="col col-md-12">
                    <form method="POST">
                    <button class="btn btn-success" name="sahihimama"><span class="fa fa-thumbs-o-up"></span> Sahihi</button>

                    <div class="modal modal-warning fade" id="modal-warning-mama">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Maelezo ya urudishaji taarifa</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              <label>Maelezo: </label>
                              <textarea class="form-control" cols="8" rows="6" name="maelezomama"></textarea>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button name="siosahihimama" class="btn btn-outline">Rudisha</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>

                    </form> 
                                       
                  </div>

            </td>
                <td>    
                  <button class="btn btn-danger" name="" data-toggle="modal" data-target="#modal-warning-mama"><span class="fa fa-thumbs-o-down"></span> Sio Sahihi</button>
                </td>

                
 
              </tr>
              </table>
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
              <h3 class="box-title">HAKIKI HATI</h3>
              <?php 
                  if ($data['statushati'] == 9) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
           <div class="box-body">

              <div class="form-group">
                  <div class="box-body">
                    <table border="0" cellspacing="0" width="400" style="height: 100px">
                      <tr>
                        <th>Hosoital Notification</th>
                        <th align="center"><a href="<?php echo $attach['hospital_note'];?>" target="_blank" class="btn btn-success">Fungua Hati</a></th>
                      </tr>
                      <tr>
                        <th>Barua ya Mtendaji</th>
                        <th align="center"><a href="<?php echo $attach['baruamtendaji'];?>" target="_blank" class="btn btn-success">Fungua Hati</a></th>
                      </tr>
                    </table>
                  </div>

              </div>
                         <table border="0">
                <tr>
                  <td> 
                  <div class="col col-md-12">
                        <form method="POST">
                    <button class="btn btn-success" name="sahihihati"><span class="fa fa-thumbs-o-up"></span> Sahihi</button>
                    <div class="modal modal-warning fade" id="modal-warning-hati">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Maelezo ya urudishaji taarifa</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              <label>Maelezo: </label>
                              <textarea class="form-control" cols="8" rows="6" name="maelezohati"></textarea>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button name="siosahihihati" class="btn btn-outline">Rudisha</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>

                    </form> 
                                       
                  </div>

            </td>
                <td>    
                  <button class="btn btn-danger" name="" data-toggle="modal" data-target="#modal-warning-hati"><span class="fa fa-thumbs-o-down"></span> Sio Sahihi</button>
                </td>

                
 
              </tr>
              </table>
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
                  <p class="container">
                    Hakiki Taarifa za Baba kwa mtoto <b><?php echo $data['fname'].' '.$data['sname']; ?></b>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzababa" class="form-control"  value="<?php echo $row['fname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilibaba" class="form-control" value="<?php echo $row['sname']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la Mwisho:</label>
                    <input type="text" name="jinalamwishobaba" class="form-control" value="<?php echo $row['lname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina Lingine:</label>
                    <input type="text" name="jinalinginebaba" class="form-control" value="<?php echo $row['othername']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nchi aliyozaliwa:</label>
                    <input type="text" name="nchialiyozaliwababa" class="form-control" value="<?php echo $row['nation']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Tarehe ya kuzaliwa:</label>
                    <input type="date" name="tareheyakuzaliwababa" class="form-control" value="<?php echo $row['dateofbirth']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Mkoa Makazi:</label>
                    <input type="text" name="mkoamakazibaba" class="form-control" value="<?php echo $row['region']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Wilaya ya Makazi:</label>
                    <input type="text" name="wilayamakazibaba" class="form-control" value="<?php echo $row['district']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Kata ya Makazi:</label>
                    <input type="text" name="katayamakazibaba" class="form-control" value="<?php echo $row['ward']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kijiji/Mtaa wa makazi:</label>
                    <input type="text" name="kijijichamakazibaba" class="form-control" value="<?php echo $row['street']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimubaba" class="form-control" value="<?php echo $row['phone']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Kazi ya baba</label>
                    <input type="text" name="kaziyababa" class="form-control" value="<?php echo $row['job']; ?>" disabled>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishobaba" class="form-control" value="<?php echo $row['idno']; ?>" disabled>
                  </div>
                </div>
              </div>
              <table border="0">
                <tr>
                  <td> 
                  <div class="col col-md-12">
                    <form method="POST">
                    <button class="btn btn-success" name="sahihibaba"><span class="fa fa-thumbs-o-up"></span> Sahihi</button>

                    <div class="modal modal-warning fade" id="modal-warning-baba">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Maelezo ya urudishaji taarifa</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              <label>Maelezo: </label>
                              <textarea class="form-control" cols="8" rows="6" name="maelezobaba"></textarea>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button name="siosahihibaba" class="btn btn-outline">Rudisha</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>

                    </form> 
                                       
                  </div>

            </td>
                <td>    
                  <button class="btn btn-danger" name="" data-toggle="modal" data-target="#modal-warning-baba"><span class="fa fa-thumbs-o-down"></span> Sio Sahihi</button>
                </td>

                
 
              </tr>
              </table>
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
              <h3 class="box-title">TAARIFA ZA MTOA TAARIFA <?php 
                  if ($data['statustaarifa'] == 7) {
                    echo '<span class="fa fa-check-circle text-success fa-1x "></span>';
                }
                 ?></h3>

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
                  <p class="container">
                    Hakiki Taarifa za Mtoa taarifa kwa mtoto <b><?php echo $data['fname'].' '.$data['sname']; ?></b>
                  </p>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Jina la kwanza:</label>
                    <input type="text" name="jinalakwanzataarifa" class="form-control" value="<?php echo $choose['fname']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Jina la Pili:</label>
                    <input type="text" name="jinalapilitaarifa" class="form-control" value="<?php echo $choose['sname']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Uhusiano:</label>
                    <input type="text" name="" class="form-control" value="<?php echo $choose['relationship']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Anuani</label>
                    <input type="text" name="anuani" class="form-control" value="<?php echo $choose['address']; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-6">
                    <label>Nambari ya simu</label>
                    <input type="text" name="nambayasimutaarifa" class="form-control" value="<?php echo $choose['phone']; ?>" disabled>
                  </div>
                  <div class="col col-md-6">
                    <label>Barua pepe</label>
                    <input type="text" name="baruapepe" class="form-control" value="<?php echo $choose['email']; ?>" disabled>
                  </div>
              
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col col-md-12">
                    <label>Nambari ya utambulisho</label>
                    <input type="text" name="nambayautambulishotaarifa" class="form-control" value="<?php echo $choose['idno']; ?>" disabled>
                  </div>
                </div>
              </div>
              <table border="0">
                <tr>
                  <td> 
                  <div class="col col-md-12">
                    <form method="POST">
                    <button class="btn btn-success" name="sahihitaarifa"><span class="fa fa-thumbs-o-up"></span> Sahihi</button>

                    <div class="modal modal-warning fade" id="modal-warning-taarifa">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Maelezo ya urudishaji taarifa</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                              <label>Maelezo: </label>
                              <textarea class="form-control" cols="8" rows="6" name="maelezotaarifa"></textarea>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button name="siosahihitaarifa" class="btn btn-outline">Rudisha</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>

                    </form> 
                                       
                  </div>

            </td>
                <td>    
                  <button class="btn btn-danger" name="" data-toggle="modal" data-target="#modal-warning-taarifa"><span class="fa fa-thumbs-o-down"></span> Sio Sahihi</button>
                </td>

                
 
              </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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



