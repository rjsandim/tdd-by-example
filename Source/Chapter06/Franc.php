<?php

namespace Source\Chapter06;

//Chapter 06 - Igualdade para Todos, Restaurada.
class Franc extends Money
{

    public function __construct(int $amount)
    {
       $this->amount = $amount;
    }

    public function times(int $multiplier) : Franc
    {
        return new Franc($this->amount * $multiplier);
    }

}