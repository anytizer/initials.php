# initials.php

Generate naming initials


## Installation

    composer require anytizer/initials.php=dev-master


## Usage Example

    $initials = new initials();
	$initials->length(1);
    $name = $initials->get("Firstname Lastname");

Expect output: __FL__
