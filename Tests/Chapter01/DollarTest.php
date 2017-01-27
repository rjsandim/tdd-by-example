<?php

namespace Tests\Chapter01;

use PHPUnit_Framework_TestCase;
use Source\Chapter01\Dollar;


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Dollar(5);

        $five->times(2);

        $this->assertEquals(10, $five->amount);

    }


}
