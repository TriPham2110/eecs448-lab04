<?php
  //Reference https://www.w3resource.com/php-exercises/php-for-loop-exercise-10.php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<table>";
  echo "<tr>";
  echo "<td></td>";
  for($row = 1; $row <= 100; $row++){
    echo "<td><b>" . $row . "</b></td>";
  }
  echo "</tr>";
  for($row = 1; $row <= 100; $row++){
    echo "<tr>";
    echo "<td><b>" . $row . "</b></td>";
    for($col = 1; $col <= 100; $col++){
      echo "<td>" . ($row * $col) ."</td>";
      echo "&nbsp;&nbsp;";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
