<!DOCTYPE html>
<html>
<head>
  <title>Guess the Number Game</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1, h2 {
      text-align: center;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Guess the Number Game</h1>
  <?php if (isset($message)) : ?>
    <h2><?php echo $message; ?></h2>
  <?php else : ?>
    <form method="post">
      <label for="guess">Enter your guess:</label>
      
      <input type="number" name="guess" id="guess" min="1" max="100" required>
      <button type="submit">Guess</button>
    </form>
  <?php endif; ?>
</body>
</html>
