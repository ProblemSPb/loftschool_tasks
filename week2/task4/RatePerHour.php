<?php
/**
 * Тариф почасовой
 * Цена за 1 км = 0
 * Цена за 60 минут = 200 рублей
 * Округление до 60 минут в большую сторону
 */

namespace Task\Rates;

class RatePerHour extends ARate
{
    public $pricePerKilometer = 0;
    public $pricePerMinute = 200 / 60;

    public function countPrice(): int
    {
        if ($this->minutes < 60) {
            $this->minutes = 60;
        } else {
            $this->minutes = $this->minutes - ($this->minutes % 60) + 60;
        }

        echo "Тариф Почасовой ($this->kilometers км, $this->minutes минут)<br>";
        return $this->minutes * $this->pricePerMinute;
    }
}
