<?php

class Converter_NullTest extends PHPUnit_Framework_TestCase {

    public function testReturnsTheArgument() {
        $c = new Converter_Null();
        $this->assertEquals(
            Test_Data::gif1x1(),
            $c->convert(Test_Data::gif1x1())
        );
    }
}