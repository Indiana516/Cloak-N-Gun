<!DOCTYPE html>
<html lang ="en">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/game.css">
<link rel="stylesheet" href="css/breakout.css">
<script src="js/gameRendering.js" type="text/JavaScript"></script>
<head>
    <meta charset="utf-8" />
    <title>Breakout Placeholder game</title>
</head>
<body>
	<header class="headerTitle">Cloak and Gun</header>
	<?php include __DIR__.'/includes/navBar.inc.php'; ?>
<section class="contentContainer">
	<section class="mainContent">
<canvas id="gameCanvas"></canvas>
<script>
	letThereBeGame()
</script>
</section>
</section>

<footer>
	<section>Copyright 2018 &copy MemoryDust</section>
</footer>
</body>
</html>
