<?php

namespace Recruitment\Tests\Element;

use PHPUnit\Framework\TestCase;
use Recruitment\Element\AbstractElement;
use Recruitment\Element\Capacitor;
use Recruitment\Exception\NullCapacitorException;

class CapacitorTest extends TestCase
{
    /**
     * @test
     */
    public function newCapacitorTest()
    {
        $capacitor = new Capacitor(1);

        $this->assertEquals(1, $capacitor->getValue());
        $this->assertEquals(AbstractElement::TYPE_CAPACITY, $capacitor->getType());
    }

    /**
     * @test
     */
    public function throwExceptionWhenInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Capacitor(-1);
    }

    /**
     * @test
     */
    public function throwExceptionWhenUnsupportedElement()
    {
        $this->expectException(NullCapacitorException::class);
        new Capacitor(0);
    }
}