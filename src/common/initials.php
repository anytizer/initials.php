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
    private $characters_count;

    /**
     * Begin with determining how many characters to extract.
     */
    public function __construct()
	{
        $this->characters_count = 1;
	}
    
    /**
     * Sets characters to extract per word
     */
	public function length($characters_count = 1)
    {
        $this->characters_count = (int)$characters_count;
    }
 
    /**
     * Read an initial letter from a name's word
     */
    private function letter($word = ""): string
    {
        $characters_count = min(strlen($word), $this->characters_count);
        $letters = strtoupper(substr($word, 0, $characters_count));

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

