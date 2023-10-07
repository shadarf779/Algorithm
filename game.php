<!DOCTYPE html>
<html>
<head>
  <title>Square Movement Game</title>
  <style>
    #game-container {
      width: 500px;
      height: 500px;
      border: 1px solid black;
      position: relative;
      overflow: hidden;
    }

    #square {
      width: 20px;
      height: 20px;
      background-color: blue;
      position: absolute;
    }

    #square-E1 {
      width: 20px;
      height: 20px;
      background-color: red;
      position: absolute;
      transition: transform 0.2s ease-in-out;
    }
  </style>
</head>
<body>
  
  <div id="game-container">
    <div id="square"></div>
    <div id="square-E1"></div>
  </div>

  <h2>Score: <span id="score">0</span></h2>
  
  <script>
    let isCaught = false;
    let score = 0; // Score variable

    document.addEventListener('DOMContentLoaded', function() {
      let square = document.getElementById('square-E1');
      let gameContainer = document.getElementById('game-container');

      let squareWidth = square.clientWidth;
      let squareHeight = square.clientHeight;
      let maxX = gameContainer.clientWidth - squareWidth;
      let maxY = gameContainer.clientHeight - squareHeight;

      let blueSquare = document.getElementById('square');
      let blueSquareWidth = blueSquare.clientWidth;
      let blueSquareHeight = blueSquare.clientHeight;

      function moveSquare() {
        let randomX = Math.floor(Math.random() * maxX);
        let randomY = Math.floor(Math.random() * maxY);

        let blueSquareX = parseInt(blueSquare.style.left);
        let blueSquareY = parseInt(blueSquare.style.top);

        if (randomX > blueSquareX)
          randomX += blueSquareWidth;
        else
          randomX -= blueSquareWidth;

        if (randomY > blueSquareY)
          randomY += blueSquareHeight;
        else
          randomY -= blueSquareHeight;

        square.style.transform = `translate(${randomX}px, ${randomY}px)`;

        // Check if the blue square caught the red square
        if (Math.abs(randomX - blueSquareX) < blueSquareWidth && Math.abs(randomY - blueSquareY) < blueSquareHeight) {
          if (!isCaught) {
            isCaught = true;
            blueSquare.style.height = `${blueSquareHeight * 2}px`;
            score += 5; // Increase score by 5
            document.getElementById('score').textContent = score; // Update score in HTML
          }
        } else {
          isCaught = false;
        }
      }

      // Refresh the square position every second
      setInterval(moveSquare, 3000);
    });

    document.addEventListener('DOMContentLoaded', function() {
      const square = document.getElementById('square');
      let positionX = 0;
      let positionY = 0;
      const step = 10;
      const containerWidth = 500;
      const containerHeight = 500;

      document.addEventListener('keydown', function(event) {
        const key = event.key;

        if (key === 'ArrowUp') {
          moveSquare('up');
        } else if (key === 'ArrowDown') {
          moveSquare('down');
        } else if (key === 'ArrowRight') {
          moveSquare('right');
        } else if (key === 'ArrowLeft') {
          moveSquare('left');
        }
      });

      function moveSquare(direction) {
        if (direction === 'up' && positionY - step >= 0) {
          positionY -= step;
        } else if (direction === 'down' && positionY + step + square.offsetHeight <= containerHeight) {
          positionY += step;
        } else if (direction === 'right' && positionX + step + square.offsetWidth <= containerWidth) {
          positionX += step;
        } else if (direction === 'left' && positionX - step >= 0) {
          positionX -= step;
        }

        square.style.transform = `translate(${positionX}px, ${positionY}px)`;
      }
    });
  </script>
</body>
</html>
