<?php
function stackOverflowTest($b) {
    if ($b == 100000) {
        return $b;
    }
    $b++;
    return stackOverflowTest($b);
}
$a = stackOverflowTest($b);
echo $a;
?>
