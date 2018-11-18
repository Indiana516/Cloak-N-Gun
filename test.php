<!DOCTYPE html>
<html lang="en">
<body>
  <div>
<?php
print_r($_POST);
  foreach($_POST as $key=>$value){
    echo("<p>$key: $value</p>");
  }

  ?>
</div>
</body>
</html>
