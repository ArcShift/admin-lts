Splash= function (game){
};
Splash.prototype = {
  preload: function(){
    this.loadingText= game.add.bitmapText(20,this.game.height/2-50,'epilog','Loading...',50);
    this.loadingBar= this.add.sprite(20, this.game.height/2, 'rumput');
    this.loadingBar.width= this.game.width-40;
    this.load.setPreloadSprite(this.loadingBar);
    //splash
    this.load.image('fiTechLogo','gambar/fitech.png');
    this.load.image('phaserLogo','gambar/phaser-logo-small.png');
    //menu utama
    this.load.spritesheet('tombol', 'gambar/tombol.png', 119, 27);
    this.load.spritesheet('tombol2', 'gambar/button.png', 500, 100);
    this.load.image('background', 'gambar/background.png');
    this.load.image('awan', 'gambar/awan.png');
    this.load.image('iklan', 'gambar/ads.png');
    //game
    this.load.bitmapFont('epilog','font/epilog.png','font/epilog.fnt');
    this.load.spritesheet('tombol1', 'gambar/kocok.png', 90, 90);
    this.load.image('sidebar','gambar/sidebar2.png');
    this.load.spritesheet('dadu', 'gambar/dice.png', 90, 90);
    this.load.image('player1','gambar/token/blue.png');
    this.load.image('player2','gambar/token/red.png');
    this.load.image('player3','gambar/token/green.png');
    this.load.image('player4','gambar/token/cyan.png');
    ////papan
    game.load.image('ular','gambar/skull.ico');
    game.load.image('tangga','gambar/smile.ico');
    game.load.image('ularLine','gambar/lazer_red.png');
    game.load.image('tanggaLine','gambar/lazer_green.png');
    game.load.spritesheet('kotakan','gambar/kotakan.png',32,32);
    ////tombol
    game.load.spritesheet('kocok', 'gambar/kocok.png', 90, 90);
    game.load.spritesheet('restart','gambar/tombol.png',119,27);
    
    
  },
  create : function(){
    this.state.start('MenuUtama'); //REMOVE THIS LINE TO SHOW SPLASH
    this.loadingBar.visible=false;
    this.loadingText.visible=false;
    var fiTechLogo=this.add.sprite(this.world.centerX, this.world.centerY,'fiTechLogo');
    fiTechLogo.anchor.setTo(0.5, 0.5);
    fiTechLogo.alpha = 0;
    var tween=game.add.tween(fiTechLogo).to( { alpha: 1 }, 3000, "Linear", true,500 ,0 ,true);
    tween.onComplete.add(this.tween1, this);
    this.phaserLogo=this.add.sprite(game.width/2,game.height/2,'phaserLogo');
    this.phaserLogo.anchor.setTo(0.5, 0.5);
    this.phaserLogo.alpha = 0;
  },
  tween1: function(){
    var tween=game.add.tween(this.phaserLogo).to( { alpha: 1 }, 3000, "Linear", true,0 ,0 ,true);	
    tween.onComplete.add(this.tween2, this);
  },
  tween2: function(){
    this.state.start('MenuUtama'); 
  },
}