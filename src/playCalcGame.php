<?php

use function \cli\out;
use function \cli\input;

function playCalcGame()
{
    run();
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
    static $round = 0;

    $firstDigit = rand(0, 100);
    $secondDigit = rand(0, 100);
    $signArray = ['+', '-', '*'];
    $sign = $signArray[array_rand($signArray, 1)];
    $task = $firstDigit . " " . $sign . " " . $secondDigit;
    $rightAnswer = rightAnswer($firstDigit, $sign, $secondDigit);


    while ($round < 3) {
        out("Your task: $task \n");
        $answer = input();

        if ($answer == $rightAnswer) {
            out("Congratulation! \n");
            $round++;
            return calcTaskGeneration();
        }
        $round = 0;
        out("Your loose! Want to try again? \n");
        $looseInput = input();
        if ($looseInput === 'yes') {
            return calcTaskGeneration();
        }
        return true;
    }
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
