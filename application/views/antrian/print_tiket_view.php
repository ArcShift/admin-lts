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
		<div id="antrian" class="col-xs-6 kiri">
		    <div class="small-box bg-gray antri">
			<div class="inner text-center">
			    <h4><b>No Antrian</b></h4>
			    <h3>0000</h3>
			</div>
		    </div>
		</div>
		<div  class="col-xs-6 kiri ">
		    <div class="small-box bg-aqua invisible">
			<div class="inner text-center">
			    <h4><b>.</b></h4>
			    <h3>.<br/>.</h3>
			    <h4><b>.</b></h4>
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
		$("#cetak").click(function(){
		    console.log('Print tiket');
		});
	    });
	</script>
    </body>
</html>
