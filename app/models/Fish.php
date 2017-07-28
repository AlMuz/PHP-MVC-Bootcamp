<?php

namespace Myproject\models;
class Fish
{
    public function __construct()
    {
        $this->listOfFish = [
            'Aholehole',
            'Arowana',
            'Australian lungfish',
            'Bala shark',
            'Beardfish',
            'Beluga sturgeon',
            'Billfish',
            'Elver',
            'Firefish',
            'Goldeye',
            'Ilisha',
            'Kelpfish',
            'Limia',
            'Mrigal',
            'Oldwife',
            'Remora',

        ];
    }


    public function getFishList(): array
    {
        return $this->listOfFish;
    }

}