<?php
include 'includes/top.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/stylesheet.css">
  <meta charset="utf-8">
  <title>About</title>
</head>
<body>
	<?php buildHeader("About Us");?>
	<main>
	<div class="logoBox">
		<img src="#" alt="Logo Placeholder">
	</div>
        <p>Webpage and Game Developed by: Braxton Harrison, Caleb Nannie, Evan Baker</p>
		<br>
        <p>Emails: <a href="mailto:memorydust@gmail.com">memorydust@gmail.com</a></p>
		<br>
		<p>Phone 111-234-7547</p>
		<br>

		<form method="POST" action="test.php">
				<p>
					Email:
				</p>
				<input type='text' placeholder='Email' name="email"/>
				<p>
					Name:
				</p>
				<input type='text' placeholder='Name' name="name" />
				<p>
					Message:
				</p>
				<input type='text' placeholder='Message' name="message" />
				<button type="submit" value="Submit">Submit</button>
			</form>
	<footer>
	Copyright &copy 2018 MemoryDust
	</footer>

</body>
