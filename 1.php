<?php

//-----------------------------------------requirement
//1 . Write a function that can find the top 2 largest numbers of an array?
//E.g. giving an array [0, 6, 100, 46, 47], your function should return 100 and 47.
//------------------------------------------
function findTwoMaxValueInArray($arr)
{
    if (!is_array($arr)) {
       return "please enter array." ;
    }

    if (count($arr) === 0) {
        return "Array is empty." ;
    }

    if (count($arr) < 2) {
        return "Array has one value is " . $arr[0];
    }

    if (count($arr) === 2) {
        return $arr;
    }

    $arr = array_unique ($arr);
    rsort($arr);

    return [$arr[0], $arr[1]];
}

findTwoMaxValueInArray([0, 6, 100, 46, 47]);

?>