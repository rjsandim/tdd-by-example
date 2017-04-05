<?php

namespace Source\Chapter06;

//Chapter 06 - Igualdade para Todos, Restaurada.
class Dollar extends Money
{

    public function __construct(int $amount)
    {
       $this->amount = $amount;
    }

    public function times(int $multiplier) : Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

}