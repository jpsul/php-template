<?php

use sample\SampleClass;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \sample\SampleClass
 */
class SampleClassTest extends TestCase
{
    protected $sampleClassO = null;

    public function setUp(): void
    {
        $this->sampleClassO = new SampleClass("test string");
    }

    /**
     * @covers \sample\SampleClass
     */
    public function testClassExists()
    {
        $this->assertInstanceOf("\sample\SampleClass", $this->sampleClassO);
    }

    /**
     * @covers \sample\SampleClass::getString
     */
    public function testReadString()
    {
        $returned_string = $this->sampleClassO->getString();
        $this->assertEquals("test string", $returned_string);
    }
}
