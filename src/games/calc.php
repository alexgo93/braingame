<?php

namespace Braingames\Games\Calc;

use function \Braingames\BrainEngine\initialization;

const BEGIN = 1;
const END = 100;
const GAME_DESCRIPTION = "Find the meaning of the expression \n";

function calcGame()
{
    $game = function () {
        $firstDigit = rand(BEGIN, END);
        $secondDigit = rand(BEGIN, END);
        $signArray = ['+', '-', '*'];
        $sign = $signArray[array_rand($signArray, 1)];
        $task = "{$firstDigit} {$sign} {$secondDigit} . \n";
        $rightAnswer = calc($firstDigit, $sign, $secondDigit);

        return [$rightAnswer, $task];
    };
    initialization(GAME_DESCRIPTION, $game);
}

function calc($firstDigit, $sign, $secondDigit)
{
    switch ($sign) {
        case '+':
            $result = $firstDigit + $secondDigit;
            break;
        case '-':
            $result = $firstDigit - $secondDigit;
            break;
        case '*':
            $result = $firstDigit * $secondDigit;
            break;
    }
    return $result;
}
