<!DOCTYPE html>
<html>
<head>
  <title>Compass and Straightedge</title>
  <style>
    svg {
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <h1>Compass and Straightedge</h1>
  <svg id="canvas" width="500" height="500"></svg>

  <script> function drawLine(x1, y1, x2, y2) {
  const svgNS = "http://www.w3.org/2000/svg";
  const canvas = document.getElementById("canvas");
  const line = document.createElementNS(svgNS, "line");
  line.setAttribute("x1", x1);
  line.setAttribute("y1", y1);
  line.setAttribute("x2", x2);
  line.setAttribute("y2", y2);
  line.setAttribute("stroke", "black");
  canvas.appendChild(line);
}

function drawCircle(cx, cy, r) {
  const svgNS = "http://www.w3.org/2000/svg";
  const canvas = document.getElementById("canvas");
  const circle = document.createElementNS(svgNS, "circle");
  circle.setAttribute("cx", cx);
  circle.setAttribute("cy", cy);
  circle.setAttribute("r", r);
  circle.setAttribute("stroke", "black");
  circle.setAttribute("fill", "none");
  canvas.appendChild(circle);
}

function intersectLines(x1, y1, x2, y2, x3, y3, x4, y4) {
  const d = (x1 - x2) * (y3 - y4) - (y1 - y2) * (x3 - x4);
  const xi = ((x1 * y2 - y1 * x2) * (x3 - x4) - (x1 - x2) * (x3 * y4 - y3 * x4)) / d;
  const yi = ((x1 * y2 - y1 * x2) * (y3 - y4) - (y1 - y2) * (x3 * y4 - y3 * x4)) / d;
  return { x: xi, y: yi };
}

function perpendicularLine(x1, y1, x2, y2, px, py) {
  const dx = x2 - x1;
  const dy = y2 - y1;
  const px1 = px + dy;
  const py1 = py - dx;
  return { x1: px, y1: py, x2: px1, y2: py1 };
}

function constructPerpendicularLineToLine(x1, y1, x2, y2, px, py) {
  const line = perpendicularLine(x1, y1, x2, y2, px, py);
  drawLine(line.x1, line.y1, line.x2, line.y2);
}

function rightAngle(x1, y1, x2, y2, x3, y3) {
  const perpLine = perpendicularLine(x1, y1, x2, y2, x3, y3);
  const intersectPoint = intersectLines(x1, y1, x2, y2, perpLine.x1, perpLine.y1, perpLine.x2, perpLine.y2);
  drawLine(x3, y3, intersectPoint.x, intersectPoint.y);
}

function multiplyOrDivide(x1, y1, x2, y2, x3, y3, x4, y4) {
  rightAngle(x1, y1, x3, y3, x4, y4);
  rightAngle(x1, y1, x2, y2, x4, y4);
  rightAngle(x3, y3, x4, y4, x2, y2);

  const { x: x5, y: y5 } = intersectLines(x1, y1, x3, y3, x2, y2, x4, y4);
  drawCircle(x1, y1, Math.sqrt((x3 - x2) ** 2 + (y3 - y2) ** 2));
  drawLine(x1, y1, x5, y5);
}

// Call the function with your specific coordinates
multiplyOrDivide(100, 100, 200, 200, 250, 150, 300, 100);
</script>
</script>
</body>
</html>
