<?php

namespace Chadicus;

class Alliteration implements DictionaryInterface
{
    private $words = array('A' => array(),
                           'B' => array(),
    				       'C' => array(),
    				       'D' => array(),
    				       'E' => array(),
    				       'F' => array(),
    				       'G' => array(),
    					   'H' => array(),
    					   'I' => array(),
    					   'J' => array(),
    					   'K' => array(),
    					   'L' => array(),
    					   'M' => array(),
    					   'N' => array(),
    					   'O' => array(),
    					   'P' => array(),
    					   'Q' => array(),
    					   'R' => array(),
    					   'S' => array(),
    					   'T' => array(),
    					   'U' => array(),
    					   'V' => array(),
    					   'W' => array(),
    					   'X' => array(),
    					   'Y' => array(),
    					   'Z' => array());
    public function getAlliteration($prefix, $words = 2)
    {
        $letter = array("A" => "a",
    	                "B" => "b", 
                        "C" => "b", 
                        "D" => "d", 
                        "E" => "e", 
                        "F" => "f", 
                        "G" => "g", 
                        "H" => "h", 
                        "I" => "i", 
                        "J" => "j", 
                        "K" => "k", 
                        "L" => "l", 
                        "M" => "m", 
                        "N" => "n", 
                        "O" => "o", 
                        "P" => "p", 
                        "Q" => "q", 
                        "R" => "r", 
                        "S" => "s", 
                        "T" => "t", 
                        "U" => "u", 
                        "V" => "v", 
                        "W" => "w", 
                        "X" => "x", 
                        "Y" => "y", 
                        "Z" => "z");

        if ($prefix === null) {
            $prefix = array_rand($letters, 1);
        }
        $word1 = getWord($prefix);
        $word2 = getWord($prefix);
        $alliteration = $word1 . " " . $word2;
	}

    private function getWord($prefix = null)
    {
        $allWords =$words[$prefix]
        $random = $words[$prefix][array_rand($words[$prefix])]
        return $random
    }
}
