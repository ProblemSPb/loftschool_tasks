<?php

// Задание #1
echo "Задание #1<br>";

$name = "Elena";
$age = 35;

echo "Меня зовут: $name <br>";
echo "Мне $age лет<br>";
// двойная кавычка, воскл. знак, вертикальная черта, обратный слэш, слэш, кавычка, двойная кавычка, обратный слэш
echo "\"!|\\/'\"\\";
echo "<br><br>";

// Задание #2
echo "Задание #2<br>";

const ALL_DRAWINGS = 80;
const MARKER_PEN = 23;
const PENCIL = 40;

const WATERCOLOUR = ALL_DRAWINGS - MARKER_PEN - PENCIL;

echo WATERCOLOUR . "<br><br>";

// Задание #3
echo "Задание #3<br>";

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}
echo "<br><br>";

// Задание #4
echo "Задание #4<br>";

$day = 7;

switch ($day) {
    case ($day > 0 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day === 6 || $day === 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
echo "<br><br>";

// Задание #5
echo "Задание #5<br>";

$bmw = array("model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015");
$toyota = array("model" => "some model", "speed" => 140, "doors" => 4, "year" => "2016");
$opel = array("model" => "another model", "speed" => 100, "doors" => 4, "year" => "2020");

function printArray($name, $array)
{
    echo "CAR $name<br>";
    foreach ($array as $value) {
        echo "$value ";
    }
    echo "<br>";
}

printArray("bmw", $bmw);
printArray("toyota", $toyota);
printArray("opel", $opel);
echo "<br><br>";

// Задание #6
echo "Задание #6<br>";

$cols = 10;
$rows = 10;

echo "<table border='1' bordercolor='green'>";

for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
    $td = 1;
    while ($td <= $cols) {
        // четные
        if (($td % 2 === 0) && ($tr % 2 === 0)) {
            echo "<td>" . "(" . $tr * $td . ")" . "</td>";
            $td++;
        // нечетные
        } elseif (($td % 2 !== 0) && ($tr % 2 !== 0)) {
            echo "<td>" . "[" . $tr * $td . "]" . "</td>";
            $td++;
        // остальные
        } else {
            echo "<td>" . $tr * $td . "</td>";
            $td++;
        }
    }
    echo "</tr>";
}
echo "</table>";
