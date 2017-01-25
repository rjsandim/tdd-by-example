<?php

namespace Source\Chapter01;


class Dollar
{

    private $value;

    public function __construct(int $amount)
    {
        $this->value = $amount;
    }

    public function toEuro()
    {
        return $this->value * 1.5;
    }

}