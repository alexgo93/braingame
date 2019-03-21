<?php

namespace Braingames\Games\Even;

use function \Braingames\BrainEngine\initialization;

const BEGIN = 1;
const END = 100;
const GAME_DESCRIPTION = "Answer 'yes' if number is even, else answer 'no'. \n";

function evenGame()
{
    $game = function () {
        $digit = rand(BEGIN, END);
        $task = "Is {$digit} Even? \n";
        $rightAnswer = isEven($digit) ? 'yes' : 'no';
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function isEven($digit)
{
    return $digit % 2 === 0;
}
