<html>
    <head>
	<title>TODO supply a title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/antrian/style.css" media="all" />
	<script src="<?php echo base_url(); ?>asset/antrian/src/phaser.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/antrian/src/boot.js"></script>
	<script src="<?php echo base_url(); ?>asset/antrian/src/splash_off.js"></script>
	<script src="<?php echo base_url(); ?>asset/antrian/src/menuUtama.js"></script>
    </head>
    <body>
	<script>
	    var game = new Phaser.Game(1000, 600, Phaser.CANVAS, 'Display');
//	    var game = new Phaser.Game(1024, 768, Phaser.AUTO, 'Display');
	    game.state.add('Boot', Boot);
	    game.state.add('Splash', Splash);
	    game.state.add('MenuUtama', MenuUtama);
	    game.state.start('Boot');
	    var baseUrl="<?php echo base_url(); ?>asset/antrian/";
	</script>
    </body>
</html>
