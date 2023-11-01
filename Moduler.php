<?php
function fast_moduler($x, $n, $m) {
    if ($n == 0) {
        return 1;
    } elseif ($n % 2 == 0) {
        $result = fast_moduler($x, $n / 2, $m);
        echo ("$result * $result % $m<br>");
        echo (( $result * $result)%$m."<hr>");
        return ($result * $result) % $m;
    } else {
        $result = fast_moduler($x, $n - 1, $m);
        echo ("$x * $result * $result % $m <br>");
        echo (($x * $result * $result)%$m."<hr>");
        return ($x * $result* $result)%$m;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modular Exponentiation</title>
</head>
<body>
    <?php
    echo ((3** 13)%5);
    $a = fast_moduler(3, 13, 5);
    echo "Result is $a";
    ?>
</body>
</html>
