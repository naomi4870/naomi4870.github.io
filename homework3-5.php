<?php

// 선택값 (없으면 현재 날짜)
$year = isset($_GET["year"]) ? $_GET["year"] : date("Y");
$month = isset($_GET["month"]) ? $_GET["month"] : date("n");

$firstDay = mktime(0, 0, 0, $month, 1, $year);
$startDay = date("w", $firstDay);
$daysInMonth = date("t", $firstDay);

?>

<!DOCTYPE html>
<html>
<head>
    <title>달력</title>
</head>
<body>

<h2><?php echo $year . "년 " . $month . "월 달력"; ?></h2>

<!-- 폼 -->
<form method="GET">
    <select name="year">
        <?php
        for ($y = 2020; $y <= 2030; $y++) {
            echo "<option value='$y' " . ($y == $year ? "selected" : "") . ">$y 년</option>";
        }
        ?>
    </select>

    <select name="month">
        <?php
        for ($m = 1; $m <= 12; $m++) {
            echo "<option value='$m' " . ($m == $month ? "selected" : "") . ">$m 월</option>";
        }
        ?>
    </select>

    <button type="submit">보기</button>
</form>

<br>

<!-- 달력 -->
<table border="1" cellpadding="10">
<tr>
    <th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th>
</tr>

<tr>

<?php
// 빈칸
for ($i = 0; $i < $startDay; $i++) {
    echo "<td></td>";
}

// 날짜 출력
for ($day = 1; $day <= $daysInMonth; $day++) {

    echo "<td>$day</td>";

    if (($day + $startDay) % 7 == 0) {
        echo "</tr><tr>";
    }
}

// 마지막 빈칸
$last = ($daysInMonth + $startDay) % 7;
if ($last != 0) {
    for ($i = $last; $i < 7; $i++) {
        echo "<td></td>";
    }
}
?>

</tr>
</table>

</body>
</html>