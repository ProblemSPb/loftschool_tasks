<?php

function task1(array $array, bool $return = false)
{
    if ($return) {
        $result = "";
        foreach ($array as $item) {
            $result .= $item;
        }
        return $result;
    }

    foreach ($array as $item) {
        echo "<p> $item </p>";
    }
}

function task2(string $operator, float ...$nums)
{
    $args = $nums;
    $result = 0;

    if (sizeof($args) === 0) {
        $result = "Вы не задали числа.";
    } else {
        switch ($operator) {
            case ("+"):
                $result = array_sum($args);
                break;
            case ("-"):
                $substract = $args[0];
                if (sizeof($args) > 1) {
                    for ($i = 1; $i < sizeof($args); $i++) {
                        $substract -= $args[$i];
                    }
                }
                $result = $substract;
                break;
            case ("*"):
                $result = array_product($args);
                break;
            case ("/"):
                $result = array_shift($args);
                foreach ($args as $arg) {
                    if ($arg == 0) {
                        return "Делить на ноль нельзя.";
                    }
                    $result = $result / $arg;
                }
                break;
            default:
                $result = "Это не похоже на математический оператор.";
        }
    }
    return $result;
}

function task3($num1, $num2)
{
    if (!is_int($num1) | !is_int($num2)) {
        echo "Что за таблица умножения без чисел? Введите числа.";
        return false;
    }

    if ($num1 <= 0 | $num2 <= 0) {
        echo "Введите числа больше нуля.";
        return false;
    }

    $cols = $num1;
    $rows = $num2;

    echo "<table border='1' bordercolor='blue'>";

    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        $td = 1;
        while ($td <= $cols) {
            echo "<td>" . $tr * $td . "</td>";
            $td++;
        }
        echo "</tr>";
    }
    echo "</table>";
    return true;
}

function task4()
{
    date_default_timezone_set('Europe/Berlin');
    echo "Выведите информацию о текущей дате в формате 31.12.2016 23:59<br>";
    echo date('d.m.Y H:i', time()) . "<br>";

    echo "Выведите unixtime время соответствующее 24.02.2016 00:00:00<br>";
    echo strtotime("24.02.2016 00:00:00");
}

function task5()
{
    $string1 = "Карл у Клары украл Кораллы";
    $string2 = "Две бутылки лимонада";

    echo str_replace("К", "", $string1) . "<br>";
    echo str_replace("Две", "Три", $string2);
}

// Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
function createFile()
{
    $fp = fopen("test.txt", "r+");
    file_put_contents("test.txt", "Hello again!");
    fclose($fp);
}

function task6()
{
    $fp = fopen("test.txt", "r");
    echo fgets($fp, 1024);
    fclose($fp);
}

// Функция добавления пустых строк между вызовами задач
function drawEmptyLines()
{
    echo "<br><br>";
}