<?php

namespace Tests\Chapter06;

use PHPUnit_Framework_TestCase;
use Source\Chapter06\Dollar;
use Source\Chapter06\Franc;

class MoneyTest extends PHPUnit_Framework_TestCase
{

    public function test_must_be_equal() {

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }

}
