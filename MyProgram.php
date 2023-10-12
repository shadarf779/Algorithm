<!DOCTYPE html>
<html>
<head>
    <title>Distance Calculation</title>
</head>
<body>
    <h1>Distance Calculation</h1>
    <form method="post" action="">
        <label for="meters">Meters:</label>
        <input type="number" step="0.01" name="meters" id="meters" required><br>

        <label for="centimeters">Centimeters:</label>
        <input type="number" step="0.01" name="centimeters" id="centimeters" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    class Distance
    {
        public int $meters;
        public float $centimeters;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $d1 = new Distance();
        $d3 = new Distance();

        $d2 = new Distance();
        $d2->meters = 11;
        $d2->centimeters = 6.25;

        $d1->meters = $_POST['meters'];
        $d1->centimeters = $_POST['centimeters'];

        $d3->centimeters = $d1->centimeters + $d2->centimeters;
        $d3->meters = 0;

        if ($d3->centimeters >= 100.0) {
            $d3->centimeters -= 100.0;
            $d3->meters++;
        }

        $d3->meters += $d1->meters + $d2->meters;

        echo "<p>{$d1->meters}m-{$d1->centimeters}cm + {$d2->meters}m-{$d2->centimeters}cm = {$d3->meters}m-{$d3->centimeters}cm</p>";
    }
    ?>
</body>
</html>
