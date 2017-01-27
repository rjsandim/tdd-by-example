<?php

namespace Tests\Chapter02;

use PHPUnit_Framework_TestCase;
use Source\Chapter02\Dollar;


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


}
