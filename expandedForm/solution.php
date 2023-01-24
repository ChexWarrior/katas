<?php

function expandedForm($target) {
    $returnString = '';
    $arrayTarget = str_split((string)$target);
    $duplicate = $arrayTarget;
    $decimalIndex = array_search('.', $duplicate);
    $beforeDecimal = array_splice($duplicate, 0, $decimalIndex);
    $place = count($beforeDecimal) - 1;
   // echo "Place: $place", PHP_EOL;
    $afterDecimal = false;
    for ($i = 0; $i < count($arrayTarget); $i += 1) {
        $element = $arrayTarget[$i];

        if ($element === '.') {
            //echo "Decimal at: $i ", PHP_EOL;
            $afterDecimal = true;
            $place = 1;
            continue;
        }

        $placeNumber = pow(10, $place);
        if ($afterDecimal) {
            if ($element > 0) $returnString .= "$element/$placeNumber";
            $place += 1;
        } else {
           // echo "Before decimal...", PHP_EOL;
            if ($element > 0) $returnString .= $place > 0 ? $placeNumber * $element : $element;
            $place -= 1;
        }

        if ($element > 0 && $i + 1 < count($arrayTarget)) $returnString .= " + ";

        //echo $returnString, PHP_EOL;
    }

    return $returnString;
}

// echo expandedForm(25.24), PHP_EOL;
// echo expandedForm(70701.05), PHP_EOL;
// echo expandedForm(685.27), PHP_EOL;

echo expandedForm(87.04), PHP_EOL;
echo expandedForm(123.025), PHP_EOL;
echo expandedForm(50.270), PHP_EOL;
