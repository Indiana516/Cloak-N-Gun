<?php include 'includes/top.inc.php';
			include 'databaseFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/game.css">

<head>
	<meta charset="utf-8">
</head>
<body>
	<?php buildHeader("Frost Runner");?>
	<section class="contentContainer">
		<section class="mainContent">
			<canvas id="gameCanvas" width="600" height="480"></canvas>
			<div id="game-over">
      <a href="javascript:void(0);" class="restart" id="restart">Try again?</a>
			<form method="post">
				<p>Score:</p>
				<input type="text" name="highscore_current" id="score"readonly>
				<input name="save" type="submit">
			</form>
    </div>
			<script src="js/runner.js" type="text/JavaScript">
			startGame();
			</script>
			<?php
				if(isset($_POST['highscore_current'])&&$_SESSION['highscore_current']<$_POST['highscore_current']){
					tryUpdateHighScore($_POST['highscore_current']);
					header("Refresh:0");
				}
			?>

		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
