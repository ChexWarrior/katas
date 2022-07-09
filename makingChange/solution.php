<?php declare(strict_types=1);

function makeChange(int $total): int {
    $runningTotal = $total;
    $coinValues = [500, 100, 25, 10, 5, 1];
    $numCoins = 0;
    foreach ($coinValues as $value) {
        $coinCount = 0;
        //echo "Current Value: $value\n";
        $coinCount += intdiv($runningTotal, $value);
        //echo "Num Coins: $numCoins\n";
        $runningTotal -= $value * $coinCount;
        //echo "Running Total: $runningTotal\n";
        $numCoins += $coinCount;

        if ($runningTotal < 0) break;
    }

    return $numCoins;
}

echo makeChange(0), PHP_EOL;
echo makeChange(12), PHP_EOL;
echo makeChange(468), PHP_EOL;
echo makeChange(123456), PHP_EOL;