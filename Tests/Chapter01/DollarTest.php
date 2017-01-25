<?php

namespace Tests\Chapter01;

use PHPUnit_Framework_TestCase;
use Source\Chapter01\Dollar;


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function test_must_run() {

        $dolar = new Dollar(10);

        $result = $dolar->toEuro();

        $this->assertEquals(15, $result);

    }


}
