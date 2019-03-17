<?php

use function \cli\out;
use function \cli\input;

function isRightAnswer($rightAnswer)
{
    $userAnswer = input();
    return $userAnswer === $rightAnswer;
}

function playGame($task, $rightAnswer)
{
    if (isRightAnswer($rightAnswer)) {
        out('Congratulation!');
        return $task;
    }
    return loose($task);
}

function loose($task)
{
    out("Your loose!Want to try again?");
    $userInput = input();
    if ($userInput === "yes") {
        return $task;
    }
    return false;
}
