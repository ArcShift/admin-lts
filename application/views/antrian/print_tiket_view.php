<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Antrian</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/style.css"/>

	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
	<!--<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>-->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
	 $("body").empty();
	</script>
    </head>
    <body>
	salsk
	<div class="content">
	    <div class="row">
		<div class="col-lg-2 col-sm-1">

		</div>
		<div class="col-lg-8 col-sm-10">
		    <div class="small-box bg-gray">
			<div class="inner text-center">
			    <b>Selamat Datang di<br/>[Nama Instansi]</b>
			    <h4><b>No Antrian</b></h4>
			    <h3 id="noAntri">0001</h3>
			    <b>[footer]</b>
			</div>
		    </div>
		    <div class="small-box bg-aqua-gradient">
			<div id="cetak" class="inner text-center">
			    <h4><b></b></h4>
			    <h3><br/>DAFTAR<br/><br/> </h3>
			    <h4><b></b></h4>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<!--MODAL-->
	<div class="modal modal-primary fade" id="modal-primary" data-backdrop="static" data-keyboard="false">
	    <div class="modal-dialog">
		<div class="modal-content">
		    <div class="modal-header">
			<h4 class="modal-title">Mohon Tunggu Sebentar</h4>
		    </div>
		    <div class="modal-body">
			<form class="form-horizontal" id="form-daftar" method="POST">
			    <div class="box-body">
				<div class="form-group">
				    <label for="nama" class="col-sm-2 control-label">Nama</label>
				    <div class="col-sm-10">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
				    </div>
				</div>
				<div class="form-group">
				    <label for="instansi" class="col-sm-2 control-label">Instansi</label>
				    <div class="col-sm-10">
					<input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi">
				    </div>
				</div>
				<div class="form-group">
				    <label for="type_nomor" class="col-sm-2 control-label">Jenis Nomor</label>
				    <div class="col-sm-10">
					<select class="form-control select2" style="width: 100%;">
					    <option>NIK</option>
					    <option>NIP</option>
					    <option>NUPTK</option>
					</select>
				    </div>
				</div>
				<div class="form-group">
				    <label for="nomor" class="col-sm-2 control-label">Nomor</label>
				    <div class="col-sm-10">
					<input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor">
				    </div>
				</div>
			    </div>
			</form>
		    </div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-outline" id="ok">Daftar</button>
		    </div>
		</div>
		<!-- /.modal-content -->
	    </div>
	    <!-- /.modal-dialog -->
        </div>
	<div class="modal modal-primary fade" id="modal-wait" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Mohon Tunggu Sebentar</h4>
              </div>
              <div class="modal-body">
                <p>Sedang memproses data&hellip;</p>
              </div>
              <div class="modal-footer">
		  <p class="pull-left">[Footer]</p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
	<script>
	    console.log('ok');
	    $(document).ready(function () {
		
		var noAntri = 1;
		$("#cetak").click(function () {
//		    console.log('mencetak');
		    $("#modal-primary").modal("show");
//		    setTimeout(function () {
//			noAntri++;
//			$("#noAntri").text(('0000' + noAntri).slice(-4));
//			$("#modal-primary").modal("hide");
//		    }, 5000);
		});
		$("#ok").click(function(){
		    $("#form-daftar").submit();
		    console.log('kirim data');
		    $("#modal-primary").modal("hide");
		    $("#modal-wait").modal("show");
		});
	    });
	</script>
    </body>
</html>
