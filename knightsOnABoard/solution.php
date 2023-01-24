<?php

/**
 * 8 x 8 2d array 64 spaces
 *
 * First determine formula for knights move, need to translate to array
 *
 *
 */

 function cannotCapture($board) {
    // Iterate through board find all $knights
    // For a knight determine if it can capture any other knights
    // If yes break and return false
    // If no then continue

    for ($x = 0; $x < 7; $x += 1) {
        for ($y = 0; $y < 7; $y += 1) {
            $space = $board[$x][$y];
            if ($space) {
                // Check if we can hit any other knights
                $upper_left_1 = isset($board[$x - 2][$y - 1]) && $board[$x - 2][$y - 1];
                $upper_left_2 = isset($board[$x - 1][$y - 2]) && $board[$x - 1][$y - 2];
                $upper_right_1 = isset($board[$x + 2][$y - 1]) && $board[$x + 2][$y - 1];
                $upper_right_2 = isset($board[$x + 1][$y - 2]) && $board[$x + 1][$y - 2];
                $lower_left_1 = isset($board[$x - 1][$y + 2]) && $board[$x - 1][$y + 2];
                $lower_left_2 = isset($board[$x - 2][$y + 1]) && $board[$x - 2][$y + 1];
                $lower_right_1 = isset($board[$x + 2][$y + 1]) && $board[$x + 2][$y + 1];
                $lower_right_2 = isset($board[$x + 1][$y + 2]) && $board[$x + 1][$y + 2];

                if ($upper_left_1 || $upper_left_2 || $upper_right_1 || $upper_right_2 || $lower_left_1
                    || $lower_left_2 || $lower_right_1 || $lower_right_2) {
                    return false;
                }
            }
        }
    }

    return true;
 }

 echo cannotCapture([
    [0, 0, 0, 1, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 1, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 0, 1, 0, 1, 0],
    [0, 1, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 1, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 1, 0, 0, 0]
 ]) ? 'true' : 'false', PHP_EOL;

 echo cannotCapture([
    [1, 0, 1, 0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0, 1, 0, 1],
    [0, 0, 0, 0, 1, 0, 1, 0],
    [0, 0, 1, 0, 0, 1, 0, 1],
    [1, 0, 0, 0, 1, 0, 1, 0],
    [0, 0, 0, 0, 0, 1, 0, 1],
    [1, 0, 0, 0, 1, 0, 1, 0],
    [0, 0, 0, 1, 0, 1, 0, 1]
]) ? 'true' : 'false', PHP_EOL;
