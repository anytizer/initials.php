<?php
namespace common;

/**
 * Extracts the initial letters of a string's words
 */
class initials
{
	/**
	 * @var int
	 */
    private $characters_count = 1;

    /**
     * Begin with determining how many characters to extract.
     */
    public function __construct()
	{
	}
	
	public function length($characters_count = 3)
    {
        $this->characters_count = $characters_count;
    }

    /**
     * Calculate the initials
     */
    public function get($string = "")
    {
        $words = explode(" ", $string);
        $letters = array_map(array($this, "letter"), $words);

        $phrase = implode("", $letters);

        return $phrase;
    }

    /**
     * Read an initial letter from a name's word
     */
    private function letter($word = "")
    {
        $letters = strtoupper(substr($word, 0, $this->characters_count));

        return $letters;
    }
}

