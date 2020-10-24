<?php
/**
 * Trait services
 * Дополнительные услуги (трейты):
 * Gps в салон - 15 рублей в час, минимум 1 час. Округление в большую сторону
 * Дополнительный водитель - 100 рублей единоразово
 */

namespace Task\Rates;

trait Services
{
    public function addServices(int &$price, bool $gps = false, int $driverTime = 0): int
    {
        $gpsPrice = 15;
        $driverFeePerHour = 100;
        if ($gps === true) {
            $price += $gpsPrice;
            echo "Выбрана услуга GPS<br>";
        }

        if ($driverTime !== 0) {
            $driverTime = ($driverTime - ($driverTime % 60 ) + 60) / 60;
            $price = $price + ($driverTime * $driverFeePerHour);
            echo "Выбрана услуга Водитель<br>";
        }

        return $price;
    }
}
