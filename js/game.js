//code for the game is based off of code from https://developer.mozilla.org/,
//being used as a placeholder until we get started on our game.
function initGame() {
  var canvas = document.getElementById("gameCanvas");
  var context = canvas.getContext("2d");
  var player;
  var rightPressed = false;
  var leftPressed = false;
  canvas.width=800;
  canvas.height=600;

  initPlayer();
  initControls();
  draw();

  function initPlayer(){
    var playerImage = new Image();
    playerImage.src = "images/play-error.png";
    player = actor({
      context: canvas.getContext("2d"),
      width:20,
      height:20,
      xpos:600,
      ypos:200,
      image: playerImage
    })
    player.render();
  }
  function initControls(){
    document.addEventListener("keydown", keyDownHandler, false);
    document.addEventListener("keyup", keyUpHandler, false);

    function keyDownHandler(e) {
      if(e.keyCode == 39) {
        rightPressed = true;
      }
      else if(e.keyCode == 37) {
        leftPressed = true;
      }
    }
    function keyUpHandler(e) {
      if(e.keyCode == 39) {
        rightPressed = false;
      }
      else if(e.keyCode == 37) {
        leftPressed = false;
      }
    }
  }
  function drawLevel(){
    for(var i = 0; i<walls.length;i++){
      context.beginPath();
      context.rect(walls[i].xpos,canvas.height-walls[i].height,walls[i].width,walls[i].height);
      context.fillStyle = "#008000";
      context.fill();
      context.closePath();
    }
  }
  function draw(){
    context.clearRect(0, 0, canvas.width, canvas.height);
    requestAnimationFrame(draw);
    updateInputs();
    drawLevel();
    enforceGravity();
    player.render();
    player.update();.
  }
  function updateInputs(){
    if(rightPressed) {
      player.move(7,0);
    }
    else if(leftPressed) {
      player.move(-7,0);
    }
  }
  function enforceGravity(){

  }
}
