


<!DOCTYPE html>
<html>
<head>
  <title>Character and Word Count</title>
</head>
<body>
  <h1> Character Counter and Word Counter</h1>
  <form action="count.php" method="post">
    <label for="sentence">Enter a sentence:</label><br>
    <textarea name="sentence" placeholder="Enter a sentence... " id="sentence" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Count">
  </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sentence = $_POST['sentence'];
    $characterCount = 0;
    $wordCount = 1; // space between two words

    if (!empty($sentence)) {
        $words = str_word_count($sentence);
        $characterCount = strlen($sentence);
        $wordCount = $words;
    }

    echo "Word Count: $wordCount<br>";
    echo "Character Count: $characterCount<br>";
}
?>
