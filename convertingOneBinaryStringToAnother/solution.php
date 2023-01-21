<?php

function minSwaps($first, $second) {
    $first = str_split($first);
    $second = str_split($second);

    $diff = [];
    $swaps = 0;
    // Find differences
    for ($i = 0; $i < count($first); $i += 1) {
        // True if difference, false if same
        $diff[] = $first[$i] !== $second[$i];
    }

    for ($i = 0; $i < count($diff); $i += 1) {
        if ($diff[$i]) {
            for ($x = $i + 1; $x < count($first); $x += 1) {
                // Find next element that is also different and not same character
                if ($diff[$x] && $first[$i] !== $first[$x]) {
                    $temp = $first[$x];
                    $first[$x] = $first[$i];
                    $first[$i] = $temp;
                    $swaps += 1;
                    break;
                }
            }
        }
    }

    return $swaps;

    // Check if each is different if so check next string to see if different, if so check if its opposite of current
}

echo minSwaps("1100", "1001"), PHP_EOL;
echo minSwaps("110011", "010111"), PHP_EOL;
echo minSwaps("10011001", "01100110"), PHP_EOL;

// 1100
// 1001

// 110011
// 010111

// 10011001
// 01100110