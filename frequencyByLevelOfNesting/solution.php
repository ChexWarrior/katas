<?php

function freqCount($nested, $element) {
    return unwind($nested, $element, 0, 0, [[0,0]]);
}

function unwind($group, $element, $level, $index, $occurrences) {
    $item = $group[$index];

    if (!isset($item)) {
        return $occurrences;
    }

    if (is_array($item)) {
        $occurrences[] = [$level + 1, 0];
        return unwind($item, $element, $level + 1, 0, $occurrences);
    } else {
        if ($item === $element) {
            $count = $occurrences[$level][1] + 1;
            $occurrences[$level] = [$level, $count];
        }

        return unwind(
            $item,
            $element,
            $level,
            $index + 1,
            $occurrences,
        );
    }
}

