<?php include 'includes/top.inc.php'?>
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
      <form method="POST">
  				<p>
  					Name:
  				</p>
  				<input type='text' name = "name" placeholder='Name'/>
          <p>
            Email:
          </p>
          <input type='text' name = "email" placeholder='Email'/>
  				<p>
  					Password:
  				</p>
  				<input type='text' name = "password" placeholder='Password'/>
          <button type="submit" value="Submit">Submit</button>

  		</form>
		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
