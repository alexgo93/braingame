<?php

use function \cli\out;
use function \cli\input;

const ROUNDS = 3;
function playCalcGame()
{
    engineCalc();
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

function engineCalc()
{
    for ($i = 0; $i < ROUNDS; $i++) {
          calcTaskGeneration();
    }
}


function calcTaskGeneration()
{

    $firstDigit = rand(0, 100);
    $secondDigit = rand(0, 100);
    $signArray = ['+', '-', '*'];
    $sign = $signArray[array_rand($signArray, 1)];
    $task = $firstDigit . " " . $sign . " " . $secondDigit;
    $rightAnswer = rightAnswer($firstDigit, $sign, $secondDigit);



        out("Your task: $task \n");
        $answer = input();

    if ($answer == $rightAnswer) {
        out("Congratulation! \n");
    } else {
        out("Your loose! Want to try again? \n");
        $looseInput = input();
        if ($looseInput === 'yes') {
            return engineCalc();
        }
        return false;
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
