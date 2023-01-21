<?php

function split($initial) {
    $target = str_split($initial);
    $result = [];

    if (empty($initial)) return [];

    $tally = 0;
    $temp = '';
    foreach ($target as $char) {
        if ($char === '(') $tally += 1;
        if ($char === ')') $tally -= 1;

        $temp .= $char;

        if ($tally === 0) {
            $result[] = $temp;
            $temp = '';
        }
    }

    return implode(',', $result);
}

echo split("()()()"), PHP_EOL;
echo split("((()))"), PHP_EOL;
echo split("((()))(())()()(()())"), PHP_EOL;
echo split("((())())(()(()()))"), PHP_EOL;
