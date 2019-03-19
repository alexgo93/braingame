<?php

const DESCRIPTION_SIMPLE = "Answer 'yes' if number is simple, else answer 'no'. \n";


function simpleTaskGeneration()
{
    $game = function () {
        $digit = rand(BEGIN, END);
        $rightAnswer = isSimple($digit) ? "yes" : "no";
        $task = "Is " . $digit . " Simple?\n";

        return [$rightAnswer, $task];
    };

    playGame($game, DESCRIPTION_SIMPLE);
}

function isSimple($digit)
{
    for ($i = 2; $i < $digit; $i++) {
        if ($digit % $i === 0) {
            return false;
        }
    }
    return true;
}
