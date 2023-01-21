<?php

function totalOvers(int $balls) {
    $overs = floor($balls / 6);
    $balls = $balls % 6;

    return (float) "$overs.$balls";
}
