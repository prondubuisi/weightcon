<?php

namespace Prondubuisi\Weightcon;

class Weight
{
    public static $kilograms;

    public function _construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function kilograms(float $kilograms)
    {
        self::$kilograms = $kilograms;
        return new static();
    }

    public function toPounds(): float
    { 
        return self::$kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return self::$kilograms * 0.15747;
    }
}
