<?php
declare(strict_types=1);

namespace tests;

require_once("vendor/autoload.php");
use common\names;

$names = new names();
$name = $names->parse("mr. john doe");
print_r($name);

$names1 = new names();
$name1 = $names1->parse("john di li doe");
print_r($name1);
