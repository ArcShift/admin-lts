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
	<!--==========-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Morris.js charts -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/morris.js/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/dist/js/demo.js"></script>
	<!--DATA TABLE-->
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/asset/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    </head>
    <body>
	<div class="content">
	    <div class="row">
		<div id="antrian" class="col-xs-4 kiri">
		    <div class="small-box bg-aqua antri">
			<div class="inner text-center">
			    <h4><b>Costumer Service 1</b></h4>
			    <h3>0000</h3>
			</div>
		    </div>
		</div>
		<div class="col-xs-8">
		    <div class="timeline-body">
			<div class="embed-responsive embed-responsive-16by9">
			    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen>
			    </iframe>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div class="fixed-bottom">
	    <marquee>
		RUNNING TEXT
	    </marquee>
	</div>
	<!--	<div class="container">
		    <div class="row">
			<div class="col-lg-2 kiri">
	
			    <div class="row antri">  
				<div class="col-lg-3 col-xs-">
				     small box 
				    <div class="small-box bg-aqua">
					<div class="inner">
					    <p>Costumer Service 1</p>
					    <h3>150</h3>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
				</div>
			    </div>
			</div>
			<div class="col-lg-3">
			    <div class="small-box bg-black">
				<div class="inner">
				    <p>Costumer Service 1</p>
				    <h3>150</h3>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			    </div>
			</div>
		    </div>
		</div>-->
    <marquee>

	<!--<p>Running text</p>-->
    </marquee>
    <!--===SCRIPT========-->
    <script>
	$(document).ready(function () {
	    $(".antri").clone().appendTo(".kiri");
	});
    </script>
</body>

</html>
