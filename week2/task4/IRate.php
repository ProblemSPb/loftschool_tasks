<?php
/**
 * Interface IRate
 * Интерфейс тарифа
 */

namespace Task\Rates;

interface IRate
{
    public function getKilometers(): int;
    public function getMinutes(): int;
    public function countPrice(): int;
}
