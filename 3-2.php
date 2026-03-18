<?php
$n = 30;
$arr = array();

// generate random numbers
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = rand(10, 100);
}

// print original array
echo "Original array:<br>";
foreach ($arr as $value) {
    echo $value . " ";
}

// sort array
sort($arr);

// print sorted array
echo "<br><br>Sorted array (ascending):<br>";
foreach ($arr as $value) {
    echo $value . " ";
}
?>