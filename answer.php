<?php
// Start the session to keep track of the number of attempts
session_start();

// Generate a random number between 1 and 100
$min = 1;
$max = 100;
if (!isset($_SESSION['random_number'])) {
  $_SESSION['random_number'] = rand($min, $max);
}

// Check if the user has submitted a guess
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the user's guess
  $guess = $_POST['guess'];

  // Increment the number of attempts
  if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 1;
  } else {
    $_SESSION['attempts']++;
  }

  // Check if the user's guess is correct
  if ($guess < $_SESSION['random_number']) {
    $message = "Your guess is too low. Try again!";
  } elseif ($guess > $_SESSION['random_number']) {
    $message = "Your guess is too high. Try again!";
  } else {
    $message = "Congratulations! You guessed the correct number in " . $_SESSION['attempts'] . " attempts.";
    // Reset the session variables for a new game
    unset($_SESSION['random_number']);
    unset($_SESSION['attempts']);
  }
}
?>
