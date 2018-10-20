MenuUtama = function () {
}
MenuUtama.prototype = {
    create: function () {
	var screenWidth= this.game.width;
	var screenHeight= this.game.height;
	this.scale.scaleMode = Phaser.ScaleManager.EXACT_FIT;
	this.stage.backgroundColor = "#ffffff";
	var posX = screenWidth*0.125, factorY = screenHeight*0.25;
	for (var i = 0; i < 2; i++) {
	    var rect = this.add.image(posX, i * factorY + (screenHeight*0.02), 'rect');
	    rect.width = posX * 1.8;
	    rect.width = screenWidth* 0.23;
	    rect.height = factorY *0.9;
	    rect.anchor.setTo(0.5, 0);
	    rect.tint=0xf56954;
	    csId = this.add.bitmapText(posX, i * factorY + (factorY*0.3), "default100", "COUNTER " + (i + 1), 30);
	    noAntri = this.add.bitmapText(posX, i * factorY + (factorY*0.7), "default100", "0", 60);
	    csId.anchor.setTo(0.5);
	    noAntri.anchor.setTo(0.5);
	}
	var rectRunningText=this.add.image(0, screenHeight*0.9, 'rect');
	rectRunningText.width=screenWidth;
	rectRunningText.height=screenHeight*0.2;
	rectRunningText.tint=0x0000ff;
	runningText = this.add.bitmapText(screenWidth, screenHeight*0.93, "default", "RUNNING TEXT EXAMPLE ", 30);
	video = this.add.video('example');
	videoSprite = video.addToWorld();
	videoSprite.scale.setTo(0.3);
	videoSprite.position.setTo(this.game.width * 0.25, this.game.height * 0.02);
	videoSprite.width = this.game.width * 0.74;
	videoSprite.height = this.game.height * 0.75;
	video.play(true);
	n = 0;
    },
    update: function () {
//	noAntri.text=++n;
	runningText.x -= 2;
	if (runningText.x < -runningText.width) {
	    runningText.x = this.game.width;
	}
    },
    render: function () {
//    game.debug.pointer(this.input.activePointer);
//    game.debug.inputInfo(16,16);
    },

}	