<?php include 'includes/top.inc.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/faq.css">
  <meta charset="utf-8">
  <title>About</title>
</head>

<body>
  <?php buildHeader("Frequently Asked Questions");?>
  <main>
    <table>
      <?php
        $questions = file("data/faq.txt");
      foreach($questions as $question)
      {
        $questionFields = explode(";",$question);
        $quest = utf8_encode($questionFields[0]);
        $answer = utf8_encode($questionFields[1]);
        echo "
        <tr>
          <td class='qlabel'>Q: </td>
          <td class='question'>".$quest."</td>
        </tr>
        <tr>
          <td class='alabel'>A: </td>
          <td class='answer'>".$answer."</td>
        </tr>";
      }
      ?>
    </table>
  </main>

  <footer>
    Copyright &copy 2018 MemoryDust
  </footer>

</body>
