<?php

const BEGIN = 1;
const END = 100;
const DESCRIPTION = "Answer 'yes' if number is even, else answer 'no'. \n";


function evenTaskGeneration()
{
    $game = function () {
        $digit = rand(BEGIN, END);
        $task = "Is " . $digit . " Even?\n";
        $rightAnswer = isEven($digit) ? "yes" : "no";
        return [$rightAnswer, $task];
    };
    playGame($game, DESCRIPTION);
}


function isEven($digit)
{
    return $digit % 2 === 0;
}
