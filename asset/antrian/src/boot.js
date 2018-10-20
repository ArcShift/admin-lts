Boot = function (game){
};
Boot.prototype={
  preload: function(){
      console.log('ok');
    this.load.bitmapFont('epilog',baseUrl+'asset/font/epilog.png',baseUrl+'asset/font/epilog.fnt');
    this.load.bitmapFont('default',baseUrl+'asset/font/default.png',baseUrl+'asset/font/default.fnt');
    this.load.bitmapFont('default100',baseUrl+'asset/font/default100.png',baseUrl+'asset/font/default100.fnt');
    this.load.image('rect',baseUrl+'asset/gambar/rect.png');
    this.load.video('example',baseUrl+'asset/video/example.mp4');
  },
  create: function (){
    this.state.start('MenuUtama');
  },
  update: function (){
   },
  render: function (){
  }
}; 