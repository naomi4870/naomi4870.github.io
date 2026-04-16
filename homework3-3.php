<?php

$n = readline("n 값을 입력하세요 (100 이하): ");

if ($n < 1 || $n > 100) {
    echo "범위를 벗어났습니다.\n";
    exit;
}

$fib = array();
$fib[0] = 1;
$fib[1] = 1;

// 피보나치 생성
for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

// 출력
echo "\ni  fi  fi+1/fi\n";

for ($i = 0; $i < $n; $i++) {

    echo ($i + 1) . "  " . $fib[$i];

    if ($i == 0) {
        echo "  1\n";
    } else {
        $ratio = $fib[$i] / $fib[$i - 1];
        echo "  " . $ratio . "\n";
    }
}

?>