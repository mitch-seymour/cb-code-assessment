<?php

/**
 * ============================================================================
 * `'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'
 *                		
 *                      String Reverse - w/ Unicode Support
 *
 *                       reverse_string("Career Builder 𝌆")
 *
 *
 * `'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'`'`'`'`'`'`'`'`'`'`'`'``'`'`'`'`'
 * ============================================================================
 */

error_reporting(E_STRICT);

/*
 * Reverses a string
 *
 * @param string $str - The string to be reversed
 * @return string - The reversed string
 */
function reverse_string($str){
    
    $parts = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
    return implode('', array_reverse($parts));
    
}

echo reverse_string("Hello"); // 𝌆 redliuB reeraC