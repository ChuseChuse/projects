<?php 
include 'header2.php'; 
 ?>
 
<?php include 'navsuperadmin.php'; ?>


<div class="content-wrapper">
	

    <!-- Main content -->
    <section class="content">
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">

     
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-warning	 collapsed-box">
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
              			<input type="text" name="kijiji alichozaliwa" class="form-control" placeholder="Kijiji/Mtaa alichozaliwa" required>
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
              			<label>Nambari ya simu</label>
              			<input type="text" name="nambayasimu" class="form-control" placeholder="Namabari ya simu" required>
              		</div>
              
              	</div>
              </div>
              <div class="form-group">
              	<div class="row">
              		<div class="col col-md-12">
              			<button class="btn btn-primary btn-block" name="wasilisha">Wasilisha</button>
              		</div>
              
              	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
            <!-- /.box-body -->
			<div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-warning collapsed-box">
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
              		<div class="col col-md-12">
              				<label>Chagua jina la mtoto:</label>
		                <select class="form-control select2">
			                  <option selected="selected">Alabama</option>
			                  <option>Alaska</option>
			                  <option>California</option>
			                  <option>Delaware</option>
			                  <option>Tennessee</option>
			                  <option>Texas</option>
			                  <option>Washington</option>
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
            </div>
                      <!-- iCheck -->
          <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-warning collapsed-box">
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
              	<div class="row">
              		<div class="col col-md-12">
              				<label>Chagua jina la mtoto:</label>
		                <select class="form-control select2">
			                  <option selected="selected">Alabama</option>
			                  <option>Alaska</option>
			                  <option>California</option>
			                  <option>Delaware</option>
			                  <option>Tennessee</option>
			                  <option>Texas</option>
			                  <option>Washington</option>
			                </select>
		            </div>  
              	</div>
              </div>
              <div class="form-group">
              	<form method="POST" enctype="multipart/form-data"> 
              	<div class="row">
              		<div class="col col-md-6">
              			<label>Chagua Aina ya Hati:</label>
		                <select class="form-control select2">
			                  <option selected="selected">Passport size</option>
			                  <option>Hospital Notification</option>
			                  <option>Barua ya Mtendaji</option>
			            </select>
              		</div>
              		<div class="col col-md-6">
              			<label>Wasilisha Hati</label>
              			<input type="file" name="hati" class="form-control" required>
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
          <div class="box box-warning collapsed-box">
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
              		<div class="col col-md-12">
              				<label>Chagua jina la mtoto:</label>
		                <select class="form-control select2">
			                  <option selected="selected">Alabama</option>
			                  <option>Alaska</option>
			                  <option>California</option>
			                  <option>Delaware</option>
			                  <option>Tennessee</option>
			                  <option>Texas</option>
			                  <option>Washington</option>
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
              			<label>Kazi ya Mama</label>
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
              			<button class="btn btn-primary btn-block" name="wasilishamama">Wasilisha</button>
              		</div>
              
              	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>

          <!-- iCheck -->
          <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-warning collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">TAARIFA ZA MTOA TAARIFA	</h3>

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
              		<div class="col col-md-12">
              				<label>Chagua jina la mtoto:</label>
		                <select class="form-control select2">
			                  <option selected="selected">Alabama</option>
			                  <option>Alaska</option>
			                  <option>California</option>
			                  <option>Delaware</option>
			                  <option>Tennessee</option>
			                  <option>Texas</option>
			                  <option>Washington</option>
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
            </div>
          <!-- /.box -->

                    <!-- iCheck -->
          <div class="box-body">
              <!-- Date dd/mm/yyyy -->
          <div class="box box-warning collapsed-box ">
            <div class="box-header with-border">
              <h3 class="box-title">HAKIKI TAARIFA ZAKO</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
           <div class="box-body">

            <!-- TAARIFA HAPA -->

          </div>
          <!-- /.box -->
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- mwisho -->
</div>
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

<?php require 'script1.php'; ?>
