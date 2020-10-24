<?php

/**
 * Задание #4.1. Практика с ООП
 */

require "IRate.php";
require "ARate.php";
require "RateMain.php";
require "RatePerHour.php";
require "RateForStudent.php";

/**
 * Проверка:
 * 1. Тариф базовый(5 км, 1 час)
 * - добавить услугу GPS
 * = 5км * 10 руб / км + 60 мин * 3 руб / мин + 15 руб / час * 1 час = 50 + 180 + 15 = 245
 */
$rateMainPlusServices = new \Task\Rates\RateMain(5, 60);
$price = $rateMainPlusServices->countPrice();
echo $rateMainPlusServices->addServices($price, true, 0) . " рублей к оплате.";
echo "<br><br>";

$rateMain = new \Task\Rates\RateMain(10, 5);
echo $rateMain->countPrice() . " рублей к оплате.";
echo "<br><br>";

$rateHour = new \Task\Rates\RatePerHour(10, 5);
echo $rateHour->countPrice() . " рублей к оплате.";
echo "<br><br>";

$rateStudent = new \Task\Rates\RateForStudent(50, 30);
$priceWithServices = $rateStudent->countPrice();
echo $rateStudent->addServices($priceWithServices, true, 40) . " рублей к оплате.";
