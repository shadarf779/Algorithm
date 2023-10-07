<?php
function stackOverflowTest($b) {
    if ($b == 1000000) {
        return $b;
    }
    $b++;
    return stackOverflowTest($b);
}

$b = 0;
$a = stackOverflowTest($b);
echo $a;
?>
