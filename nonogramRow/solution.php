<?php declare(strict_types=1);

function nonogramrow(array $input): array {
    $result = [];
    $total = 0;
    foreach ($input as $element) {
        if ($element > 0) {
            $total += 1;
        } else {
            if ($total > 0) $result[] = $total;
            $total = 0;
        }
    }

    if ($total > 0) $result[] = $total;

    return $result;
}

function showResult(array $arr): void {
    echo '[' . join(',', $arr) . ']' . PHP_EOL;
}

showResult(nonogramrow([]));
showResult(nonogramrow([0, 0, 0, 0, 0]));
showResult(nonogramrow([1, 1, 1, 1, 1]));
showResult(nonogramrow([0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1]));
showResult(nonogramrow([1, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0]));
showResult(nonogramrow([0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1]));
showResult(nonogramrow([1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1]));
