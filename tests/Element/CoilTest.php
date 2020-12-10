<?php

namespace Recruitment\Tests\Element;

use PHPUnit\Framework\TestCase;
use Recruitment\Element\AbstractElement;
use Recruitment\Element\Coil;

class CoilTest extends TestCase
{
    /**
     * @test
     */
    public function newInductionTest()
    {
        $induction = new Coil(1);

        $this->assertEquals(1, $induction->getValue());
        $this->assertEquals(AbstractElement::TYPE_INDUCTION, $induction->getType());
    }

    /**
     * @test
     */
    public function throwExceptionWhenInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Coil(-1);
    }
}