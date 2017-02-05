<?php

namespace Tests\Chapter05;

use PHPUnit_Framework_TestCase;
use Source\Chapter05\Dollar;


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Dollar(5);

        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }


    public function test_must_be_equal() {

        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

    }

}
