<?php

namespace Prondubuisi\Weightcon;

class Weight
{
    

    public static function kilograms(float $kilograms){
        return new static($kilograms);
    }

    protected $kilograms;
    public function _construct(float $kilograms)
    {
       // $this->kilograms = $kilograms;
    }

    public function toPounds():float{
        return $this->kilograms  * 2.0246;
    }
}
