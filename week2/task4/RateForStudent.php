<?php
/**
 * Тариф студенческий
 * Цена за 1 км = 4 рубля
 * Цена за 1 минуту = 1 рубль
 */

namespace Task\Rates;

class RateForStudent extends ARate
{
    public $pricePerKilometer = 4;
    public $pricePerMinute = 1;

    public function countPrice(): int
    {
        echo "Тариф студенческий ($this->kilometers км, $this->minutes минут)<br>";
        return parent::countPrice();
    }
}
