
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
          echo "<th class='scoreTable'>".$attList[$i]."</th>";
        }
        $iterator=1;
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr class='scoreTable'>";
          echo "<td class = 'scoreTable'>$iterator</td>";
          $iterator++;
          foreach($row as $rowData){
            echo "<td class='scoreTable'>".$rowData."</td>";
          }
          echo "</tr>";
        }
      }
      else{echo "No results!";}
  }
}
function signIn($name,$password){
    global $conn;
    $result = mysqli_query($conn,
    "SELECT * FROM highscores
    WHERE username = '$name' AND password='$password'");
    $rows = mysqli_fetch_assoc($result);
    if($result&&mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $name;
      $_SESSION['highscore'] = $rows["highscore"];
      $_SESSION['password'] = $rows['password'];
      echo $_POST['name']." signed in!";
    }
    else{echo "Username or password incorrect.";}
  }
function tryUpdateHighScore($newScore){
  global $conn;
  echo $newScore;
  $password = $_SESSION['password'];
  $loggedInUser =  $_SESSION['username'];
  $checkHighScore = mysqli_query($conn,
  "SELECT * FROM highscores
  WHERE username = '$loggedInUser' AND password='$password' AND highscore < $newScore");
  if($checkHighScore&&mysqli_num_rows($checkHighScore) > 0){
    $_SESSION['highscore'] = $newScore;
    $updateHighScore = mysqli_query($conn,
    "UPDATE highscores SET highscore=$newScore WHERE username = '$loggedInUser'");
  }

  echo mysqli_error($conn);
}

?>
