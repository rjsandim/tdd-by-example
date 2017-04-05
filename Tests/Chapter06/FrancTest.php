<?php

namespace Tests\Chapter06;

use PHPUnit_Framework_TestCase;
use Source\Chapter06\Franc;


class FrancTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Franc(5);

        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }

}
