<?php 

function fastPower($base, $exponent) {
    
    if ($exponent == 0) {
        return 1;
    } elseif ($exponent % 2 == 0) {
        $half_pow = fastPower($base, $exponent / 2);
        echo "$half_pow * ";
        return $half_pow * $half_pow;
    } else {
        
        $half_pow = fastPower($base, ($exponent - 1) / 2);
        echo "$base * $half_pow * ";
        return $base * $half_pow * $half_pow;
    }
}

function NormalPower($base, $exponent) {
    $Pow =$base;
    $x=1;
    while ($exponent > $x){
        $Pow = $Pow *$base;
        $x++;
        echo "$base * ";
        
    }
    return $Pow;
}

// Example usage:
$base = 2;
$exponent =32;
$result = fastPower($base, $exponent);
echo " = $result <br>";


$result = NormalPower($base, $exponent);
echo " = $result";






