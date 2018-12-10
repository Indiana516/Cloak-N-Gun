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
            Email:
          </p>
          <input type='text' name = "email" placeholder='Email'/>
  				<p>
  					Password:
  				</p>
  				<input type='text' name = "password" placeholder='Password'/>
          <input type="submit" value="Submit"><br><br>


  		</form>
			<?php
			if(isset($_GET["name"])&&isset($_GET["email"])&&isset($_GET["password"])){
				if(validateInfo($conn)=="good"){
					echo "Successfully registered!";
					$name = $_GET["name"];
					$password = $_GET["password"];
					$email = $_GET["email"];
					$result = mysqli_query($conn,
					"INSERT INTO highscores (username, password, highscore, email)
					VALUES ('$name','$password',0,'$email')"
					);
					signIn($name, $password);
				}
				else{echo validateInfo($conn);}
			}

			function validateInfo($conn){
				$name = $_GET["name"];
				$password = $_GET["password"];
				$email = $_GET["email"];
				$checkName = mysqli_query($conn,
				"SELECT * FROM highscores WHERE username = '$name'"
				);
				$checkEmail = mysqli_query($conn,
				"SELECT * FROM highscores WHERE email='$email'"
				);
				if ($checkName){
					if(mysqli_num_rows($checkName) > 0){
						return "Error, this username is already taken";
					}
				}
				if ($checkEmail){
					if(mysqli_num_rows($checkEmail) > 0){
						return "Error, this email is already taken";
					}
				}
				if (strlen($password)>20){
					return "Error, password is too long.";
				}
				$_SESSION['username'] = $name;
				echo mysqli_error($conn);
				return "good";
			}
			?>
		</section>
	</section>
	<footer>
		<section>Copyright 2018 &copy MemoryDust</section>
	</footer>
</body>
