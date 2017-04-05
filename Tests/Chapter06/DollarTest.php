<?php

namespace Tests\Chapter06;

use PHPUnit_Framework_TestCase;
use Source\Chapter06\Dollar;


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Dollar(5);

        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }

}
