<?php
namespace tests;

use common\initials;
use PHPUnit\Framework\TestCase;

class initialsTest extends TestCase
{
    public function setup()
    {
    }

    public function testInitials()
    {
        $initials = new initials();
        $initials->length(1);

        $letters = $initials->get("Longer Frau");
        $expect = "LF";

        $this->assertEquals($expect, $letters);
    }

    public function testInitialsMultiCharacters()
    {
        $initials = new initials();
        $initials->length(3);

        $letters = $initials->get("Longer Frau");
        $expect = "LONFRA";

        $this->assertEquals($expect, $letters);
    }

    public function testInitialsDrawingTooManyCharacters()
    {
        $initials = new initials();
        $initials->length(5);

        $letters = $initials->get("Lon Frau");
        $expect = "LONFRAU";

        $this->assertEquals($expect, $letters);
    }
}
