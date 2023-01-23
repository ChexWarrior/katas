<?php

// Doesn't wrap around
function distanceToNearestVowel($target) {
    $vowels = ["a", "e", "i", "o", "u"];
    $distance = [];
    $closest = 999999;
    $targetArr = str_split($target);
    for ($i = 0; $i < count($targetArr); $i += 1) {
        $closest = 999999;
        if (in_array($targetArr[$i], $vowels)) {
            $distance[] = 0;
            continue;
        }

        for ($x = 0; $x < count($targetArr); $x += 1) {
            if ($x === $i) continue;

            if (in_array($targetArr[$x], $vowels) && abs($x - $i) < $closest) {
                $closest = abs($x - $i);
            }
        }

        $distance[] = $closest;
    }

    return $distance;
}

echo implode(',', distanceToNearestVowel("aaaaa")), PHP_EOL;
echo implode(',', distanceToNearestVowel("babbb")), PHP_EOL;
echo implode(',', distanceToNearestVowel("abcdabcd")), PHP_EOL;
echo implode(',', distanceToNearestVowel("shopper")), PHP_EOL;