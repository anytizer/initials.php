# initials.php

Generate naming initials


## Installation

    composer require anytizer/initials.php:dev-master


## Usage Example - Initials

    <?php
	require_once("vendor/autoload.php");

	use anytizer\initials;

    $initials = new initials();
	$initials->length(1); // optional
    $inits = $initials->get("Firstname Lastname");
	
	echo $inits;


Expected output: __FL__.

    $initials = new initials();
	$initials->length(2);
    $inits = $initials->get("Firstname Lastname");
	
	echo $inits;

Expected output: __FILA__.


## Usage Example - Names

Parses name into First Name, Middle Name and Last Name.
If name has two words, middle name is empty.
If name has more than 3 words, middle name is a comnination of words.

Do not pass title, or it will become the first name.

    <?php
	require_once("vendor/autoload.php");

    use anytizer\names;

    $names = new names();
	$name = $names->parse("Mr. John Di Doe");

    print_r($name);
