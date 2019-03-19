<?php

const DESCRIPTION_CALC = "Find the meaning of the expression \n";




function calcTaskGeneration()
{
    $game = function () {
        $firstDigit = rand(BEGIN, END);
        $secondDigit = rand(BEGIN, END);
        $signArray = ['+', '-', '*'];
        $sign = $signArray[array_rand($signArray, 1)];
        $task = $firstDigit . " " . $sign . " " . $secondDigit . "\n";
        $rightAnswer = rightAnswer($firstDigit, $sign, $secondDigit);

        return [$rightAnswer, $task];
    };
    playGame($game, DESCRIPTION_CALC);
}

function rightAnswer($firstDigit, $sign, $secondDigit)
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
