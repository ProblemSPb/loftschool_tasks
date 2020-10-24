<?php
/**
 * Реализовать абстрактный класс тарифа,
 * который будет описывать основные методы и имплементировать описанный в п.1 интерфейс
 * Все тарифы должны наследоваться от абстрактного тарифа
 */

namespace Task\Rates;

require "Services.php";

abstract class ARate implements IRate
{
    protected $kilometers;
    protected $minutes;
    protected $pricePerKilometer;
    protected $pricePerMinute;

    public function __construct(int $kilometers, int $minutes)
    {
        $this->kilometers = $kilometers;
        $this->minutes = $minutes;
    }

    /**
     * @return int
     */
    public function getKilometers(): int
    {
        return $this->kilometers;
    }

    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    public function countPrice(): int
    {
        return ($this->kilometers * $this->pricePerKilometer) + ($this->minutes * $this->pricePerMinute);
    }

    use Services;
}
