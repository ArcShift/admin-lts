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
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
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
			    <h4><b><===></b></h4>
			    <h3>CETAK NOMOR<br/>ANTRIAN </h3>
			    <h4><b><===></b></h4>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<!--MODAL-->
	<div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Mohon Tunggu Sebentar</h4>
              </div>
              <div class="modal-body">
                <p>Sedang mencetak nomor antrian anda&hellip;</p>
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
	    $(document).ready(function () {
		var noAntri = 1;
		$("#cetak").click(function () {
		    console.log('mencetak');
		    $("#modal-primary").modal("show");
		    setTimeout(function () {
			noAntri++;
			$("#noAntri").text(('0000' + noAntri).slice(-4));
			$("#modal-primary").modal("hide");
		    }, 3000);
		});
	    });
	</script>
    </body>
</html>
