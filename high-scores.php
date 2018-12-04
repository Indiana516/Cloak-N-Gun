<?php include 'includes/top.inc.php';
      include 'databaseFunctions.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>High Scores</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/high-scores.css">
  <script src="js/data.js" type="text/JavaScript"></script>
  <script src="js/functions.js" type="text/JavaScript"></script>
</head>
<body>
  <?php buildHeader("High Scores");?>
  <section class="contentContainer scrollableScoreTable">
    <table class="scoreTable">
      <caption>High Scores</caption>
      <tr>
      <?php

        function makeQuery(){
          return "SELECT username, highscore from highscores
          ORDER BY highscore DESC";
        }
        $result = mysqli_query($conn, makeQuery());
        outputResults($result);

      ?>
        </script>
      </tr>
    </table>
  </section>
  <footer>
    Copyright &copy 2018 MemoryDust
  </footer>
