<?php

function longestCommonEnding(string $a, string $b): string {
    // Go through strings in reverse

    // Compare each character, continue until difference, return like string

    $commonEnding = '';
    $a_array = array_reverse(str_split($a));
    $b_array = array_reverse(str_split($b));

    for ($i = 0; $i < count($a_array) && $i < count($b_array); $i += 1) {
        if ($a_array[$i] === $b_array[$i]) {
            $commonEnding = $a_array[$i] . $commonEnding;
            continue;
        }

        break;
    }

    return $commonEnding;
}

echo longestCommonEnding("trick", "truck"), PHP_EOL;