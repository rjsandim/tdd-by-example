<?php

namespace Source\Chapter05;

//Chapter 05 - Falando Francamente
class Franc
{

    private $amount;

    public function __construct(int $amount)
    {
       $this->amount = $amount;
    }

    public function times(int $multiplier) : Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(Franc $franc) : bool
    {
        return $this->amount === $franc->amount;
    }

}