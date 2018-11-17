<?php include 'includes/navBar.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/game.css">
<script src="js/objects.js" type="text/JavaScript"></script>
<script src="js/game.js" type="text/JavaScript"></script>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php buildHeader("Sign Up");?>
	<section class="contentContainer">
		<section class="mainContent">
			<canvas id="gameCanvas"></canvas>
			<script>
				initGame();
			</script>
		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
