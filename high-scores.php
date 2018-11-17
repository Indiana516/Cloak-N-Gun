<?php include 'includes/top.inc.php'; ?>
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
  <section class="contentContainer scrollabeScoreTable">
    <table class="scoreTable">
      <caption>High Scores</caption>
      <tr>
        <th>Rank</th>
        <th>Score</th>
        <th>Name</th>
        <script>
          for (i = 0; i < highScores.length; i++) {
            outputScores(highScores[i].rank,highScores[i].score, highScores[i].name);
          }
        </script>
      </tr>
    </table>
  </section>
  <footer>
    Copyright &copy 2018 MemoryDust
  </footer>
