<?php include 'includes/top.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/game.css">
<script src="js/objects.js" type="text/JavaScript"></script>
<!-- <script src="js/game.js" type="text/JavaScript"></script> -->

<head>
	<meta charset="utf-8">
</head>
<body>
	<?php buildHeader("Cloak and Gun");?>
	<section class="contentContainer">
		<section class="mainContent">
			<canvas id="gameCanvas" width="600" height="360"></canvas>
			<script src="js/runner.js" type="text/JavaScript">
			startGame();</script>
			<!-- <script>
				// initGame();
				startGame()
			</script> -->
		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
