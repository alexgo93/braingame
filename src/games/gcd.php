<?php

namespace Braingames\Games\Gcd;

use function \Braingames\BrainEngine\initialization;

const BEGIN = 1;
const END = 100;
const GAME_DESCRIPTION = "Find the Greatest common divisor of given number's. \n";

function gcdGame()
{
    $game = function () {
        $firstDigit = rand(BEGIN, END);
        $secondDigit = rand(BEGIN, END);
        $task = "{$firstDigit} and {$secondDigit}? \n";
        $rightAnswer = gcd($firstDigit, $secondDigit);
        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function gcd($a, $b)
{
    if ($b == 0) {
        return $a;
    }
        return gcd($b, $a % $b);
}
