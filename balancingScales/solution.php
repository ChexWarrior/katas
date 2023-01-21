<?php

function scaleTip($list) {
    $right = 0;
    $left = 0;

    $leftSide = true;
    foreach ($list as $item) {
        if ($item === "I") {
            $leftSide = false;
            continue;
        }

        if ($leftSide) {
            $left += $item;
        } else {
            $right += $item;
        }
    }

    if ($right === $left) return "balanced";

    if ($right > $left) return "right";

    return "left";
}


echo scaleTip([0, 0, "I", 1, 1]), PHP_EOL;
echo scaleTip([1, 2, 3, "I", 4, 0, 0]), PHP_EOL;
echo scaleTip([5, 5, 5, 0, "I", 10, 2, 2, 1]), PHP_EOL;