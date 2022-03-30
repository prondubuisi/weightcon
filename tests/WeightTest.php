<?php
use Prondubuisi\Weightcon\Weight;

it('can convert kilograms to pounds', function () {

    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(0.0);
});
