<?php
function stackOverflowTest($b) {
    if ($b == 10000000) {
        return $b;
    }
    $b++;
    return stackOverflowTest($b);
}
$b=0;
$a = stackOverflowTest($b);

$b=0;

while ($b != 10000000){
    $b++;
}
echo $b;
echo $a;
?>
