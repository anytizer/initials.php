# initials.php

Generate naming initials


## Installation

    composer require anytizer/initials.php:dev-master


## Usage Example - Initials

    use common\initials;

    $initials = new initials();
	$initials->length(1);
    $name = $initials->get("Firstname Lastname");

Expected output: __FL__.


## Usage Example - Names

Parses name into First Name, Middle Name and Last Name.
If name has two words, middle name is empty.
If name has more than 3 words, middle name is a comnination of words.

Do not pass title, or it will become the first name.

    use common\names;

    $names = new names();
	$name = $names->parse("Mr. John Di Doe");

    print_r($names);
