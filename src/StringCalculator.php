<?php

namespace hotwebmatter;

/**
 * Performs calculations given a string.
 */
class StringCalculator {

    /**
     * Adds zero, one, or two numbers.
     * 
     * @var string $numbers
     * 
     * @return int
     */
    public function Add(string $numbers): int {
        if ($numbers == "") {
            return 0;
        }
        $numbers_clean = str_replace(['\n'], ',', $numbers);
        $numbers_array = explode(',', $numbers_clean);-
        $sum = array_sum($numbers_array);
        return $sum;        
    }

}