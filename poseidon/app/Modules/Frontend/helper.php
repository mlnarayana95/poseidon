<?php

/**
 * Limit words in a long text
 * @param string $string
 * @param int $words
 * @return mixed
 */
function limit_words($string = '', $words = 40)
{
    return \Str::words($string, $words, $end = '...');
}