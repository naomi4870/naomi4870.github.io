<?php
$n = 10; // you can change (<=100)

$fib = array();
$fib[1] = 1;
$fib[2] = 1;

echo "i&nbsp;&nbsp;fi&nbsp;&nbsp;ratio (fi+1/fi)<br>";

// print first two
echo "1&nbsp;&nbsp;1&nbsp;&nbsp;1<br>";
echo "2&nbsp;&nbsp;1&nbsp;&nbsp;2<br>";

for ($i = 3; $i <= $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
    $ratio = $fib[$i] / $fib[$i-1];

    echo $i . "&nbsp;&nbsp;" . $fib[$i] . "&nbsp;&nbsp;" . $ratio . "<br>";
}
?>