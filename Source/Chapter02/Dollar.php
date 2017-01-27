<?php

namespace Source\Chapter02;

//Chapter 02 - Degenerar Objetos
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

}