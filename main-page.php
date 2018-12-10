<?php include 'includes/top.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/game.css">

<head>
	<meta charset="utf-8">
</head>
<body>
	<?php buildHeader("Cloak and Gun");?>
	<section class="contentContainer">
		<section class="mainContent">
			<canvas id="gameCanvas" width="600" height="480"></canvas>
			<div id="game-over">
      <a href="javascript:void(0);" class="restart" id="restart">Try again?</a>
			<p>Score:</p>
			<input type="text" id="score"readonly>
    </div>
			<script src="js/runner.js" type="text/JavaScript">
			startGame();
		</script>

		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
