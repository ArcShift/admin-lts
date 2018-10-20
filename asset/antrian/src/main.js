var config = {
    width: 1024,
    height: 768,
    parent: 'idofcontainer',
    title: "Mygame",
    url: "http://url.to.my.game",
    version: "0.0.1",
    scene: {preload: preload, create: create, update: update},
    fps: 30
};
var game = new Phaser.Game(config);

function preload() {
    this.load.bitmapFont('desyrel', 'asset/font/epilog.png', 'asset/font/epilog.fnt');
}


function create() {
//    console.log();
//    for ()
    text = this.add.bitmapText(200, 100, 'desyrel', 'Bitmap Fonts!', 64);
    this.scale.scaleMode =Phaser.ScaleManager.SHOW_ALL;
//    this.game.resize(window.innerWidth, window.innerHeight);
}


function update() {

}



