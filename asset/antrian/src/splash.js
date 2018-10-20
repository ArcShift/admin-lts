Splash= function (game){
};
Splash.prototype = {
  preload: function(){
    this.loading= this.add.sprite(20, 100, 'rumput');
    this.loading.width= this.game.width-40;
    this.load.setPreloadSprite(this.loading);
    //splash
    this.load.image('fiTechLogo','https://lh3.googleusercontent.com/UUSDoUY3O4NaOSyLoVce6yNBkqlbmgZ-0pH4ZwRZVo1kPKmG5p4Le_p2dbes-FIhsmgVszyYj1Uyn2I4dv0dlBf6KloNFvizMI3bmvXfDHfKq3b1TO2ZVb3YT3ea76NJ0SO1aoZbiTjB3RqX-5hQkGGMvnAS1o3UVhHNKTn_VvZ1ByAoW9sfIqV8Mk2EfP3dBvkFjCdUSW35XfjGUzh3JGArdGkwaLz448wrl7Sv6IdajuLFxOAc8KSr0Pi1l5O1Weca86wexxpzzhbiYlcCMVYznNesiNjuwihdPgQlWwjQza2L0ZPXEDRURXwvHNBmz7hUuqo7hGnN5HvXQlYR6Pkitdm_Pr0W6H-hPfFaXQ33QE1WDsB0WESJvkmC4VqiLy1Ryt7KYhmYQqCZMir1Z3ntW6SWfsVB32QkKWRuz5-71_VvLiSlPJSb4yGcX77T4D1fFZosqKnsjDw-gIej9_pXTbQEbSRKxbB9mguelU-2zGZizbyq8CvpUtL24yiMFjQzLsBoTQ4OJ3VhN9FKzfNPJ2GPUsz0a9De2tLh51tK6kKZyuRfX0jb3DrPJsf9oQw=w618-h234-no');
    this.load.image('phaserLogo','https://raw.githubusercontent.com/photonstorm/phaser/master/resources/Phaser%20Logo/PNG/Phaser-Logo-Small.png');
    //menu utama
    this.load.spritesheet('tombol', 'gambar/tombol.png', 119, 27);
    //game
    this.load.bitmapFont('epilog','font/epilog.png','font/epilog.fnt');
    this.load.spritesheet('tombol1', 'gambar/kocok.png', 90, 90);
    this.load.image('sidebar','gambar/sidebar2.png');
    this.load.spritesheet('dadu', 'gambar/dice.png', 90, 90);
    this.load.image('player1','gambar/token/blue.png');
    this.load.image('player2','gambar/token/red.png');
    this.load.image('player3','gambar/token/green.png');
    this.load.image('player4','gambar/token/cyan.png');
    
  },
  create : function(){
    this.loading.visible=false;
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