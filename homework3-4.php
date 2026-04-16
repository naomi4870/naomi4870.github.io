<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST["type"];

    if ($type == "triangle") {
        $w = $_POST["width"];
        $h = $_POST["height"];
        $result = "삼각형 면적: " . ($w * $h / 2);
    }

    else if ($type == "rectangle") {
        $w = $_POST["width"];
        $h = $_POST["height"];
        $result = "직사각형 면적: " . ($w * $h);
    }

    else if ($type == "circle") {
        $r = $_POST["radius"];
        $result = "원 면적: " . (3.14 * $r * $r);
    }

    else if ($type == "box") {
        $w = $_POST["width"];
        $l = $_POST["length"];
        $h = $_POST["height"];
        $result = "직육면체 체적: " . ($w * $l * $h);
    }

    else if ($type == "cylinder") {
        $r = $_POST["radius"];
        $h = $_POST["height"];
        $result = "원통 체적: " . (3.14 * $r * $r * $h);
    }

    else if ($type == "sphere") {
        $r = $_POST["radius"];
        $result = "구 체적: " . (4/3 * 3.14 * $r * $r * $r);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>도형 계산기</title>
</head>
<body>

<h2>도형 계산기</h2>

<form method="post">
    <label>도형 선택:</label>
    <select name="type">
        <option value="triangle">삼각형</option>
        <option value="rectangle">직사각형</option>
        <option value="circle">원</option>
        <option value="box">직육면체</option>
        <option value="cylinder">원통</option>
        <option value="sphere">구</option>
    </select>

    <br><br>

    width: <input type="text" name="width"><br>
    height: <input type="text" name="height"><br>
    length: <input type="text" name="length"><br>
    radius: <input type="text" name="radius"><br><br>

    <button type="submit">계산</button>
</form>

<h3>
<?php
echo $result;
?>
</h3>

</body>
</html>