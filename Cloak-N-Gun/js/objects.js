var walls = [{
    xpos: 20,
    ypos: -5,
    width: 30,
    height: 700,
  },
  {
    xpos: 20,
    ypos: -5,
    width: 700,
    height: 30,
  }
]

function actor(options) {
  var that = {},
  frameIndex = 0,
  tickCount = 0,
  ticksPerFrame = options.ticksPerFrame || 0;
  numberOfFrames = options.numberOfFrames ||1;

  that.context = options.context;
  that.width = options.width;
  that.height = options.height;
  that.xpos = options.xpos;
  that.ypos= options.ypos;
  that.image = options.image;
  that.loop = options.loop;

  that.render = function() {

    that.context.drawImage(
      that.image,
      frameIndex * that.width / numberOfFrames,
      0,
      that.width / numberOfFrames,
      that.height,
      that.xpos,
      that.ypos,
      that.width / numberOfFrames,
      that.height);
  };
  that.update = function(){
    tickCount+=1;
    if(tickCount>ticksPerFrame){
      tickCount=0;
      if(frameIndex < numberOfFrames -1){
        frameIndex +=1;
      }
      else if (that.loop){
        frameIndex = 0;
      }
    }
  }
  that.move = function(xMov, yMov){
    that.xpos = that.xpos+xMov;
    that.ypos= that.ypos+yMov;
  }
  that.tryMove(xMov, yMov){
    var futureX = that.xpos+xMov;
    var futureY = that.ypos+yMov;
    if(futureX+that.width > )
  }
  return that;
}
