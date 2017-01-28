<?php

namespace Tests\Chapter03;

use PHPUnit_Framework_TestCase;
use Source\Chapter03\Dollar;


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Dollar(5);

        /* @var Dollar $product */
        $product = $five->times(2);

        $this->assertEquals(10, $product->amount);

        $product = $five->times(3);

        $this->assertEquals(15, $product->amount);

    }


    public function test_must_be_equal() {

        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

    }

}
