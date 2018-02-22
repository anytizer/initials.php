# initials.php

Generate naming initials


## Installation

    composer require anytizer/initials.php:dev-master


## Usage Example - Initials

    use common\initials;

    $initials = new initials();
	$initials->length(1);
    $name = $initials->get("Firstname Lastname");

Expect output: __FL__


## Usage Example - Names

    use common\names;

    $names = new names();
	$name = $names->parse("Mr. John Di Doe");

    print_r($names);
