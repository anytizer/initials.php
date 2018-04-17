<?php
namespace anytizer;
use anytizer\NameDTO;

/**
 * Read a name string and break it into First name, Middle name and Last name.
 * Supports many words as a name.
 */
class names
{
    public function parse($full_name = "", $fix_case = false): NameDTO
    {
        $names = explode(" ", $full_name);
        $names = array_map("ucfirst", $names);

        $name = new NameDTO();

        # Assigning these empty values makes sure that each of the three parts exists.

        $words = count($names);
        switch ($words)
		{
            case 0:
                break;
            case 1:
                $name->first = $names[0];
                break;
            case 2:
                $name->first = $names[0];
                $name->last = $names[1];
                break;
            case 3:
                $name->first = $names[0];
                $name->middle = $names[1];
                $name->last = $names[2];
                break;
            default:
                # Case of 4 or more than 4 words in the name

                # First and last names are predictable
                $name->first = $names[0];
                $name->last = $names[$words - 1];

                # Now consider the words between
                $name_temp = $names;
                unset($name_temp[0]);
                unset($name_temp[$words - 1]);
                $name->middle = implode(" ", $name_temp);
				
				break;
        }

        if ($fix_case === true)
		{
            $name = array_map("strtolower", $name);
            $name = array_map("ucfirst", $name);
        }

        return $name;
    }
}
