<?php include 'header2.php'; ?>
<?php require_once 'validation_function.php'; ?>
<?php require_once 'session.php'; ?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
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

         <li><a href="90days.php">
            <i class="fa fa-link"></i> <span>90days</span>
            <span class="pull-right-container">

            </span>
          </a>
</li>
        <li><a href="below.php">
            <i class="fa fa-link"></i> <span>Below 10 years</span>
            <span class="pull-right-container">
            
            </span>
          </a>
</li>
        <li><a href="above.php">
            <i class="fa fa-link"></i> <span>Above 10 years</span>
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
      <h3>Welcome to RITA online birth registraton system. It is our pleasure to save you.</h3>

       <p>This is the place for children who are above 90 days and below 10 years. Please fill the form and upload all the document mentioned below.</p>
      <div class="box-header with-border">
              <h3 class="box-title">FOMU YA USAJILI WA VIZAZI</h3>
            </div>
    </section>

    <!-- Main content -->
    <section class="content">
          <?php 
    $url= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=filesize') !== false) {
      $_SESSION["message"]=  "The file size is too big!";
      } 

      else if (strpos($url, 'error=filetype') !== false) {
      $_SESSION["message"]=  "You can not upload the file of this type! Please upload your file in pdf format.";
      }
       else if (strpos($url, 'error=inupload') !== false) {
      $_SESSION["message"]=  "There was an error in uploading this file!";
      }
      else if (strpos($url, 'error=empty') !== false) {
     $_SESSION["message"]= "You did not upload a file! PLease upload the specified document.";
      }
       else if (strpos($url, 'success') !== false) {
        header("Location: index.php");
      }
      echo message();
    ?>
  <form class="form-horizontal" enctype="multipart/form-data" action="uploadsbelow.php" method="POST">
    <div class="box-body">
      <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA USAJILI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nambayausajili" placeholder="NAMBA YA USAJILI">
                  </div>
                </div>
              <div class="box-header with-border">
              <h3 class="box-title">TAFADHALI TOA MAELEZO YAFUATAYO</h3><br><br>
              <h3 class="box-title">A:TAARIFA ZA MTOTO</h3>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA KWANZA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kwanza" placeholder="JINA LA KWANZA">
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA PILI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pili" placeholder="JINA LA PILI">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA MWISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mwisho" placeholder="JINA LA MWISHO">
                  </div>
                  </div>
                    <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LINGINE</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="lingine" placeholder="JINA LA LINGINE">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">JINSI</label>

                  <div class="col-sm-4">
                   KIKE<input type="radio" name="jinsi" value="F"> <br>
                   KIUME<input type="radio"  name="jinsi" value="M">
                  </div>
                  </div>

                   <div class="form-group">
                  <label  class="col-sm-2 control-label">TAREHE YA KUZALIWA</label>

                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tarehe" placeholder="TAREHE YA KUZALIWA">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">MAHALI ALIPOZALIWA</label>

                  <div class="col-sm-4">
                  <select class="form-control" name="mahali">
                    <option></option>
                    <option>KITUO CHA TIBA</option>
                    <option>NYUMBANI</option>
                    <option>MAHALI PENGINE</option>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA MAHALI ALIPOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="jinamahali" placeholder=" JINA LA MAHALI ALIPOZALIWA">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">MKOA ALIOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mkoa" placeholder="MKOA ALIOZALIWA">
                  </div>
                  </div>

                
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">WILAYA ALIYOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="wilaya" placeholder="WILAYA ALIYOZALIWA">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KATA ALIYOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kata" placeholder="KATA ALIYOZALIWA">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KIJIJI/MTAA ALIPOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kijiji" placeholder="KIJIJI/MTAA ALIPOZALIWA">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">MKOA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mkoa1" placeholder="MKOA WA MAKAZI">
                  </div>
                  </div>

                
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">WILAYA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="wilaya1" placeholder="WILAYA YA MAKAZI">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KATA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kata1" placeholder="KATA YA MAKAZI">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KIJIJI/MTAA WA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kijiji1" placeholder="KIJIJI/MTAA WA MAKAZI">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA SIMU YA MKONONI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="number" placeholder="NAMBA YA SIMU">
                  </div>
                  </div>
                  
              <div class="box-header with-border">
    
              <h3 class="box-title">B:TAARIFA ZA MAMA</h3>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA UTAMBULISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="namba1" placeholder="NAMBA YA UTAMBULISHO">
                  </div>
                </div>

            <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA KWANZA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kwanzam" placeholder="JINA LA KWANZA">
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA PILI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pilim" placeholder="JINA LA PILI">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA MWISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mwishom" placeholder="JINA LA MWISHO">
                  </div>
                  </div>
                    <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LINGINE</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="linginem" placeholder="JINA LA LINGINE">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">MKOA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mkoam" placeholder="MKOA WA MAKAZI">
                  </div>
                  </div>

                
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">WILAYA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="wilayam" placeholder="WILAYA YA MAKAZI">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KATA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="katam" placeholder="KATA YA MAKAZI">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KIJIJI/MTAA WA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kijijim" placeholder="KIJIJI/MTAA WA MAKAZI">
                  </div>
                  </div>

                   <div class="form-group">
                  <label  class="col-sm-2 control-label">NCHI ALIYOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nchim" placeholder="NCHI ALIYOZALIWA">
                  </div>
                  </div>

                    <div class="form-group">
                  <label  class="col-sm-2 control-label">TAREHE YA KUZALIWA</label>

                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tarehem" placeholder="TAREHE YA KUZALIWA">
                  </div>
                  </div>

                   <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA SIMU YA MKONONI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="numberm" placeholder="NAMBA YA SIMU">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">KAZI YA MAMA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kazim" placeholder="KAZI YA MAMA">
                  </div>
                  </div>

                <div class="box-header with-border">
    
              <h3 class="box-title">C:TAARIFA ZA BABA</h3>
              </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA UTAMBULISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="namba2" placeholder="NAMBA YA UTAMBULISHO">
                  </div>
                </div>

            <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA KWANZA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kwanzaB" placeholder="JINA LA KWANZA">
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA PILI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="piliB" placeholder="JINA LA PILI">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LA MWISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mwishoB" placeholder="JINA LA MWISHO">
                  </div>
                  </div>
                    <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA LINGINE</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="lingineB" placeholder="JINA LA LINGINE">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">MKOA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="mkoaB" placeholder="MKOA WA MAKAZI">
                  </div>
                  </div>

                
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">WILAYA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="wilayaB" placeholder="WILAYA YA MAKAZI">
                  </div>
                  </div>
                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KATA YA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kataB" placeholder="KATA YA MAKAZI">
                  </div>
                  </div>

                  <div class="form-group">
                  <label  class="col-sm-2 control-label">KIJIJI/MTAA WA MAKAZI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kijijiB" placeholder="KIJIJI/MTAA WA MAKAZI">
                  </div>
                  </div>

                   <div class="form-group">
                  <label  class="col-sm-2 control-label">NCHI ALIYOZALIWA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nchiB" placeholder="NCHI ALIYOZALIWA">
                  </div>
                  </div>

                    <div class="form-group">
                  <label  class="col-sm-2 control-label">TAREHE YA KUZALIWA</label>

                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tareheB" placeholder="TAREHE YA KUZALIWA">
                  </div>
                  </div>

                   <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA SIMU YA MKONONI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="numberB" placeholder="NAMBA YA SIMU">
                  </div>
                  </div>
                   <div class="form-group">
                  <label  class="col-sm-2 control-label">KAZI YA BABA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="kazim" placeholder="KAZI YA BABA">
                  </div>
                  </div>

              <div class="box-header with-border">
    
              <h3 class="box-title">C:TAARIFA ZA MTOA TAARIFA</h3>
              </div>
               <div class="form-group">
                  <label  class="col-sm-2 control-label">UHUSIANO</label>

                  <div class="col-sm-4">
                  <select class="form-control" name="uhusiano">
                    <option></option>
                    <option>BABA</option>
                    <option>MAMA</option>
                    <option>MTUMISHI WA TIBA</option>
                    <option>MWINGINE YEYOTE</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA UTAMBULISHO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="namba3" placeholder="NAMBA YA UTAMBULISHO">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">JINA</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="jinamtoa" placeholder="JINA LA MTOA TAARIFA">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">ANWANI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="anwani" placeholder="ANWANI">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">NAMBA YA SIMU YA MKONONI</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="number3" placeholder="NAMBA YA SIMU">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">BARUA PEPE</label>

                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="bpepe" placeholder="BARUA PEPE">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-2 control-label">TAREHE</label>

                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tareheT" placeholder="TAREHE">
                  </div>
                </div>
          <p style="font-weight: bold; font-size: 16px;">PLEASE UPLOAD THE FOLLOWING DOCUMENT IN PDF FORMAT</p>
          <ul>
            <li>Passport size photograph</li>
            <li>supporting documents such as clinic card or Baptismal certificate</li>
            <li>Document from goverment authorities or the notification from hospital</li>
          </ul>
          <div class="form-group">
          <div class="col-sm-4">
          <input type="file" name="file"><br>
         
       </div>
         </div>
         <button class="btn btn-default btn-lg btn-block" type="submit" name="submit">SUBMIT</button>
    </div>
  </form>

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
