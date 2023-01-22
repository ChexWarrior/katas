<?php

function validateSwaps($variants, $original) {
    $results = [];
    // Swap each character with every other character and compare strings
    foreach ($variants as $variant) {
        $switches = swap(str_split($variant));
        // echo implode(',', $switches);
        $match = in_array($original, $switches);
        $results[] = $match; // ? 'true' : 'false';
        // echo implode(',', $results);
    }

    return $results;
}

// Create all variants for a single string
function swap($target) {
    $results = [];
    $original = $target;
    for ($i = 0; $i < count($target); $i += 1) {
        for ($x = $i + 1; $x < count($target); $x += 1) {
            $target = $original;
            $temp = $target[$x];
            $target[$x] = $target[$i];
            $target[$i] = $temp;
            // echo implode('', $target), PHP_EOL;
            $results[] = implode('', $target);
        }
    }

    return $results;
}

echo implode(',', validateSwaps(["BACDE", "EBCDA", "BCDEA", "ACBED"], "ABCDE")), PHP_EOL;

echo implode(',', validateSwaps(["32145", "12354", "15342", "12543"], "12345")), PHP_EOL;

echo implode(',', validateSwaps(["9786", "9788", "97865", "7689"], "9768")), PHP_EOL;
