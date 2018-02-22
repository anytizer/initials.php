<?php
declare(strict_types=1);

namespace tests;

require_once("src/libraries/classes/common/initials.php");
use common\initials;

$initials = new initials();
$names = $initials->get("mr. john doe");
echo $names;
