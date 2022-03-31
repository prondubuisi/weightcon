<?php

namespace Prondubuisi\Weightcon;

class Weight
{
    protected $kilograms;

    public function _construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function kilograms(float $kilograms)
    {
        return new static($kilograms);
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.0246;
    }
}
