<?php
function buildHeader($headerTitle){
  echo "<header class='headerTitle'>".$headerTitle."</header>";
  echo "<nav class='navMenu'>";
  echo "<ul>";
  echo "<li><a href='main-page.php'>Home</a></li>";
  echo "<li><a href='high-scores.php'>High Scores</a></li>";
  echo "<li><a href='about.php'>About Us</a></li>";
  echo "<li><a href='faq.php'>FAQ</a></li>";
  echo "<li><a href='signup.php'>Signup</a></li>";
  echo "<li><a href='breakout.php'>Breakout</a></li>";
  echo "</ul>";
  echo "</nav>";
}

?>
