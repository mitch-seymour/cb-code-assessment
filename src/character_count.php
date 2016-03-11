<?php

/**
 * ============================================================================
 * `'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'
 *                		
 *                   Character Count - w/ Unicode Support
 *
 *                      char_count("Career Builder 𝌆")
 *
 *
 * `'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'
 * ============================================================================
 */

error_reporting(E_STRICT);

/*
 * Returns a character count for $str
 *
 * @param string $str - The string to be used for the char count
 * @return array - An array containing the character counts for $str
 */
function char_count($str){
    
    $counts = array();
    
    $parts = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    
    foreach ($parts as $char){
        
        isset($counts[$char]) ? $counts[$char] += 1 : $counts[$char] = 1;
        
    }
    
    return $counts;
    
}

// example
$count = char_count("abacca");

print_r($count); // Array ( [C]=>1 [a]=>1 [r]=>3 [e]=>3 [ ]=>2 [B]=>1 [u]=>1 ... )
