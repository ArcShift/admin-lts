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
	<script>
	    $(document).ready(function () {
		var noAntri = 1;
		$("#cetak").click(function () {
		    console.log('mencetak');
		    $("#cetak").hide();
		    $("#noAntri").text('Mencetak');
		    setTimeout(function () {
			noAntri++;
			$("#noAntri").text(('0000' + noAntri).slice(-4));
			$("#cetak").show();
		    }, 3000);
		});
	    });
	</script>
    </body>
</html>
