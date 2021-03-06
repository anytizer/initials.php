<?php
namespace tests;

use anytizer\names;
use PHPUnit\Framework\TestCase;

class namesTest extends TestCase
{
    private $names;

    public function setup(): void
    {
        $this->names = new names();
    }

    public function testParse1()
    {
        $name = $this->names->parse("jr. john doe");

        $this->assertEquals("Jr.", $name->first);
        $this->assertEquals("John", $name->middle);
        $this->assertEquals("Doe", $name->last);
    }

    public function testParse2()
    {
        $name = $this->names->parse("jr. john di doe");

        $this->assertEquals("Jr.", $name->first);
        $this->assertEquals("John Di", $name->middle);
        $this->assertEquals("Doe", $name->last);
    }

    public function testParse3()
    {
        $name = $this->names->parse("Rein McDonald");

        $this->assertEquals("Rein", $name->first);
        $this->assertEquals("", $name->middle);
        $this->assertEquals("McDonald", $name->last);
    }

    public function testParse4()
    {
        $name = $this->names->parse("David R Doe");

        $this->assertEquals("David", $name->first);
        $this->assertEquals("R", $name->middle);
        $this->assertEquals("Doe", $name->last);
    }
}
