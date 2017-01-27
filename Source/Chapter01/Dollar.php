<?php

namespace Source\Chapter01;

//Chapter 01 - Dinheiro multi-moeda
class Dollar
{

    public $amount;

    public function __construct(int $amount)
    {
       $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        $this->amount *= $multiplier;
    }

}