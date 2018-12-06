<?php include 'includes/top.inc.php';
			include 'databaseFunctions.php';
?>
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
      		<form method="get">
  				<p>
  					Name:
  				</p>
  				<input type='text' name = "name" placeholder='Name'/>
  				<p>
  					Password:
  				</p>
  				<input type='text' name = "password" placeholder='Password'/>
          <input type="submit" value="Log In"><br><br>


  		</form>
			<?php
			if(isset($_GET["name"])&&isset($_GET["password"])){
        $name = $_GET["name"];
        $password = $_GET["password"];
        $result = mysqli_query($conn,
        "SELECT * FROM highscores
        WHERE username = '$name' AND password='$password'");
				if($result&&mysqli_num_rows($result) > 0){
          $_SESSION['username'] = $name;
          echo "signed in!";
          unset($_GET['username']);
          unset($_GET['password']);
				}
				else{echo validateInfo($conn);}
			}
			?>
		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
