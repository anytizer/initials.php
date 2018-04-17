<?php
declare(strict_types=1);

namespace tests;

require_once("src/anytizer/initials.php");
use anytizer\initials;

$initials = new initials();
$names = $initials->get("mr. john doe");
echo $names;
