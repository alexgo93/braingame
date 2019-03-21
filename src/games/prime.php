<?php

namespace Braingames\Games\Prime;

use function \Braingames\BrainEngine\initialization;

const BEGIN = 1;
const END = 100;
const GAME_DESCRIPTION = "Answer 'yes' if number is prime, else answer 'no'. \n";

function primeGame()
{
    $game = function () {
        $digit = rand(BEGIN, END);
        $rightAnswer = isPrime($digit) ? 'yes' : 'no';
        $task = "Is {$digit} Prime? \n";

        return [$rightAnswer, $task];
    };

    initialization(GAME_DESCRIPTION, $game);
}

function isPrime($digit)
{
    if ($digit <= 1) {
        return false;
    }
    for ($i = 2; $i < $digit; $i++) {
        if ($digit % $i === 0) {
            return false;
        }
    }
    return true;
}
