<?php
/**
 * Тариф базовый
 * Цена за 1 км = 10 рублей
 * Цена за 1 минуту = 3 рубля
 */

namespace Task\Rates;

class RateMain extends ARate
{
    public $pricePerKilometer = 10;
    public $pricePerMinute = 3;

    public function countPrice(): int
    {
        echo "Тариф Базовый ($this->kilometers км, $this->minutes минут)<br>";
        return parent::countPrice();
    }
}
