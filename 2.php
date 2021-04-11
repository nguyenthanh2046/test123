<?php
//-----------------------------------------requirement
//2. Write a function to find a number that repeats 1 time in this array [4, 8, 9, 5, 8, 9, 4, 1, 9, 5].
// The result should be “1”.
//------------------------------------------

function findNotRepeatValueInArray($arr)
{
    if (!is_array($arr)) {
        return "please enter array.";
    }

    if (count($arr) < 2) {
        return $arr;
    }

    $vals = array_count_values($arr);
    $valueNotRepeats = array_keys($vals, 1);

    if (count($valueNotRepeats) === 0) {
        return "array have no value not repeat.";
    }

    return $valueNotRepeats;
}

findNotRepeatValueInArray([4, 8, 9, 5, 8, 9, 4, 1, 9, 5]);

?>

?>