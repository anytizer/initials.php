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
	
	public function length($characters_count = 3): int
    {
        $this->characters_count = $characters_count;
        return $characters_count;
    }
 
    /**
     * Read an initial letter from a name's word
     */
    private function letter($word = ""): string
    {
        $letters = strtoupper(substr($word, 0, $this->characters_count));

        return $letters;
    }
    
    /**
     * Calculate the initials
     */
    public function get($string = ""): string
    {
        $words = explode(" ", $string);
        $letters = array_map(array($this, "letter"), $words);
        $letters = array_map("strtoupper", $letters);

        $phrase = implode("", $letters);

        return $phrase;
    }
}

