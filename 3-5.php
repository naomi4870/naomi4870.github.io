<?php
$year = 2026;
$month = 3;

// 해당 월의 1일이 무슨 요일인지 (0=일요일 ~ 6=토요일)
$startDay = date("w", strtotime("$year-$month-01"));

// 해당 월의 마지막 날짜
$lastDay = date("t", strtotime("$year-$month-01"));

echo "<h2>$year 년 $month 월</h2>";
echo "<table border='1'>";
echo "<tr>
        <th>일</th>
        <th>월</th>
        <th>화</th>
        <th>수</th>
        <th>목</th>
        <th>금</th>
        <th>토</th>
      </tr>";

echo "<tr>";

// 첫 주 공백
for ($i = 0; $i < $startDay; $i++) {
    echo "<td></td>";
}

// 날짜 출력
$day = 1;
for ($i = $startDay; $i < 7; $i++) {
    echo "<td>$day</td>";
    $day++;
}
echo "</tr>";

// 나머지 주 출력
while ($day <= $lastDay) {
    echo "<tr>";
    for ($i = 0; $i < 7; $i++) {
        if ($day <= $lastDay) {
            echo "<td>$day</td>";
            $day++;
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>