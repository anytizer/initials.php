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

    public function testInitials()
    {
        $name = $this->names->parse("Jr. John Doe");

        $this->assertEquals("Jr.", $name->first);
        $this->assertEquals("John", $name->middle);
        $this->assertEquals("Doe", $name->last);
    }
}
