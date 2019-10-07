<?php
  // Reference: https://webdevtrick.com/simple-quiz-in-php-source-code/
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $song1 = $_POST['question_1_songs'];
  $song2 = $_POST['question_2_songs'];
  $song3 = $_POST['question_3_songs'];
  $song4 = $_POST['question_4_songs'];
  $song5 = $_POST['question_5_songs'];

  $correctSongs = 0;

  if($song1 == "Sun Queen")
    $correctSongs++;
  if($song2 == "One More Time / Aerodynamic")
    $correctSongs++;
  if($song3 == "Bohemian Rhapsody")
    $correctSongs++;
  if($song4 == "Dancing Queen")
    $correctSongs++;
  if($song5 == "Telephone Line")
    $correctSongs++;

  echo "Question 1: Which song below is NOT in The Beatles' album 'Abbey Road?' <br>";
  echo "You answered: " . $song1 . "<br>";
  echo "Correct answer: Sun Queen <br><br>";

  echo "Question 2: Which song below is in Daft Punk's album 'Alive 2007?' <br>";
  echo "You answered: " . $song2 . "<br>";
  echo "Correct answer: One More Time / Aerodynamic <br><br>";

  echo "Question 3: Which song below is NOT in Queen's album 'The Works?' <br>";
  echo "You answered: " . $song3 . "<br>";
  echo "Correct answer: Bohemian Rhapsody <br><br>";

  echo "Question 4: Which song below is in ABBA's album 'Arrival?' <br>";
  echo "You answered: " . $song4 . "<br>";
  echo "Correct answer: Dancing Queen <br><br>";

  echo "Question 5: Which song below is NOT in Electric Light Orchestra' album 'Out of the Blue?' <br>";
  echo "You answered: " . $song5 . "<br>";
  echo "Correct answer: Telephone Line <br><br>";

  echo "Total correct answers: " . $correctSongs . "<br>";
  echo "Final score percentage: " . ($correctSongs/5)*100 . "%<br>";
?>
