<?php

function findShort($str)
{
    $words = explode(' ', $str);
    return min(array_map('strlen', $words));
}
