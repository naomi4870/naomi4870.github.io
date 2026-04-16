<?php
$n = 30;
$sum = 0;
$prod = 1;

for($i = 1; $i <= $n; $i++) {
    echo $i . "\n";
    $sum += $i;
    $prod *= $i;
}

echo "1 + ... + 30 = " . $sum . "\n";
echo "1 * ... * 30 = " . $prod . "\n";
?>