
<?php
$table = "highscores";
$conn = createConnection();
$attList=["Rank","Username","High Score"];
function createConnection(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db="gameusers";
  $conn = new mysqli($servername, $username, $password,$db);
  return $conn;
}
function outputResults($result){
  global $attList;
  if(!$result){
    echo "no result found!<br>";
  }
  else{
    if (mysqli_num_rows($result) > 0) {
        for($i = 0; $i<sizeof($attList);$i++){
          echo "<th>".$attList[$i]."</th>";
        }
        $iterator=1;
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>$iterator</td>";
          $iterator++;
          foreach($row as $rowData){
            echo "<td>".$rowData."</td>";
          }
          echo "</tr>";
        }
      }
      else{echo "No results!";}
  }
}

?>
