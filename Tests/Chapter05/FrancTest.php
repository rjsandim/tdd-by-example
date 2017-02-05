<?php

namespace Tests\Chapter05;

use PHPUnit_Framework_TestCase;
use Source\Chapter05\Franc;


class FrancTest extends PHPUnit_Framework_TestCase
{

    public function test_must_multiply_two_dollars() {

        $five = new Franc(5);

        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }


    public function test_must_be_equal() {

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

    }

}
