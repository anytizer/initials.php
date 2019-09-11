<?php
namespace tests;

use anytizer\initials;
use PHPUnit\Framework\TestCase;

class initialsTest extends TestCase
{
    public function setup(): void
    {
    }

    public function testInitials()
    {
        $initials = new initials();

        $letters = $initials->get("Mr. John Doe");
        $expect = "MJD";

        $this->assertEquals($expect, $letters);
    }

    public function testInitials1()
    {
        $initials = new initials();
        $initials->length(1);

        $letters = $initials->get("Longer Frau");
        $expect = "LF";

        $this->assertEquals($expect, $letters);
    }

    public function testInitials3MultiCharacters()
    {
        $initials = new initials();
        $initials->length(3);

        $letters = $initials->get("Longer Frau");
        $expect = "LONFRA";

        $this->assertEquals($expect, $letters);
    }

    public function testInitials5DrawingTooManyCharacters()
    {
        $initials = new initials();
        $initials->length(5);

        $letters = $initials->get("Lon Frau");
        $expect = "LONFRAU";

        $this->assertEquals($expect, $letters);
    }

    public function testInitials15DrawingTooManyCharacters()
    {
        $initials = new initials();
        $initials->length(15);

        $letters = $initials->get("Lon Frau");
        $expect = "LONFRAU";

        $this->assertEquals($expect, $letters);
    }
}
