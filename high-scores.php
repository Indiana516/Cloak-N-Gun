<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/high-scores.css">
<script src="js/functions.js" type="text/JavaScript"></script>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
  include 'includes/top.inc.php';
  include 'databaseFunctions.php';
  buildHeader("High Scores");?>
  <section class="contentContainer scrollableScoreTable">
    <table class="scoreTable">
      <caption>High Scores</caption>
      <?php
        function makeQuery(){
          return "SELECT username, highscore from highscores
          ORDER BY highscore DESC";
        }
        $result = mysqli_query($conn, makeQuery());
        outputResults($result);
      ?>
    </table>
  </section>
  <footer>
    Copyright &copy 2018 MemoryDust
  </footer>
