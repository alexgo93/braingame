<?php

use function \cli\out;
use function \cli\input;

function playCalcGame()
{
    calcTaskGeneration();
}

function sum($a, $b)
{
    return $a + $b;
}
function subtraction($a, $b)
{
    return $a - $b;
}
function multiplication($a, $b)
{
    return $a * $b;
}


function calcTaskGeneration()
{
    $game = function () {
        $firstDigit = rand(0, 100);
        $secondDigit = rand(0, 100);
        $signArray = ['+', '-', '*'];
        $sign = $signArray[array_rand($signArray, 1)];
        $task = $firstDigit . " " . $sign . " " . $secondDigit . "\n";
        $rightAnswer = rightAnswer($firstDigit, $sign, $secondDigit);

        return [$rightAnswer, $task];
    };
    playGame($game);
}

function rightAnswer($firstDigit, $sign, $secondDigit)
{
    switch ($sign) {
        case '+':
            $result = sum($firstDigit, $secondDigit);
            break;
        case '-':
            $result = subtraction($firstDigit, $secondDigit);
            break;
        case '*':
            $result = multiplication($firstDigit, $secondDigit);
            break;
    }
    return $result;
}
