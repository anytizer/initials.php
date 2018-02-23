<?php
namespace tests;

use common\name;
use common\names;
use PHPUnit\Framework\TestCase;

class namesTest extends TestCase
{
    private $names;

    public function setup()
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
}
