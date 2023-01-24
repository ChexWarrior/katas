<?php

// naive
function lcm($numbers) {
    $size = count($numbers);
    $gcm = array_reduce($numbers, function ($carry, $item) {
        if (empty($carry)) {
            return $item;
        }

        return $carry * $item;
    });

    // echo "GCM: ", $gcm, PHP_EOL;

    for ($i = 1; $i <= $gcm; $i += 1) {
        if ($size === count(array_filter($numbers, function ($e) use ($i) {
            return $i % $e === 0;
        }))) {
            return $i;
        }
    }

    return 0;
}

echo lcm([1, 2, 3, 4, 5, 6, 7, 8, 9]), PHP_EOL;
echo lcm([5]), PHP_EOL;
echo lcm([5, 7, 11]), PHP_EOL;
echo lcm([5, 7, 11, 35, 55, 77]), PHP_EOL;