<?php

namespace Source\Chapter03;

//Chapter 03 - Igualdade para Todos
class Dollar
{

    public $amount;

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