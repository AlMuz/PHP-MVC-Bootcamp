<?php

namespace Myproject\models;


class SmallAnimals implements AnimalModelInterface
{
    public function getListOfAnimals(): array
    {
        return [
            'mouse',
            'cat',
            'shitty-dog',
            'bird'
        ];
    }
}