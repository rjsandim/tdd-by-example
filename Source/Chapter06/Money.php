<?php

namespace Source\Chapter06;

//Chapter 06 - Igualdade para Todos, Restaurada.
class Money
{
    protected $amount;

    public function equals(Money $money) : bool
    {
        return $this->amount === $money->amount;
    }
}