<?php declare(strict_types=1);

// https://www.reddit.com/r/dailyprogrammer/comments/onfehl/20210719_challenge_399_easy_letter_value_sum

$alphabet = [
    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13,
    'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19,
    't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25,
    'z' => 26
];

$input = $argv[1] ?? '';
$total = 0;

for ($i = 0; $i < strlen($input); $i += 1) {
    $currentLetter = $input[$i];
    $total += $alphabet[$currentLetter];
}

echo "$input: $total\n";