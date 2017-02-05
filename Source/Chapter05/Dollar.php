<?php

namespace Source\Chapter05;

//Chapter 05 - Falando Francamente
class Dollar
{

    private $amount;

    public function __construct(int $amount)
    {
       $this->amount = $amount;
    }

    public function times(int $multiplier) : Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar) : bool
    {
        return $this->amount === $dollar->amount;
    }

}