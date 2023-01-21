<?php

function sorting($target) {
    $toSort = str_split($target);

    // check if each char after is lower according to rules
    // if so place target char in current position and move
    // others down, don't increment $i repeat unless we've gone through whole string
    $current = 0;
    for ($i = 0; $i < count($toSort); $i += 0) {
        if ($i + 1 < count($toSort) && !determineLowest($toSort[$current], $toSort[$i + 1])) {
            $temp = $toSort[$current];
            $toSort[$current] = $toSort[$i + 1];
            for ($x = $current + 1; $x <= $i + 1; $x += 1) {
                $temp2 = $toSort[$x];
                $toSort[$x] = $temp;
                $temp = $temp2;
            }
            $i = $current;
        } else {
            $i += 1;
        }

        // only increment current if we've verified its the lowest so far
        if ($i + 1 >= count($toSort)) {
            $current += 1;
            $i = $current;
        }
    }

    return implode('', $toSort);
}

// Rules lowercase before upper, letter before number otherwise alphanumeric
// Determine if $a is lower than $b
function determineLowest($a, $b) {
    $a_is_alpha = ctype_alpha($a);
    $b_is_alpha = ctype_alpha($b);

    if ($a_is_alpha && !$b_is_alpha) return true;

    if (!$a_is_alpha && $b_is_alpha) return false;

    // Both digits
    if (!$a_is_alpha && !$b_is_alpha) {
        return $a < $b;
    }

    if (strtolower($a) === strtolower($b)) {
        if (!ctype_upper($a) && ctype_upper($b)) {
            return true;
        }

        return false;
    }

    return strtolower($a) < strtolower($b);
}

echo sorting("eA2a1E"), PHP_EOL;
echo sorting("Re4r"), PHP_EOL;
echo sorting("6jnM31Q"), PHP_EOL;
echo sorting("846ZIbo"), PHP_EOL;
