<?php
const BEGIN = 1;
const END = 100;
const DESCRIPTION = "Answer 'yes' if number is simple, else answer 'no'. \n";


function simpleTaskGeneration()
{
    $game = function () {
        $digit = rand(BEGIN, END);
        $rightAnswer = isSimple($digit) ? "yes" : "no";
        $task = "Is " . $digit . " Simple?\n";

        return [$rightAnswer, $task];
    };

    playGame($game, DESCRIPTION);
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
